<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table="_z_country";
    public $timestamps=false;

    protected $fillable=[  
          'id',
          'iso',
          'name',
          'dname',
          'iso3',
          'position',
          'numcode',
          'phonecode',
          'created',
          'register_by',
          'modified',
          'modified_by',
          'record_deleted',

    ]; 
}
