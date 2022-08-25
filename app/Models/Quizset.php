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
        'stime',
        'active',
        'user_id',
        'category_id',
        'subcategory_id',
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
}
