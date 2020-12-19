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

        //Get category class to execute a query
        //$category = Category::class;

       // dd(request()->all());

       // validations
       $inputs = request()->validate([
           'title'=> 'required | min:8 | max:255',
           'post_image'=> 'file',
           'body'=> 'required',
           'category_id'=> 'nullable'
       ]);

    //    if(request('category_id')) {
    //     $inputs['category_id'] = $category::where('name', request('category_id'))->value('id');
    //    }

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
        $posts = auth()->user()->posts()->paginate(10);
        return view('admin.posts.index', ['posts'=>$posts]);

        //dd($posts);
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
        $categories = Category::all();
        return view('admin.posts.edit', ['post'=>$post, 'categories'=>$categories]);
    }

    public function update(Post $post)
    {
        // validations
       $inputs = request()->validate([
        'title'=> 'required | min:8 | max:255',
        'post_image'=> 'file',
        'body'=> 'required',
        'category_id'=>'nullable'
    ]);

    if(request('post_image')) {
        $inputs['post_image'] = request('post_image')->store('images');
        $post->post_image = $inputs['post_images'];
    }
        $post->title = $inputs['title'];
        $post->body = $inputs['body'];
        $post->category_id = $inputs['category_id'];

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
