<?php

namespace App\Http\Controllers\Student;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // view student index
    public function seleksiStudent()
    {
        return view('Presensi.Seleksi');
    }

    // view jam datang
    public function viewJamDatang() {
        return view('Presensi.Datang');
    }

    // view jam pulang
    public function viewJamPulang() {
        return view('Presensi.Pulang');
    }

    // view user tidak datang
    public function viewTidakDatang()
    {
        $presensi = Presensi::all();
        return view('Presensi.tidakDatang', compact('presensi'));
    }

}
