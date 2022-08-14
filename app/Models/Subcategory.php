<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'active',
    ];

    public function blogs()
    {
    return $this->hasMany('App\Models\Blog');
    }
    public function category()
    {
    return $this->belongsTo('App\Models\Category');
    return $this->belongsTo(Category::class);
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
