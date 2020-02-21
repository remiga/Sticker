<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientRegistrationSticker;

class PatientStickerController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'model' => PatientRegistrationSticker::filterPatientRegistrationSticker()
            ]);
    }

}
