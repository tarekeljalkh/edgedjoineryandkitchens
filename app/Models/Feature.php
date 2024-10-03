<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image1',  // First image
        'image2',  // Second image
        'icon1',  // New field for first icon
        'icon2',  // New field for second icon
        'icon3',  // New field for third icon
    ];

}
