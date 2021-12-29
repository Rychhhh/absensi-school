<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['CheckRole', 'auth']);   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view data absen berdasar tanggal
        return view('admins.User.pageDateAbsen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan data kedatangan masuk
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d'); // Year Month Day
        $localtime = $date->format('H:i:s'); // Jam Menit Detik

        $presensi = Presensi::where([
            ['user_nis', '=' , auth()->user()->nis],
            ['tgl', '=' , $tanggal]
        ])->first();

        if($presensi) {
            return redirect('student/pulang')->with('toast_warning','Data Sudah Ada');
        } else {
            Presensi::create([
                'user_nis' => auth()->user()->nis,
                'tgl' => $tanggal,
                'jamdatang' => $localtime,
            ]);
        }

        return redirect('student/pulang')->with('toast_success','Anda Berhasil Absen');
    }
    
    public function showallabsen($tglawal, $tglakhir)
    {
            $presensi = Presensi::with('user')->whereBetween('tgl', [$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
            return view('admins.User.dateAbsen',compact('presensi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storepulang()
    {
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_nis','=',auth()->user()->nis],
            ['tgl','=',$tanggal],
        ])->first();
        
        $dt=[
            'jamkeluar' => $localtime,
        ];

        if ($presensi->jamkeluar == ""){
            $presensi->update($dt);
            return redirect('student/pulang')->with('toast_success', 'Berhasil Pulang');
        }else{
            return redirect('/')->with('warning','Anda Sudah Pulang Terimakasih :)');
        }
    }

    public function tidakhadir(Request $request)
    {
        // untuk menyimpan data bukti berupa image ke laravel local
        $bukti_file = $request->bukti->getClientOriginalName();
        $request->bukti->storeAs('bukti', $bukti_file);

        // Untuk data tanggal otomatis diisi saat user submit
        $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $tanggal = $date->format('Y-m-d');

        $presensi = Presensi::where([
            ['user_nis', '=' , auth()->user()->nis],
            ['tgl', '=' , $tanggal]
        ])->first();

        if ($presensi) {

            return redirect()->route('logout')->with('info', 'Anda Sudah Absen , Data Telah Tersimpan !!!');
            
        } else {
            
            $dataTidakHadir = new Presensi;
            $dataTidakHadir->user_nis = $request->nis;
            $dataTidakHadir->tgl = $tanggal; // Year Month Day;
            $dataTidakHadir->keterangan = $request->keterangan;
            $dataTidakHadir->bukti = $bukti_file;
            $dataTidakHadir->save();
            
            return redirect()->route('logout')->with('success', 'Data Berhasil Disimpan !!!');
        }

        
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


 
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
