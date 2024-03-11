<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = about::first();
        if ($about){
            return view("backend.about.edit")
                ->with("about", $about)
                ->with('pageName', 'About');
        }else{
            return view("backend.about.index")
                ->with('pageName', 'About');
        }
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
        $this->validate($request, [
            "image"=>"required",
            "title"=> "required|string|max:50",
            "article"=>"required"        
        ]);
        about::create([
            "image"=>$request->image,
            "title"=>$request->title,
            "article"=>$request->article,
        ]);

        return redirect()->route('dashboard.about');

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
        $about = about::all()->first();

        $this->validate($request, [
            "title"=> "required|string|max:50",
            "article"=>"required"          
        ]);
        
        $about->update([
            'image'=> $request->image || $about->image,
            'title'=>$request->title,
            'article'=> $request->article,
        ]);

        return redirect()->route('dashboard.about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
