<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
      'owner_email',
      'line_1',
      'line_2',
      'number',
      'state',
      'city',
      'borough'
    ];

    public function contract(){
        return $this->hasOne(Contract::class,'property_id','id');
    }

}
