<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   
    {
        $users = User::all();
        return view('user.index', ['user' => $users]);
        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'mobile' => 'required',
            'add' => 'required'


        ]);

        $newuser = User::create($data);

        return redirect(route('user.index'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'mobile' => 'required',
            'add' => 'required'

        ]);

        $user->update($data);

        return redirect(route('user.index'))->with('success', 'user Updated Succesffully');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('success', 'user deleted Succesffully');
        //
    }
}
