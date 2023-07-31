<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class DataPoktanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $keyword = $request->keyword;
            return view('dashboard.poktan.index', [

                'users' =>User::where('id', '!=', \Auth::user()->id)->filter(request(['keyword']))
                ->paginate(20)->withQueryString()
                // 'users' =>User::Where('nama_poktan', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('id_poktan', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('kelurahan', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('kecamatan', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('NIK', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('ketua', 'LIKE', '%'.$keyword.'%')
                // ->orWhere('alamat_sekretariat', 'LIKE', '%'.$keyword.'%')
                // ->paginate(20)
            ]);
        // return view('dashboard.poktan.index',[
        //     // untuk memanggil semua post
        //     // 'post' =>post::all() 
        //     'user' =>User::all()->except(Auth::id())
        //     // 'user' =>User::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.poktan.create',[

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_poktan'             => 'required|max:255',
            'nama_poktan'           => 'required',
            'NIK'                   => 'required', 'numeric', 'max:16',
            'ketua'                 => 'required|max:255',
            'alamat_sekretariat'    => 'required',
            'kelurahan'             => 'required|max:255',
            'kecamatan'             => 'required|max:255',
            'verifikasi'            => 'required',
            'bantuan'               => 'required',
            'jenis_bantuan'         => 'required',
        ]);


        $id_poktan            = $request->id_poktan;
        $nama_poktan          = $request->nama_poktan;
        $NIK                  = $request->NIK;
        $ketua                = $request->ketua;
        $alamat_sekretariat   = $request->alamat_sekretariat;
        $kelurahan            = $request->kelurahan;
        $kecamatan            = $request->kecamatan;
        $verifikasi           = $request->verifikasi;
        $bantuan              = $request->bantuan;
        $jenis_bantuan        = $request->jenis_bantuan;


        $data = new User();
        $data->id_poktan           = $id_poktan;
        $data->nama_poktan         = $nama_poktan;
        $data->NIK                 = $NIK;
        $data->ketua               = $ketua ;
        $data->alamat_sekretariat  = $alamat_sekretariat;
        $data->kelurahan           = $kelurahan ;
        $data->kecamatan           = $kecamatan ;
        $data->verifikasi          = $verifikasi ;
        $data->bantuan             = $bantuan ;
        $data->jenis_bantuan       = $jenis_bantuan ;
        $data->sumber_dana         = '' ;
        $data->password            = Hash::make('password') ;
        $data->save();

        return redirect('/dashboard/poktan')->with('success', 'Kelompok tani Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.poktan.show', ['user' => $user]); 
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.poktan.edit', ['user' => $user]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'id_poktan'             => 'required',
            'nama_poktan'           => 'required',
            'NIK'                   => 'required', 'numeric', 'max:16',
            'ketua'                 => 'required|max:255',
            'alamat_sekretariat'    => 'required',
            'kelurahan'             => 'required|max:255',
            'kecamatan'             => 'required|max:255',
            'verifikasi'            => 'required',
            'bantuan'               => 'required',
            'jenis_bantuan'         => 'required',
        ]);


        $id_poktan            = $request->id_poktan;
        $nama_poktan          = $request->nama_poktan;
        $NIK                  = $request->NIK;
        $ketua                = $request->ketua;
        $alamat_sekretariat   = $request->alamat_sekretariat;
        $kelurahan            = $request->kelurahan;
        $kecamatan            = $request->kecamatan;
        $verifikasi           = $request->verifikasi;
        $bantuan              = $request->bantuan;
        $jenis_bantuan        = $request->jenis_bantuan;


        $data = User::find($user->id);
        $data->id_poktan           = $id_poktan;
        $data->nama_poktan         = $nama_poktan;
        $data->NIK                 = $NIK;
        $data->ketua               = $ketua ;
        $data->alamat_sekretariat  = $alamat_sekretariat;
        $data->kelurahan           = $kelurahan ;
        $data->kecamatan           = $kecamatan ;
        $data->verifikasi          = $verifikasi ;
        $data->bantuan             = $bantuan ;
        $data->jenis_bantuan       = $jenis_bantuan ;
        $data->sumber_dana         = '' ;
        $data->save();

        return redirect('/dashboard/poktan')->with('success', 'Kelompok tani Telah berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        // User::destroy($user->id); 
        return redirect('/dashboard/poktan')->with('success', 'Data Kelompok Tani Telah Dihapus');
    }
}
