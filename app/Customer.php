<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['first_name',
                            'last_name',
                            'gender',
                            'status',
                            'email',
                            'mobile_number'];


                            public function user(){
                                return $this->belongsTo('App\User');
                            }
}

