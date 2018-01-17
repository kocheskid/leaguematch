<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetails;
use App\Role;
use App\Permission;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        $roles = Role::get();
        return view('users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'roles' => 'required'
        ]);
        $user = User::create($request->except('roles'));

        if($request->roles <> ''){
            $user->roles()->attach($request->roles);
        }
        return redirect()->route('users.index')->with('success','User has been created');

    }
    public function edit($id) {
        $user = User::findOrFail($id);
        $user_details = UserDetails::where('user_id', $id)->first();
        if(!$user_details){
            $user_details = new UserDetails();
        }
        $roles = Role::get();
        return view('admin.users.edit', compact('user', 'roles', 'user_details'));
    }
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);

//        $this->validate($request, [
//            'name'=>'required|max:120',
//            'email'=>'required|email|unique:users,email,'.$id,
//            'password'=>'required|min:6|confirmed'
//        ]);

        $input = $request->except('roles');
        $user->fill($input)->save();
        if ($request->roles <> '') {
            $user->roles()->sync($request->roles);
        }
        else {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')->with('success',
            'User successfully updated.');
    }
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success',
            'User successfully deleted.');
    }
}
