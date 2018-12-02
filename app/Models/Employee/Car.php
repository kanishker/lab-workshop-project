<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'company_cars';

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee\Employee', 'empno');
    }
}
