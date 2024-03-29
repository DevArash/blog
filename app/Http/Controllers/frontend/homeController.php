<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\setting;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.home.index')
            ->with('settings', setting::first())
            ->with('topics', post::paginate(15)->pluck('topic'))
            ->with('posts', post::simplePaginate(5));
    }

    public function filterBasedTopic($topic)
    {
        $posts = post::where('topic', $topic)->simplePaginate(5);
        return view('frontend.home.index')
            ->with('topics', post::paginate(15)->pluck('topic'))
            ->with('settings', setting::first())
            ->with('posts', $posts);
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
        $post = post::findOrFail($id);
        return view('frontend.home.post_details')
            ->with('post', $post)
            ->with('settings', setting::first());
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
