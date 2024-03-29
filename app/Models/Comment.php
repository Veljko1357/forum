<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     protected $fillable = ['body'];

    public function user()
    {
         return $this->belongsTo(User::class); 
    }

    public function post()
    {
         return $this->belongsTo(Post::class); 
    }

}
