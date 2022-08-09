<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'fullnam',
        'institute',
        'subject',
        'designation',
        'bio',
        'phone',
        'address',
        'yt',
        'fb',
        'fb',
        'in',
        'guardianname',
        'guardianemail',
        'guardianphone',
        'guardianname',
        'image',
      
    ];
    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }
}
