<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author']; // autoLoad

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
