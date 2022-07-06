<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    //index
     public function index() {
        $users = User::orderBy('nama', 'asc')->get();

        return view('stmik.mahasiswa.mahasiswa-index', ['users' => $users]);
    }
    //edit

    public function edit(User $mahasiswa) {
        $this->authorize('update',$mahasiswa);

        return view('stmik.mahasiswa.mahasiswa-edit', ['user' => $mahasiswa]);
    }

    //show
    public function show(User $mahasiswa) {
        

        return view('stmik.mahasiswa.mahasiswa-show', ['user' =>  $mahasiswa]);
    }

    //update
    public function update(Request $request, User $mahasiswa) {
        $this->authorize('update',$mahasiswa);

        
       



        $validateData = $request->validate(
            [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$mahasiswa->id],
                'nama'  => ['required', 'string', 'min:3', 'max:50'],
                'nim'   =>  ['required', 'string', 'digits_between:8,8', 'unique:users,nim,'.$mahasiswa->id],
                'angkatan' => ['required', 'int'],
                'bio_profil' => ['sometimes'],
                'gambar_profil' =>  ['sometimes', 'file', 'image', 'max:2000'],
                'jurusan'   =>  ['required', 'string'],
                'kelas' =>  ['required', 'string'],
                'background_profil' =>  ['required', 'int', 'min:1', 'max:12'],
            ]);
        
        

        //proses upload file gambar

        if( $request->hasFile('gambar_profil') ) {

            $slug = Str::slug($request['nama']);
            $extFile = $request->gambar_profil->getClientOriginalExtension();
            $namaFile = $slug."-".time().".".$extFile;

            $request->gambar_profil->move('public_path'('img/user'), $namaFile);
        } else {
            $namaFile = $mahasiswa->gambar_profil;
        }

        $validateData['gambar_profil'] = $namaFile;
        
        $mahasiswa->update($validateData);
       
        return redirect()->route('mahasiswa.index')->with(['pesan' => 'update', 'nama' => $mahasiswa->nama]);
        
    }

    //delete

    public function destroy(User $mahasiswa) {
        $this->authorize('delete',$mahasiswa);
        $mahasiswa->delete();

       

        return redirect()->route('mahasiswa.index')->with(['pesan' => 'delete', 'nama' => $mahasiswa->nama]);
    }
}
