<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    private $customers = ['101' => ['name'=>'Peter','age'=>22],'102' => ['name'=>'Donald','age'=>32]];

    public function validate($data){

        $response = [];

        if(!isset($data['name'])){
            $response = [
                'has_error' => true,
                'error'=>'The name is required'
            ];
        } else {
            $response = [
                'has_error' => false,
                'error'=>''
            ];
        }
        return $response;

    }

    public function getCustomer($id){
            return $this->customers[$id];
    }
}
