<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return view('dashboard.user.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email:dns',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('status', 'Data Akun Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $u = User::find(decrypt($id));

        return view('dashboard.user.edit', compact('u'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable'
        ]);

        $user = User::find(decrypt($id));
        $passwordOldInDatabase = $user->password;

        if($request->passwordOld && $request->password) {
            if(Hash::check($request->passwordOld, $passwordOldInDatabase)) {
                $user = User::find(decrypt($id))->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()->withErrors([
                    'error' => 'Password Lama Tidak Sesuai'
                ]);
            }
        } 

        $user = User::find(decrypt($id))->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('user.index')->with('status', 'Data Akun Berhasil Di Update');
    }

    public function destroy($id)
    {
        $user = User::find(decrypt($id))->delete();

        return redirect()->route('user.index')->with('status', 'Data Akun Berhasil Di Hapus');
    }
}
