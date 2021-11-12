<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    public function user()
    {
        # access user who posted
        return $this->belongsTo(User::class);
    }
}
