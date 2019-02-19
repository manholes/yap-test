<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    
    protected $table = 'classrooms';
      public function teacher() {
        return $this->belongsToMany(Teacher::class);
    }

    public function student() {
        return $this->belongsToMany(Student::class);
    }
}
