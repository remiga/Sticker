<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FilterPatientRegistrationSticker;

class PatientRegistrationSticker extends Model
{
    use FilterPatientRegistrationSticker;
}
