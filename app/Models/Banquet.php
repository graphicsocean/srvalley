<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banquet extends Model
{
    use HasFactory;
    protected $fillable = ['name','thumbnail','description','price','overview','special_features','slug','status'];

    public function Slider()
    {
        return $this->hasOne(Slider::class);
    }
}
