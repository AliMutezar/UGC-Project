<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.users.index', [
            'table_title'   =>  'Users Data',
            'users' =>  User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.users.create', [
            'users' =>  User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name"      =>  ['required', 'max:255'],
            "username"  =>  ['required', 'max:255', 'min:3', 'unique:users'],
            "email"     =>  ['required','email:dns','unique:users'],
            "role"      =>  ['required', Rule::notIn(['0'])],
            "password"  =>  ['required', 'min:8', 'max:255', 'confirmed'],
            "password_confirmation" => ['required', 'min:8']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('admin/users')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.admin.users.edit', [
            'user'  =>  $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            "name"      =>  ['required', 'max:255'],
            "role"      =>  ['required', Rule::notIn(['0'])]
        ];

        // Check unique value and password
        if($request->username != $user->username) {
            $rules['username'] = 'required | max:255 | min:3 | unique:users';
        }

        if($request->email != $user->email) {
            $rules['email'] = 'required | email | unique:users';
        }

        $validatedData = $request->validate($rules);
        User::where('id', $user->id)
                ->update($validatedData);
        return redirect('admin/users')->with('success', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('admin/users')->with('success', 'User has been deleted');
    }
}
