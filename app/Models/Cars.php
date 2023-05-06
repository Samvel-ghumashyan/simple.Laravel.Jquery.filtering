<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(CarCategory::class, 'car_category_id');
    }
}
