<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PermissionController extends Controller
{
    public function index(){
        return view('admin.permissions.index',['permissions'=>Permission::all()]);
    }
    public function store(){
        request()->validate(['name' => ['required']]);

        Permission::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-')

        ]);
        return back();
    }

    public function edit (Permission $permission){

        return view('admin.permissions.edit', ['permission'=>$permission,'permissions']);

    }

    public function destroy(Permission $permission){
        $permission->delete();
        session()->flash('permission-deleted','Permission has been deleted');
        return back();
    }

    public function update (Permission $permission){

        $permission->name= Str::ucfirst(request('name'));
        $permission->slug= Str::of(request('name'))->slug('-');

        $permission->save();
        session()->flash('permission-updated','permission has been updated');

        return back();


    }
}
