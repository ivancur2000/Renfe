<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $stations = Station::all();
      return view('admin.station.index', compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lines = Line::pluck('name', 'id');
        return view('admin.station.create', compact('lines'));
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
        'name' => 'required|unique:stations|max:150',
        'code' => 'required',
        'address' => 'required',
        'price' => 'required',
        'schedule' => 'required',
        'line_id' => 'required'
      ]);

      Station::create($request->all());
      return redirect()->route('admin.station.index')->with('create', 'OK');
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
    public function edit(Station $station)
    {
      $lines = Line::pluck('name', 'id');
      return view('admin.station.edit', compact('lines', 'station'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
      $request->validate([
        'name' => 'required|max:150',
        'code' => 'required',
        'address' => 'required',
        'price' => 'required',
        'schedule' => 'required',
        'line_id' => 'required'
      ]);

      $station->update($request->all());
      return redirect()->route('admin.station.index')->with('edit', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
      $station->delete();
      return redirect()->route('admin.station.index')->with('delete', 'OK');
    }
}
