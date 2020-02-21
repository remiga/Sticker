<?php
namespace App\Traits;


use Validator;
use Carbon;
use Illuminate\Support\Facades\DB;

trait FilterPatientRegistrationStickerEmer {
    public function scopeFilterPatientRegistrationStickerEmer($query)
    {
        $request = request();
        if(($request->sickness_case == '') && ($request->patient_first_name == '')&& ($request->patient_surname == '')){
            $activeEmerRegistrations = DB::connection('oracle')->table('KVL_RCPT_ACTIVE_LIST as emer_registration')
//                ->select('emer_registration.case_number', 'emer_registration.first_name','emer_registration.last_name')
                ->select('emer_registration.case_number', 'emer_registration.vardas as first_name', 'emer_registration.pavarde as last_name')
                ->orderBy('sickness_start_date', 'desc')
            ->get();
            return $activeEmerRegistrations;
        }

    }
}
