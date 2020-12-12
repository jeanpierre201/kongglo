<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $comments = $post->comments()->whereIsActive(1)->get();
        //return dd($comments);
        return view('blog.blog-post', ['post'=> $post, 'comments'=> $comments]);
    }

    public function create()
    {
       $categories = Category::all();
       $this->authorize('create', Post::class);
       return view('admin.posts.create', ['categories'=>$categories]);
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

    public function comment()
    {
        $user = auth()->user();
        $inputs = [
            'post_id'=> request()->post_id,
            'username'=> $user->username,
            'avatar'=> $user->avatar,
            'body'=> request()->body
        ];

        Comment::create($inputs);

        Session()->flash('comment-message', 'Comment submitted');

        return back();

    }

}
