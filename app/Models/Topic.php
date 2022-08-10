<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'subcategory_id',
        'active',
    ];
    public function blogs()
    {
    return $this->hasMany('App\Models\Blog');
    }
    public function subcategory()
    {
    return $this->belongsTo('App\Models\Subcategory');
    }
    public function quizzes()
    {
    return $this->hasMany('App\Models\Quiz');
    }
}
