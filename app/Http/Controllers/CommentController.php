<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', ['comments'=>$comments]);
    }

    public function destroy(Comment $comment)
    {
        // if(auth()->user()->id !== $post->user_id)
        $this->authorize('delete', $comment);
        $comment->delete();
        Session::flash('message', 'Comment was deleted');
        return back();
    }

    public function update(Comment $comment)
    {
        // validations
        Comment::findOrFail($comment->id)->update(request()->all());
        return back();
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;

        return view('admin.comments.show', ['comments'=>$comments, 'post'=>$post]);
        //return dd($comments);
    }
}
