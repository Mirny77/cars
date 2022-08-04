<?php

namespace App\Models;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class CarModel extends Model
{
    use HasFactory;
    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function motor()
    {
        return $this->hasMany(Motor::class);
    }
    public function drive()
    {
        return $this->hasMany(Drive::class);
    }
}
