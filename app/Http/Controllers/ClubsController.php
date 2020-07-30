<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Club;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
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
        'nik' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'no_tlp' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'foto' => 'required',
    ]);

        Club::create($request->all());
        return redirect('/clubs')->with('status', 'Data Anggota Berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
               $request->validate([
        'nik' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'no_tlp' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'foto' => 'required'
    ]);
        
        Club::where('id', $club->id)
                ->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'no_tlp' => $request->no_tlp,
                    'alamat' => $request->alamat,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'foto' => $request->foto
    ]);
        return redirect('/clubs')->with('status', 'Data UKM Berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        Club::destroy($club->id);
            return redirect('/clubs')->with('status', 'Data UKM Berhasil di Hapus!'); 
    }
}
