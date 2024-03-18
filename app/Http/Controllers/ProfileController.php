<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(){
        return view('backend.users.index')
            ->with('users', User::all())
            ->with('pageName', 'Users');
    }


    public function create()
    {
        return view('backend.users.create')
            ->with('pageName','Create User');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, $id): View
    {
        return view('backend.users.edit')
            ->with('pageName', 'Edit User')
            ->with('user', user::findOrFail($id));
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name"=> "required|string",
            "image"=>"required",      
            "email"=> "required|string|max:50",
            "password"=>"required|string",
            "mobile"=>"required|string",
            "role"=>"required",
            "summary"=>"required|string"
        ]);
        User::create([
            "name"=> $request->name,
            "image"=> $request->image,
            "email"=> $request->email,
            "password"=> $request->password,
            "mobile"=> $request->mobile,
            "role"=> $request->role,
            "summary"=> $request->summary
        ]);


        return redirect()->route('dashboard.users.index');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user = User::findOrFail($id);

        $this->validate($request, [
            "name"=> "required|string",      
            "email"=> "required|string|max:50",
            "password"=>"required|string",
            "mobile"=>"required|string",
            "role"=>"required",
            "summary"=>"required|string"     
            ]);
        
        $user->update([
            "name"=> $request->name,
            "image"=> $request->image,
            "email"=> $request->email,
            "password"=> $request->password,
            "mobile"=> $request->mobile,
            "role"=> $request->role,
            "summary"=> $request->summary
        ]);

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.users.index');
    }
}
