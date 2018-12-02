<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'emp';

    /**
     * The primary key
     *
     * @var string
     */
    protected $primaryKey = 'empno';

    public function car()
    {
        return $this->hasOne('App\Models\Employee\Car', 'empno');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department\Department','deptno');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Models\Employee\Project');
    }
}
