<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preference;
use App\Models\Route;
use App\Models\Station;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $routes = Route::all();
      return view('admin.route.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $preferences = Preference::all();
      $stations = Station::all();
      return view('admin.route.create', compact('stations', 'preferences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illumainate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|unique:routes|max:255',
        'code' => 'required',
        'longer' => 'required',
        'duration' => 'required',
        'description' => 'required',
        'starting_station' => 'required',
        'ending_station' => 'required'
      ]);
      $route = Route::create([
        'name' => $request->name, 
        'code' => $request->code,
        'longer' => $request->longer,
        'duration' => $request->duration,
        'description' => $request->description,
        'starting_station' => $request->starting_station,
        'ending_station' => $request->ending_station
      ]);

      $route->stations()->attach($request->stations);
      $route->preferences()->attach($request->preferences);

      return redirect()->route('admin.route.index')->with('create', 'OK');
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
    public function edit(Route $route)
    {
      $preferences = Preference::all();
      $stations = Station::all();
      return view('admin.route.edit', compact('stations', 'preferences', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
      $request->validate([
        'name' => 'required|max:255',
        'code' => 'required',
        'longer' => 'required',
        'duration' => 'required',
        'description' => 'required',
        'starting_station' => 'required',
        'ending_station' => 'required'
      ]);
      $route->update([
        'name' => $request->name, 
        'code' => $request->code,
        'longer' => $request->longer,
        'duration' => $request->duration,
        'description' => $request->description,
        'starting_station' => $request->starting_station,
        'ending_station' => $request->ending_station
      ]);
      $route->preferences()->sync($request->preferences);
      $route->stations()->sync($request->stations);
      return redirect()->route('admin.route.index')->with('edit', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
      $route->delete();
      return redirect()->route('admin.route.index')->with('delete', 'OK');
    }
}
