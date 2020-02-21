<?php
namespace App\Traits;


use Validator;
use Carbon;
use Illuminate\Support\Facades\DB;

trait FilterPatientRegistrationSticker {
    public function scopeFilterPatientRegistrationSticker($query)
    {
        $request = request();
        if(($request->sickness_case == '') && ($request->patient_first_name == '')&& ($request->patient_surname == '')){
            $patientNames = DB::connection('oracle')->table('LIVING_SUBJECT_LINK as patientLink')
                ->join('LIVING_SUBJECT_NAME as patientName', 'patientLink.correct_living_subject_id','=','patientName.living_subject_id')
//            ->where('patientLink.status_dova_code','=','ACTIVE')
                ->whereNull('patientName.end_date')
                ->selectRaw("patientLink.living_subject_id as patientid, patientName.first as first_name, patientName.last as last_name");

            $activeStatRegistrations = DB::connection('oracle')->table('STAT_REGISTRATION as stat_registration')
                ->joinSub($patientNames,'patient_names', function($join){
                    $join->on('patient_names.patientid','=','stat_registration.person_link_id');
                })
                ->join('SICKNESS_CASE as sickness_case','sickness_case.id','=','stat_registration.sickness_case_id')
                ->select('sickness_case.case_number', 'patient_names.first_name','patient_names.last_name')
//                ->where('stat_registration.cure_type_dova_code','=','STAT')
//                ->orWhere('stat_registration.cure_type_dova_code','=','DAY_STAT')
                    ->where(function ($q) {
                        $q->where('stat_registration.cure_type_dova_code','=','STAT')->orWhere('stat_registration.cure_type_dova_code','=','DAY_STAT');
                    })
                ->where('stat_registration.company_id','=','17')
                ->where('stat_registration.registration_state_dova_code','=','OPENED')
            ->get();
            return $activeStatRegistrations;
        }

    }
}
