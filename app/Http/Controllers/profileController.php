<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
         $user->fill($request->all());
         $user->save();

         return redirect('/profile');
     }

}
