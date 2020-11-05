<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.blog-post', ['post'=> $post]);
    }

    public function create()
    {
        $this->authorize('create', Post::class);
        return view('admin.posts.create');
    }

    public function store()
    {
        //see policies
        //$this->authorize('create', $post);

        $this->authorize('create', Post::class);

       // dd(request()->all());

       // validations
       $inputs = request()->validate([
           'title'=> 'required | min:8 | max:255',
           'post_image'=> 'file',
           'body'=> 'required'
       ]);

       if(request('post_image')) {
           $inputs['post_image'] = request('post_image')->store('images');
       }

       auth()->user()->posts()->create($inputs);
       Session()->flash('post-created-message', 'Post was created with title: '. $inputs['title']);
       return redirect()->route('post.index');
    }

    public function index()
    {
        //Authorized user
        //$posts = auth()->user()->posts;

        //$posts= Post::all();
        
        //Display Pagination
        $posts = auth()->user()->posts()->paginate(5);
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        Session::flash('message', 'Post was deleted');
        return back();
    }

    public function edit(Post $post)
    {
        // Authorize users
        // $this->authorize('view', $post);

        // if(auth()->user()->can('view', $post)) {};

        return view('admin.posts.edit', ['post'=>$post]);
    }

    public function update(Post $post)
    {
        // validations
       $inputs = request()->validate([
        'title'=> 'required | min:8 | max:255',
        'post_image'=> 'file',
        'body'=> 'required'
    ]);

    if(request('post_image')) {
        $inputs['post_image'] = request('post_image')->store('images');
        $post->post_image = $inputs['post_images'];
    }
        $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        //Authorize
        $this->authorize('update', $post);
       

        //update
        //auth()->user()->posts()->save($post);
        //$post->update();
        $post->save();

        Session()->flash('post-updated-message', 'Post was updated with title: '. $inputs['title']);
        
        return redirect()->route('post.index');
    }

}
