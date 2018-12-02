<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'proj';
    /**
     * The primary key
     *
     * @var string
     */
    protected $primaryKey = 'projno';

    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee\Employee');
    }
}
