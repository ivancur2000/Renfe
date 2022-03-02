<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function edit(){
    $preferences = Preference::all();
    $user = User::find(Auth::user()->id);
    return view('user.edit', compact('user', 'preferences'));
  }

  public function update (Request $request, User $user){
    $user->preferences()->sync($request->preferences);
    return redirect()->route('dashboard');
  }
}
