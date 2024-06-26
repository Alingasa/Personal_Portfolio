<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InterestController extends Controller
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
            $interest = Interest::simplePaginate(5);

            return view('pages.interests.index', compact('interest'))->with('i', (request()->input('page', 1) -1 )* 5);
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
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'image_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|unique:interests',
        ]);

        if ($request->hasFile('image_logo')) {
            $avatar = $request->file('image_logo');
            $avatarPath = $avatar->store('img', 'public'); 
            $data['image_logo'] = $avatarPath;
        } else {
            
            $data['image_logo'] = null;
        }
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                Interest::create($data);
                return redirect()->route('interests.index')->with('add_success', 'User created successfully.');
            }else{
                abort(404);
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
    public function update(Request $request, Interest $interest)
    {
        //
        $data = $request->validate([
            'image_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
        ]);
         
        if ($request->hasFile('image_logo')) {
           
            if ($interest->image_logo) {
                Storage::disk('public')->delete($interest->image_logo);
            }
        
            $avatar = $request->file('image_logo');
            $avatarPath = $avatar->store('avatars', 'public'); 
            $data['image_logo'] = $avatarPath;
        } 
        
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $interest->update($data);
                return redirect()->route('interests.index')->with('update_success', 'User created successfully.');
            }else{
                abort(404);
            }
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interest $interest)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }else{
            if(auth()->user()->role == 'admin'){
                $interest->delete();
                return redirect()->route('interests.index')->with('delete', 'User created successfully.');
            }else{
                abort(404);
            }
        }
       
    }
}
