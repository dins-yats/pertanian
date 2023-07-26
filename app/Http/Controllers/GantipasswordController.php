<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GantipasswordController extends Controller
{
    public function edit() {
        return view('dashboard.password',[
        ]);
        
    }

    public function updatepassword(Request $request) {

        // $cek = Hash::check($request->old_password, auth()->user()->password);
        
        if(!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'password lama salah');
        }

        // $cek2 = $request->new_password == $request->password_confirmation;
        // cek password baru dengan konfirmasi;

        if($request->new_password != $request->password_confirmation) {
            return back()->with('error', 'password baru dan konfirmasi password tidak sama');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/dashboard/password')->with('success', 'Password Berhasil Diganti');

        
        // auth()->user()->updatepassword([
        //     'password' => Hash::make($request->new_password)
                
        // ]);

        // $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required', 'min:8', 'max:255', 'confirmed',
        //     'password_confirmation' => 'required', 'same:new_password',
            
        // ]);

        // $current_user=auth()->user();

        // if (Hash::check($request->current_password,$current_user->password)) {
        //     $current_user->update([
        //         'password' =>Hash::make($request->new_password)
        //     ]);

        //     return redirect()->back()->with('succes','Password lama tidak sesuai.');

        // }
        // else {
        //     return redirect()->back()->with('error','Password lama tidak sesuai.');
        // }

    }
}
