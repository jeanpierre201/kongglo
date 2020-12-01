<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //

    public function create()
    {
        $user = auth()->user();
        $inputs = [
            'comment_id'=> request()->comment_id,
            'username'=> $user->username,
            'avatar'=> $user->avatar,
            'body'=> request()->body
        ];

        Reply::create($inputs);

        Session()->flash('comment-message', 'Reply submitted');

        return back();
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comment = Comment::findOrFail($id);
        $replies = $comment->replies;

        return view('admin.comments.replies.show', ['replies'=>$replies, 'comment'=>$comment, 'post'=>$post]);
        //return dd($comments);
    }

}
