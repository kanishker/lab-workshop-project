<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dept';
    /**
     * The primary key
     *
     * @var string
     */
    protected $primaryKey = 'deptno';

    public function employees()
    {
        return $this->hasMany('App\Models\Employee\Employee','deptno');
    }

}
