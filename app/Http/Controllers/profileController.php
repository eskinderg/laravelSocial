<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileUpdateRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\User;

use Auth;


class profileController extends Controller
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
