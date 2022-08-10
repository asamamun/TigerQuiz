<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'type',
        'option1',
        'option2',
        'option3',
        'option4',
        'ans',
        'user_id',
        'category_id',
        'subcategory_id',
        'topic_id',
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
}
