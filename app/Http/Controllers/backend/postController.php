<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Str;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backend.post.index')
            ->with("posts", Post::orderBy("updated_at","DESC")->simplePaginate(10))
            ->with('pageName','Post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.post.create')
            ->with('pageName','Create Post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "topic"=> "required|string",
            "title"=> "required|string|max:50",
            "image"=>"required",
            "article"=>"required"        
        ]);
        Post::create([
            "topic"=>$request->topic,
            "title"=>$request->title,
            "image"=>$request->image,
            "article"=>$request->article,
        ]);


        return redirect()->route('dashboard.post');
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
        return view('backend.post.edit')
            ->with('pageName','Edit Post')
            ->with('post',post::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = post::findOrFail($id);

        $this->validate($request, [
                "topic"=> "required|string",
                'title'=> 'required|string|max:50',
                'article'=>'required'        
            ]);
        
        $post->update([
            'image'=> $request->image,
            'topic'=> $request->topic,
            'title'=>$request->title,
            'article'=> $request->article,
        ]);

        return redirect()->route('dashboard.post');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function delete(Request $request, $id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('dashboard.post');

    } 

    public function destroy(string $id)
    {
        $post = post::withTrashed()->where("id", $id)->first();
        $post->forceDelete();
        return redirect(route("dashboard.post.trashed"));
    }

    public function trash(){
        return view("backend.post.trashed")
            ->with("posts", Post::onlyTrashed()->orderBy("deleted_at","DESC")->simplePaginate(10))
            ->with('pageName', 'Trashed Post');
    }

    public function restore($id){
        $post = post::withTrashed()->where("id", $id)->first();
        $post->restore();

        return redirect(route("dashboard.post.trashed"));
    }
}
