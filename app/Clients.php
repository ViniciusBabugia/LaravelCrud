<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clients extends Model
{    
    // Habilitando para listar somente os registros não excluídos 
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'birth_date', 
        'sex', 
        'zip_code', 
        'address', 
        'address_number',
        'address_complement', 
        'district', 
        'state', 
        'city'
    ];
}
