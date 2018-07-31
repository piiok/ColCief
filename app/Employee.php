<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $primaryKey = 'id_employee';
    protected $fillable = ['id_employee','id_card','firs_name', 'last_name', 'email', 'password', 'address', 'degree', 'role'	];
    protected $hidden = [
        'password', 'remember_token',
    ];
    //relacion con subject_teacher_course
    public function subjectTCs(){ 
    	return $this->hasMany('App\SubjectTC');
    }
}