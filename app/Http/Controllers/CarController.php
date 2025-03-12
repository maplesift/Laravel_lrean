<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello index');
        // $data = DB::table('cars')->get();
        
        $data = Car::get();
        // $data = DB::select('SELECT * FROM cars');
        // $data = DB::table('cars')->select('id','name', 'color as my_color')->get();
        // dd($data);
        return view('car.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hi create');
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               // dd($request);
               $input = $request->except('_token');
               // dd($input);
       
               $data = new Car;
       
               // $data->name = $request->name;
               // $data->color = $request->color;
       
               $data->name = $input['name'];
               $data->color = $input['color'];
       
               $data->save();
       
               return redirect()->route('cars.index');
               // return redirect('/cars');
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
        $url= route('cars.edit',['car'=>$id]);
        
        // get   = fetchAll
        // first = fetch
        // $data = Car::where('id', $id)->first();
        $data = Car::find($id);
        // dd($data);
        // dd($url);
        // dd("hi the $id");
        return view('car.edit',['data'=>$data]);
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
        $data = Car::find($id);
        $data->name = $input['name'];
        $data->color = $input['color'];
        $data->save();
        // 導回首頁
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $data = Car::find($id);
        $data->delete();

        return redirect()->route('cars.index');
        // $flight = Flight::find(1);
            
        // $flight->delete();
    }
}

