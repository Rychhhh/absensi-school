<?php

namespace App\Http\Controllers;
use App\Http\Requests\RequestStoreUpdateProfile;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
      return view('Profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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


    public function changeFotoProfile(Request $request)
    {
        try {
            
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20348',
            ]);

            $oldImg = $request->image->getClientOriginalName();

            $request->image->storeAs('profile_img', $oldImg);

            $user = User::all()->where('id', Auth::user()->id)->first();

            Storage::disk('public')->delete("/profile_img/ $user->image");

            // $user->update([
            //     'image' => $oldImg,
            //     'updated_at' => date(now())
            // ]);

            $user->image = $oldImg;
            $user->updated_at = date(now());
            $user->save();


            return redirect()->route('profiles')->with('success', 'Berhasil ubah photo profile');
        } catch (\Throwable $th) {
            return redirect()->back()->with('toast_warning', 'Error ' . $th->getMessage());
        }
    }

    public function changeProfile(Request $request)
    {
       try {
          
            // mengambil data user berdasarkan id 
            $user = User::all()->where('id', auth()->user()->id)->first();

            $user->nis = $request->nis;
            $user->name = $request->name;
            $user->rombel = $request->rombel;
            $user->rayon = $request->rayon;
            $user->updated_at = date(now());
            $user->save();

            return redirect()->route('profiles')->with('toast_success', 'Success Update Data Profile !!!');

       } catch(\Throwable $th) {
        return redirect()->back()->with('toast_warning', 'Error ' . $th->getMessage());
       }
    }
}

