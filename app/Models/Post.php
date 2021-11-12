<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    public function likedBy(User $user)
    {
        // check if user has already liked post
        return $this->likes->contains('user_id', $user->id); //collection method
    }

    public function user()
    {
        # access user who posted
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        # code...
        return $this->hasMany(Like::class);
    }
}
