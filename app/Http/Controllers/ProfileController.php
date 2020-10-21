<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function show(User $user){
  	return view('profiles.show', compact('user'));
  }
  public function edit(User $user){
  	// abort_if($user->isNot(current_user()), 403);
  	// $this->authorize('edit', $user);
  	return view('profiles.edit', compact('user'));
  }

}
