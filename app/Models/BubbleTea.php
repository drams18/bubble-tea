<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BubbleTea extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_path', 'description', 'price'];

    public function getImageUrlAttribute()
    {
        return asset('storage/app/public/' . $this->image_path);
    }
}
