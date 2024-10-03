<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'logo',
        'whatsapp_number',
        'email',
        'phone',
        'facebook_link',
        'instagram_link',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

}
