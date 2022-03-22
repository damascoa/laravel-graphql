<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'coment', 'user_id'];


    public function user() // WORKS
    {
        return $this->belongsTo(User::class);
    }
}
