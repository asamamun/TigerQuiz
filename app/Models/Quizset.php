<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizset extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'quizzes',
        'active',
        'user_id',
        'category_id',
        'category_id',
        'topic_id',
        'stime',
        'entime',
    ];

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
    public function answer()
    {
    return $this->hasMany('App\Models\Answer');}
}
