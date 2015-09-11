<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\user;

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

     public function update(Request $request, $id)
     {
         $user = User::findOrFail($id);

         $validator = validator::make($request->all(), [
              'firstname' => 'min:3',
              'lastname' => 'min:3',
              'email' => 'required|email',
          ]);

          if($validator->fails())
          {
              return redirect()->back()->withErrors($validator->errors());
          }

         $user->fill($request->all());
         $user->save();
         \Session::flash('flash_message','Your profile has been updated!');

         return redirect()->route('profile');
     }

}
