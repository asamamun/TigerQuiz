<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'active',
      
    ];
    public function Subcategories()
    {
    return $this->hasMany('App\Models\Subcategory');
    }
}
