<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'active',
      
    ];
    public function Subcategories()
    {
    return $this->hasMany('App\Models\Subcategory');
    }
    public function blogs()
    {
    return $this->hasMany('App\Models\Blog');
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
