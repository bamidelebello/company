<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newshow()
    {
        return view('user.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function formstore(Request $request)
    {
        

        // $data = $request->all();
        //   $user=User::create([
        //     'name' => $data['name'],
        //     'first_name' => $data['first_name'],
        //     'middle_name' => $data['middle_name'],
        //     'last_name' => $data['last_name'],
        //     'city' => $data['city'],
        // ]);
        // return back();


        //  if(Auth::check()){
        //     $user=User::create([
        //     'name' => $request->input('name'),
        //     'first_name'=>$request->input('first_name'),
        //   'middle_name'=>$request->input('middle_name'),
        //   'last_name'=>$request->input('last_name'),
        //       'city'=>Auth::user()->city

        //     ]);

        // }
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
