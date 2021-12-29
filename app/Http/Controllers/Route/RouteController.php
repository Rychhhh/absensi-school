<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Presensi;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\User;

class RouteController extends Controller
{
    // tampilan seluruh data rayon
    public function rombelData()
    {
        $dataRombel = Rombel::all();
        return view('admins.Group.crudRombel', compact('dataRombel'));
    }

    // tampilan seluruh data rayon
    public function rayonData()
    {
        $dataRayon = Rayon::all();
        return view('admins.Group.crudRayon', compact('dataRayon'));
    }

    // tampilan absen  data
    public function dataabsen()
    {
        return view('admins.User.dataAbsen');
    }


    
}
