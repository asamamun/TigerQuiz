<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'subcategory_id',
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
   
    }
    public function subcategory()
    {
    return $this->belongsTo('App\Models\Subcategory');
    }
    public function quizzes()
    {
    return $this->hasMany('App\Models\Quiz');
    }
    //  public function scopeActive($query)
    // {
    //     return $query->where('active', 1);
    // }
    // public function scopeAvailable($query)
    // {  
    //     return $query->where('active', 1)->where('category_id', '!=', null);
    // }
}
