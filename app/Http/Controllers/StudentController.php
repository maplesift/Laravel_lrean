<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello index');
        // $data = DB::table('students')->get();
        
        $data = Student::get();
        // $data = DB::select('SELECT * FROM students');
        // $data = DB::table('students')->select('id','name', 'mobile as my_mobile')->get();
        // dd($data);
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
               // dd($input);
       
               $data = new Student;
       
               // $data->name = $request->name;
               // $data->mobile = $request->mobile;
       
               $data->name = $input['name'];
               $data->mobile = $input['mobile'];
       
               $data->save();
       
               return redirect()->route('students.index');
               // return redirect('/students');
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
        $data = Student::find($id);
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
        // dd($request);
        // $data為原始資料
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        // 導回首頁
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $data = Student::find($id);
        $data->delete();

        return redirect()->route('students.index');
// $flight = Flight::find(1);
 
// $flight->delete();

    }
    

}
