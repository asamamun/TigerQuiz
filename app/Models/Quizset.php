<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'subcategory_id',
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

    //mutator
/*     protected function category_id(): Attribute
    {
        return Attribute::make(            
            set: fn ($value) => $value=="-1"?null:$value,
        );
    }
    protected function subcategory_id(): Attribute
    {
        return Attribute::make(            
            set: fn ($value) => $value=="-1"?null:$value,
        );
    }
    protected function topic_id(): Attribute
    {
        return Attribute::make(            
            set: fn ($value) => $value=="-1"?null:$value,
        );
    } */
}
