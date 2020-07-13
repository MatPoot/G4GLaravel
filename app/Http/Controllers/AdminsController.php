<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;  // commented out because it had the same name as my user model and table
use Illuminate\Http\Request;
use App\User;

class AdminsController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function userindex(){

        $users = User::all();
        return view('admin.posts.userindex', ['users'=> $users]);

    }

    public function edit(Post $post)
    {
        $this->authorize('view',$post);
        return view('admin.posts.edit',['post'=>$post]);
    }
//    public function update(Post $post)
//    {
//        $inputs = request()->validate([
//            'title'=>'required|min:8|max:255',
//
//        ]);
//
//
//
//        $post->title=$inputs['title'];
//        $post->body=$inputs['body'];
//        $post->postcode=$inputs['postcode'];
//
//        $this->authorize('update',$post);
//
//        $post->save();
////        auth()->user()->posts()->save($post);
//        Session::flash('message','Post updated');
//        return redirect()->route('post.index');
//
//    }
}
