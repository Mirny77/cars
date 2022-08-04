<?php

namespace App\Filters;
use Carbon\Carbon;
class Filter extends QueryFilter{
    public function motor_id($id = null){

        return $this->builder->when($id, function($query) use($id){
            $query->where('motor_id', $id);
        });
    }
    public function drive_id($id = null){

        return $this->builder->when($id, function($query) use($id){
            $query->where('motor_id', $id);
        });
    }

}
