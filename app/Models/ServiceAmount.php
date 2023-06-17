<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAmount extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
 
     public function student_class(){
        return $this->belongsTo(StudentClass::class,'class_id','id');
    }
 
}
