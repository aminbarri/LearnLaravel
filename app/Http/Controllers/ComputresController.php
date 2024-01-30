<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\Validator;


class ComputresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computres.index',[
            'computres'=> Computer::all()
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computres.create');
    }

    private static function getData(){
        return[];
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required' ,
            'origin' => 'required',
            'price' =>'required|integer'
        ]);
       $computer = new Computer();
       $computer->name = strip_tags($request->input('name')) ;
       $computer->origin =strip_tags($request->input('origin'));
       $computer->price = strip_tags($request->input('price'));
       $computer->save();
       return redirect()->route('computres.show');
    }

    /**
     * Display the specified resource.
     */
    public function show($computers)
    {
       return view('computres.index',[
        'computres'=>Computer::findOrfail($computers)
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
