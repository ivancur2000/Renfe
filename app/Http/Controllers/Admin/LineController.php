<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Line;
use Illuminate\Http\Request;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lines = Line::all();
      return view('admin.line.index', compact('lines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cities = City::pluck('name', 'id');
      return view('admin.line.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|unique:lines|max:150',
        'code' => 'required',
        'city_id' => 'required'
      ]);

      Line::create($request->all());

      return redirect()->route('admin.line.index')->with('create', 'OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Line $line)
    {
      $cities = City::pluck('name', 'id');
      return view('admin.line.edit', compact('cities', 'line'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
      $request->validate([
        'name' => 'required|max:150',
        'code' => 'required',
        'city_id' => 'required'
      ]);

      $line->update($request->all());

      return redirect()->route('admin.line.index')->with('edit', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
      $line->delete();
      return redirect()->route('admin.line.index')->with('delete', 'OK');
    }
}
