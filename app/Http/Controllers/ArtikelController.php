<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    


    public function __construct() {
        $this->middleware('auth')->only('create', 'edit');
    }

    public function index()
    {
        $result = Artikel::orderBy('judul', 'asc')->get();
        return view('stmik.artikel.index', ['result'    => $result]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('stmik.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Artikel $artikel)
    {
        
        $validateData = $request->validate(
            [

                'judul' =>  ['required','string', 'min:3', 'max:255'],
                'sub_judul' =>  ['required', 'string', 'min:3', 'max:255'],
                'isi_artikel'   =>  ['required', 'string'],
                'gambar_isi_artikel'    =>  ['required', 'file', 'image', 'max:5000'],

            ]);

        //pengkondisian gambar artikel

        if($request->hasFile('gambar_isi_artikel')  ) {

            
            $slug = Str::slug($request['judul']);
            $extFile = $request->gambar_isi_artikel->getClientOriginalExtension();
            $namaFile = $slug.'-'.time().'.'.$extFile;

            $request->gambar_isi_artikel->move('public_path'('img/artikel'), $namaFile);
           

            $validateData['gambar_isi_artikel'] = $namaFile;
        } 

        else {
            $namaFile = 'judul.jpg';

        }


        
        

        $artikel->create($validateData);

        return redirect()->route('artikels.index')->with('pesan', "Artikel {$artikel->judul} berhasil dibuat");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
      

        

        return view('stmik.artikel.show', ['result' => $artikel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        

        return view('stmik.artikel.edit', ['result' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
         $validateData = $request->validate(
            [

                'judul' =>  ['required','string', 'min:3', 'max:255'],
                'sub_judul' =>  ['required', 'string', 'min:3', 'max:255'],
                'isi_artikel'   =>  ['required', 'string'],
                'gambar_isi_artikel'    =>  ['sometimes', 'file', 'image', 'max:5000'],

            ]);

        //pengkondisian gambar artikel

        if($request->hasFile('gambar_isi_artikel')  ) {

            
            $slug = Str::slug($request['judul']);
            $extFile = $request->gambar_isi_artikel->getClientOriginalExtension();
            $namaFile = $slug.'-'.time().'.'.$extFile;

            $request->gambar_isi_artikel->move('public_path'('img/artikel'), $namaFile);
           

            $validateData['gambar_isi_artikel'] = $namaFile;
        } 

        else {
            $namaFile = 'judul.jpg';

        }


        
        

        $artikel->update($validateData);

        return redirect()->route('artikels.index')->with('pesan', "Artikel {$artikel->judul} berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $this->authorize('delete',$artikel);
        $artikel->delete();

        return redirect()->route('artikels.index')->with('pesan', "Artikel {$artikel->judul} sudah dihapus");
    }
}
