<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Teacher::get();
        return view('teacher.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $data = new Teacher;
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];

        $data->save();

        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $url= route('teachers.edit',['teacher'=>$id]);
        $data = Teacher::find($id);
        // dd($data);
        return view('teacher.edit',['data'=>$data]);
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
        $data = Teacher::find($id);
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        // 導回首頁
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                // dd($id);
                $data = Teacher::find($id);
                $data->delete();
        
                return redirect()->route('teachers.index');
    }
}
