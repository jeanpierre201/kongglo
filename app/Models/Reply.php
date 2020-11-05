<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'username',
        'avatar',
        'body',
    ];

    public function replies() {
        return $this->belongsTo(Comment::class);
    }
}
