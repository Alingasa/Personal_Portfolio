<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile): RedirectResponse
    {
        // Validate the request data
        if(auth()->user()->role == 'spectator'){
            $data = $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'role' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
            ]);
        } else {
        $data = $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'role' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'birth_date' => 'required',
                'passion' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'age' => 'required',
                'municipality' => 'required',
                'province' => 'required',
                'zip_code' => 'required',
                'status' => 'required',
                'religion' => 'required',
                'description' => 'required',
                'fb_url' => 'required',
                'instagram_url' => 'required',
                'linkedin_url' => 'required',
                'youtube_url' => 'required',
            ]);
        }
       
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public'); 
            $data['avatar'] = $avatarPath;
        } else {
    
            $data['avatar'] = $profile->avatar;
        }
        
        $profile->update($data);
        return redirect()->route('dashboard')->with('update_success', 'User updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            abort(404);
        }
    }
}
