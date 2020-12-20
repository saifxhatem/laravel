<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $primaryKey = 'id'; //unnecessary
    protected $connection = 'mysql'; //unnecessary as well
    
    protected $fillable = 'address';

    
}
