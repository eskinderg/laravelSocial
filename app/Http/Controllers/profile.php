<?php

namespace Social\Http\Controllers;

use Illuminate\Http\Request;
use Social\Http\Requests\UserProfileUpdateRequest;

use Social\Http\Requests;
use Social\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Social\Models\User;

use Auth;


class profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         return View('profile.index')->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

     public function edit($id)
     {

     }

     public function update(UserProfileUpdateRequest $request,User $user)
     {

         $user->fill($request->all());
         $user->save();
         \Session::flash('flash_message','Your profile has been updated!');

         return redirect()->route('profile');
     }

}
