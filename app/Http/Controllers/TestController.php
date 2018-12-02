<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department\Department;

class TestController extends Controller
{
    public function index(){

        $objDepartment = new Department();
        $objDepartment->dname = "IT";
        $objDepartment->loc = "Colombo";
        $objDepartment->save();

        $objDepartment = Department::find(41);
        $objDepartment->dname = "HR";
        $objDepartment->save();

        $objDepartment = Department::find(41);
        $objDepartment->delete();

        $departments = Department::all();
        foreach ($departments as $department) {
            echo $department->dname."<BR/>";
        }


    }
}
