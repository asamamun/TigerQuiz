<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }
    public function category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function subcategory()
    {
    return $this->belongsTo('App\Models\Subcategory');
    }
    public function topic()
    {
    return $this->belongsTo('App\Models\Topic');
    }
    public function comments()
    {
    return $this->hasMany('App\Models\Comment');
    }
}
