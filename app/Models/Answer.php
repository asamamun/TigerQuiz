<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'qid',
        'qsid',
        'gans',
        'marks',
    ];

    public function user()
    {
    return $this->belongsTo('App\Models\User');
    // return $this-> belongsTo (User :: class, 'user_id');
    }
    public function quiz()
    {
    return $this->belongsTo('App\Models\Quiz');
    }
    public function quizset()
    {
    return $this->hasMany('App\Models\Quizset');
    }
}
