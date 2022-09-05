<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    public function user()
{
    // assuming you have a state_id in your customers table
    return $this->belongsTo(User::class);
}
public function quizset()
{
    // assuming you have a state_id in your customers table
    return $this->belongsTo(Quizset::class);
}
}
