<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\webinar;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $webinar = webinar::get();
        foreach ($webinar as $webinars) {
            $webinars->date = Carbon::parse($webinars->date)->isoFormat('MMMM DD, YYYY');
        }

        return view('pages.webinars.index', compact('webinar'));
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
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'host_name' => 'required',
            'agenda' => 'required',
            'date' => 'required',
        ]);
        
        if($request->hasFile('webinar_image')){
            $image = $request->file('webinar_image');
            $imagePath = $image->store('img', 'public');
            $data['webinar_image'] = $imagePath;
        }

       webinar::create($data);
       return redirect()->route('webinars.index');
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
    public function update(Request $request, webinar $webinar): RedirectResponse
    {
        //
        $data = $request->validate([
            'host_name' => 'required',
            'agenda' => 'required',
        ]);

         $webinar->update($data);
         return redirect()->route('webinars.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(webinar $webinar): RedirectResponse
    {
        //
        $webinar->delete();
        return redirect()->route('webinars.index');
    }
}
