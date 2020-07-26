<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function show(Post $post){

        return view('blog-post',['post'=> $post]);
    }

    public function create(){
       // $this->authorize('create',Post::class);
        return view('admin.posts.create');
    }
    public function store(){
//        auth()->user(); // grab the user token/id as well
//        dd(request()->all()); // log of all values
        //$this->authorize('store',$post);
       // $this->authorize('create',Post::class);
        $inputs = request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=> 'mimes:jpg,jpeg,png',
            'body'=>'required|min:8',
            'postcode'=>'required|min:6,max:6'
        ]);
        if(request('post_image')){ //if the request has a post_image available
            $inputs['post_image']= request('post_image')->store('images'); // put image in the array...then store it
        }

        auth()->user()->posts()->create($inputs);
        return back();
    }

    public function destroy(Post $post)
    {
       // $this->authorize('delete',$post);
        $post->delete();
        Session::flash('message','Listing was deleted');
        return back(); // returns user back to the original page they sent the request from
    }
    public function edit(Post $post)
    {
        //$this->authorize('view',$post);
        if(auth()->user()->can('view',$post)){

        }
    return view('admin.posts.edit',['post'=>$post]);
    }
    public function update(Post $post)
    {
        $inputs = request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=> 'mimes:jpg,jpeg,png',
            'body'=>'required|min:8',
            'postcode'=>'required|min:6,max:6'
        ]);


        if(request('post_image')){ //if the request has a post_image available
            $inputs['post_image']= request('post_image')->store('images'); // put image in the array...then store it
            $post->post_image=$inputs['post_image'];
        }

       $post->title=$inputs['title'];
        $post->body=$inputs['body'];
        $post->postcode=$inputs['postcode'];

        $this->authorize('update',$post);

        $post->save();
//        auth()->user()->posts()->save($post);
        Session::flash('message','Post updated');
        return redirect()->route('post.index');

    }
    public function index(){
        $posts = Post::all();
        //$posts = auth()->user()->posts()->paginate();
        return view('admin.posts.index',['posts'=>$posts]);
    }
}
