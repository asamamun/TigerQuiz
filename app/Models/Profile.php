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
        'batch',
        'subject',
        'designation',
        'gender',
        'bio',
        'phone',
        'address',
        'bloodgroup',
        'yt',
        'fb',
        'in',
        'guardianname',
        'guardianemail',
        'guardianphone',
        'image',
      
    ];
    public function user()
    {
    return $this->belongsTo('App\Models\User');
    // return $this-> belongsTo (User :: class, 'user_id');
    }
}
