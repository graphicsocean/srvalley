<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'address', 'info', 'fb_link', 'insta_link', 'gbiz_link'];
}
