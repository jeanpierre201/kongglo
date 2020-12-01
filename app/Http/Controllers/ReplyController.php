<?php

namespace App\Http\Controllers;
use App\Models\Reply;

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
}
