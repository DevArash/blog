<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.settings.index')
            ->with('pageName', 'Settings')
            ->with('settings', setting::first());
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
    public function update(Request $request)
    {
        $setting = setting::first();

        $this->validate($request,[
            'brandName' => 'required|max:20',
            'mainTitle'=> 'required|max:70',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'linkedin'=> 'required',
            'youtube'=> 'required',
        ]);

        if ($request->hasFile('logo')){
            $setting->update([
                'logo' => $request->logo,
                'brandName' => $request->brandName,
                'mainTitle' => $request->mainTitle,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin,
                'youtube'=> $request->youtube,

            ]);
        }else{
            $setting->update([
                'brandName' => $request->brandName,
                'mainTitle' => $request->mainTitle,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin,
                'youtube'=> $request->youtube,

            ]);
        }
        return redirect()->route('dashboard.settings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}