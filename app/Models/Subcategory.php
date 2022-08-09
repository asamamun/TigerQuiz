<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public function blogs()
    {
    return $this->hasMany('App\Models\Blog');
    }
    public function category()
    {
    return $this->belongsTo('App\Models\Category');
    }
    public function topics()
    {
    return $this->hasMany('App\Models\Topic');
    }
    public function quizsets()
    {
    return $this->hasMany('App\Models\Quizset');
    }
    public function quizzes()
    {
    return $this->hasMany('App\Models\Quiz');
    }
}
