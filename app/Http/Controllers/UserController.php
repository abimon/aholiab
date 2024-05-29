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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    protected function update($id, ){
        $user=User::findOrFail($id);
            if(request()->fname != null){
                $user->fname= request()->fname;
            }
            if(request()->lname != null){
                $user->lname= request()->lname;
            }
            if(request()->mname != null){
                $user->mname= request()->mname;
            }
            if(request()->contact != null){
                $user->contact= request()->contact;
            }
            if(request()->facebook != null){
                $user->facebook=request()->facebook;
            }
            if(request()->twitter != null){
                $user->twitter=request()->twitter;
            }
            if(request()->linkedin != null){
                $user->linkedin=request()->linkedin;
            }
            if (request()->hasFile('avatar')) {
                $extension = request()->file('avatar')->getClientOriginalExtension();
                $avatar = ($user->fname).uniqid().time(). '.' . $extension;
                request()->file('avatar')->storeAs('public/users/avatars', $avatar);
                $user->avatar = $avatar;
            }
        $user->update();
        return redirect('/dashboard')->with('success','Data update successiful.');
    }
    public function destroy(string $id)
    {
        //
    }
}
