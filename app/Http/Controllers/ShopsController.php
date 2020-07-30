<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Shop;
class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('shops.create');
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
        'id_ukm' => 'required',
        'nama_ukm' => 'required',
        'alamat' => 'required',
        'no_handphone' => 'required',
        'tampilan' => 'required',
    ]);

        Shop::create($request->all());
        return redirect('/shops')->with('status', 'Data Anggota Berhasil di Tambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
         return view('shops.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
               $request->validate([
        'id_ukm' => 'required',
        'nama_ukm' => 'required',
        'alamat' => 'required',
        'no_handphone' => 'required',
        'tampilan' => 'required',
    ]);
        
        Shop::where('id', $shop->id)
                ->update([
                    'id_ukm' => $request->id_ukm,
                    'nama_ukm' => $request->nama_ukm,
                    'alamat' => $request->alamat,
                    'no_handphone' => $request->no_handphone,
                    'tampilan' => $request->tampilan
    ]);
        return redirect('/shops')->with('status', 'Data UKM Berhasil di Ubah!'); 
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
         Shop::destroy($shop->id);
            return redirect('/shops')->with('status', 'Data UKM Berhasil di Hapus!'); 
    }
}
