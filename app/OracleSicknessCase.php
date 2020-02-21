<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OracleLivingSubject;

class OracleSicknessCase extends Model
{
    protected $table='SICKNESS_CASE';
    protected $connection='oracle';
    protected $primaryKey='ID';

    public function livingsubject()
    {
        return $this->belongsTo('OracleLivingSubject', 'PERSON_LINK_ID');
    }
}
