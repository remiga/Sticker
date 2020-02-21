<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OracleEmerVisits extends Model
{
    protected $table='KVL_RCPT_ACTIVE_LIST';
    protected $connection='oracle';
}
