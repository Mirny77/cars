<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    use HasFactory;
    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
}
