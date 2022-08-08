<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category', 'description', 'price', 'location', 'picture', 'picture2', 'user_id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
