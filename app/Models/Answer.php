<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'qset_id',
        'type',
        'marks',
        'tquiz',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // return $this-> belongsTo (User :: class, 'user_id');
    }
    public function quizset()
    {
        return $this->belongsTo('App\Models\Quizset');
    }

    public function answer()
    {
        return $this->belongsTo('App\Models\Answer');
    }
}
