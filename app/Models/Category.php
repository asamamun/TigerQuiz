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
    return $this->hasMany('App\Models\Subcategory', 'category_id');
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
    public function topics()
    {
    return $this->hasMany('App\Models\Topic');
    }

    // public function scopeActive($query)
    // {
    //     return $query->where('active', 1);
    // }
}
