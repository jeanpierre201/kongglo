<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'username',
        'avatar',
        'body',
    ];

    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
