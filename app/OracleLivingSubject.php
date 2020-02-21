<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OracleVisit;
use App\OracleSicknessCase;

class OracleLivingSubject extends Model
{
    protected $table = 'LIVING_SUBJECT';
    protected $connection='oracle';
    protected $primaryKey='id';
    public $with = [ 'sicknessAndVisit'];

    public function sicknessAndVisit()
    {
        return $this->hasManyThrough('App\OracleVisit', 'App\OracleSicknessCase', 'person_link_id', 'sickness_case_id')->select('structure_unit_id');
    }
    public function sickness()
    {
        return $this->hasMany('App\OracleSicknessCase', 'person_link_id','id');
    }
    public function visit()
    {
        return $this->hasManyThrough('OracleVisit', 'OracleSicknessCase', 'PERSON_LINK_ID', 'SICKNESS_CASE_ID');
    }
}
