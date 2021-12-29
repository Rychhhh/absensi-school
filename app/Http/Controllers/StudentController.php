<?php

namespace App\Http\Controllers;

use DateTimeZone;
use App\Models\User;
use App\Models\Presensi;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = User::all();
        $user = auth()->user();
        $presensi = Presensi::all()->where('user_nis', $user->nis);
        return view('admins.User.dataUser', compact('userData', 'presensi'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit data pengguna
        $updatePengguna = User::find($id);
        return view('admins.User.editUser', compact(
            'updatePengguna'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // menyimpan data edit
        $updatePengguna = User::find($id);

        $updatePengguna->nis = $request->nis; 
        $updatePengguna->name = $request->name; 
        $updatePengguna->rombel = $request->rombel; 
        $updatePengguna->rayon = $request->rayon; 
        $updatePengguna->role = $request->role; 
        $updatePengguna->save(); 

        return redirect('dataUser')->with('toast_success', 'Anda Berhasil Mengganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data
        $delete = User::find($id);
        $delete->delete();

        return redirect('dataUser')->with('success', 'Data Berhasil Dihapus !!! ');
    }

    
}
