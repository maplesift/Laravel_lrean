<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Phone;
use App\Models\Hobby;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello index');
        // $data = DB::table('students')->get();
        // $data = Student::get();
        $data = Student::with('phone')->with('hobbiesRelation')->get();
        // $data = Student::with('phone')->get();
        // $data = DB::select('SELECT * FROM students');
        // $data = DB::table('students')->select('id','name', 'mobile as my_mobile')->get();
        // dd($data);
        foreach ($data as $key1=> $val1) {
            $tmpArr=[];
            // dd($val1);
            // dd($val1->hobbiesRelation);
            foreach ($val1->hobbiesRelation as $key2=> $val2) {
                // dd($val2);
                array_push($tmpArr,$val2->name);
            }
            $tmpStr=implode(',',$tmpArr);
            $data[$key1]['hobbies']=$tmpStr;
        }
        // dd($tmpArr);

        return view('student.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               // dd($request);
               $input = $request->except('_token');
            //    dd($input);
            $hobbyArr = explode(",",$input['hobbies']);
                // dd($hobbyArr);
            // 主表   
               $data = new Student;
               $data->name = $input['name'];
               $data->mobile = $input['mobile'];
               $data->save();
            // 子表 phone
                $item = new Phone;
                $item->student_id = $data->id;
                $item->phone = $input['phone'];
                $item->save();    
            // 子表 hobby
            foreach ($hobbyArr as $key => $value) {
                
                $hobby = new Hobby;
                $hobby->student_id = $data->id;
                $hobby->name = $value;
                $hobby->save();
            }
            // return redirect('/students');
            return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $url= route('students.edit',['student'=>$id]);
        
        // get   = fetchAll
        // first = fetch
        // $data = Student::where('id', $id)->first();
        // $data = Student::with('phone')->find($id);
        $data = Student::where('id', $id)->with('phone')->with('hobbiesRelation')->first();
        $tmpArr=[];
        foreach ($data->hobbiesRelation as $key => $value) {
            array_push($tmpArr, $value->name);
        }
        $tmpString = implode(',', $tmpArr);
        // $data[$key1]['hobbies'] = $tmpString;
        $data['hobbyString'] = $tmpString;
        // $data = Student::where('id', $id)->with('phone')->first();
        // dd($data);
        // dd($url);
        // dd("hi the $id");
        return view('student.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 把 $request內的  '_token','_method 清除
        // $input為更新的資料 
        $input = $request->except('_token','_method');
        $hobbyArr = explode(",", $input['hobbies']);
        // dd($request);
        // $data為原始資料
        // 主表
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        // 子表
        // 刪除子表
        // Phone::find(['student_id',$id])->delete();
                // 刪除子表
                Phone::where('student_id', $id)->delete();
                Hobby::where('student_id', $id)->delete();
        // 子表 phone
        $item = new Phone;
        $item->student_id = $data->id;
        $item->phone = $input['phone'];
        $item->save();    

                // 新增子表 hobbies
                foreach ($hobbyArr as $key => $value) {
                    $hobby = new Hobby;
                    $hobby->student_id = $data->id;
                    $hobby->name = $value;
                    $hobby->save();
                }
        // 懶人包 不要用foreach 直接複製欄位
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // 導回首頁
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        // 刪除子表
        Phone::where('student_id', $id)->delete();
        Hobby::where('student_id', $id)->delete();

        // Phone::where('student_id', $id)->delete();
        // 刪除主表
        // Student::where('id', $id)->delete();
        Student::find($id)->delete();
        // $data->delete();
        return redirect()->route('students.index');
    }
    

}
