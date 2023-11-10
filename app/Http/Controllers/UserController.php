<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Contracts\Support\ValidatedData;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;



class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('auth.admin.user.alluser', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('auth.admin.user.usercreate', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt('password'),
        ]);

        $role = Role::find($validatedData['role']);
        $role->users()->attach($user);

        $permissions = [
            'user.create',
            'user.read',
            'user.update',
            'user.delete',
        ];

        $permissionIds = Permission::whereIn('name', $permissions)->pluck('id')->toArray();

        $role->syncPermissions($permissionIds);

        // $profile = new Profile();
        // $profile->user_id = $user->id;
        // $profile->bio = $validatedData['bio'];

        // if ($validatedData['image']) {
        //     $profile = $validatedData['image'];

        // }

        // $profile->save();

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('auth.admin.user.useredit', compact('user', 'roles'));
    }



    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users,email,'.$id,
    //         'password' => 'nullable',
    //         'role' => 'required|exists:roles,id',
    //     ]);

    //     $user = User::findOrFail($id);

    //     $user->update([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => isset($validatedData['password']) ? bcrypt($validatedData['password']) : $user->password,
    //     ]);

    //     $role = Role::find($validatedData['role']);
    //     $user->roles()->sync([$role->id]);

    //     $permissions = [
    //         'user.create',
    //         'user.read',
    //         'user.update',
    //         'user.delete',
    //     ];

    //     $permissionIds = Permission::whereIn('name', $permissions)->pluck('id')->toArray();

    //     $role->syncPermissions($permissionIds);

    //     return redirect()->route('admin.users.index');
    // }

        public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        $role = Role::find($validatedData['role']);
        $user->roles()->sync([$role->id]);

        $permissions = [
            'user.create',
            'user.read',
            'user.update',
            'user.delete',
        ];

        $permissionIds = Permission::whereIn('name', $permissions)->pluck('id')->toArray();

        $role->syncPermissions($permissionIds);

        return redirect()->route('admin.users.index');
    }

    public function updatePassword(Request $request, $id)
    {
        $validatedData = $request->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        if ($validatedData['password'] !== $validatedData['password_confirmation']) {
            return redirect()->back()->withErrors(['password' => 'The password and confirm password do not match.'])->withInput();
        }

        $user = User::findOrFail($id);
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect()->route('admin.users.index');
    }




    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

}
