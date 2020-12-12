<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

      public function user() {
          return $this->belongsTo(User::class);
      }

    //   public function setPostImageAttribute($value){
    //       return asset($value);
    //   }

    public function getPostImageAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
        }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function categories() {
        return $this->belongsTo(Category::class);
    }

}
