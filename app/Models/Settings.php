<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Settings extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title', 'description', 'keywords',
        'author', 'contact_title', 'contact_text'
    ];

    public $incrementing = false;

    protected $fillable = [
            'logo', 'icon', 'phone',
            'email', 'facebook', 'instagram', 'youtube',
            'twitter', 'github'
        ];
    use HasFactory;
}
