<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OracleVisit extends Model
{
    protected $table='VISIT';
    protected $connection='oracle';
    protected $primaryKey='ID';
}
