<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    use HasFactory;
    protected $tabel = "website_contents";
    protected $fillable = [
        'type',
        'title',
        'content',
    ];

    
}
