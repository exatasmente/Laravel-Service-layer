<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    const DOCUMENT_TYPE_CPF = 'cpf';
    const DOCUMENT_TYPE_CNPJ = 'cnpj';

    protected $fillable = [
        'email',
        'name',
        'document_type',
        'document',
        'property_id'
    ];

    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }
}
