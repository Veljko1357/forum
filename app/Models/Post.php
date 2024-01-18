<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
         return $this->belongsTo(User::class); 
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
