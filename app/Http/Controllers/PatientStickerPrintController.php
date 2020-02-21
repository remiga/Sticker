<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class PatientStickerPrintController extends Controller
{
    //prepare and print sticker
    public function index(Request $request)
    {
        $patient_name = $request->patient_first_name;
        $patient_surname = $request->patient_surname;
        $sickness_number = str_replace("-","&minus;",$request->sickness_case);
        $copy_number =  $request->copy_number;
        $text = "<p>".$patient_name."<br>".$patient_surname."<br><span class='historynumber'>".$sickness_number."</span></p>";
        $textFull='';
        for ($i = 1; $i <$copy_number+1; $i++) {
            $textFull.=$text;
        }
        $pdf = PDF::loadView('pdfview',['text'=>$textFull]);
        echo (storage_path());
        $customPaper = array(0,0,56,100);
        $pdf->setOptions(['dpi' => 300]);
        $generatedName = '';
        $generatedName = uniqid('sticker_');
        $pdf->setPaper($customPaper,'landscape')->save(storage_path('app/public').'/'.$generatedName.'.pdf');
        exec('lpr -P TerapinisGodex /var/www/html/kulhis/storage/app/public/'.$generatedName.'.pdf');
    }
}
