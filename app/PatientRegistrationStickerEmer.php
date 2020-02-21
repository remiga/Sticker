<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FilterPatientRegistrationStickerEmer;

class PatientRegistrationStickerEmer extends Model
{
    use FilterPatientRegistrationStickerEmer;
}
