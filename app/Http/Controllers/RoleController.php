<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }

    public function store()
    {
        request()->validate(['name' => ['required']]);

        Role::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')

        ]);
        return back();
    }
    public function destroy(Role $role){
        $role->delete();
        session()->flash('role-deleted','Role has been deleted');
        return back();
    }

    public function edit (Role $role){

        return view('admin.roles.edit', ['role'=>$role]);

    }

    public function update (Role $role){

        $role->name= Str::ucfirst(request('name'));
        $role->slug= Str::of(request('name'))->slug('-');

        $role->save();
        session()->flash('role-updated','Role has been updated');

        return back();


    }
}
