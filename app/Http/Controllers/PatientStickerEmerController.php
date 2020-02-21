<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientRegistrationStickerEmer;

class PatientStickerEmerController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'model' => PatientRegistrationStickerEmer::filterPatientRegistrationStickerEmer()
            ]);
    }
}
