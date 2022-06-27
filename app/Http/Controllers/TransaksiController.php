<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            	// mengambil data dari table pegawai
    	$transaksi = DB::table('transaksi')->get();
 
    	// mengirim data pegawai ke view index
    	return view('transaksi/index',['transaksi' => $transaksi]);
 
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
        $transaksi = Transaksi::insert([
            "nama_pelanggan" => $request->nama,
            "nama_menu" => $request->menu,
            "jumlah" => $request->jumlah,
            "total_harga" => $request->total,
            "nama_pegawai" => $request->nama_pegawai
        ]);


    //     // $data = $request->validate([
    //     //     'nama_pelanggan' => 'required',
    //     //     'nama_menu' => 'required',
    //     //     'jumlah' => 'required',
    //     //     'total_harga' => 'required',
    //     //     'nama_pegawai' => 'required'
    //     // ]);

    //     $menu = Manager::whereMenu($data['nama_menu'])->first();
    //     if ($data['jumlah'] > $menu->ketersediaan) {
    //         return view('transaksi.index');
    //     }

    //     $menu->update(['jumlah' => $menu->ketersediaan - $data['jumlah']]);
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Transaksi  $transaksi
    //  * @return \Illuminate\Http\Response
    //  */
    }
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = DB::table('transaksi')->where('id', $id)->get()->first();
        // dd($menu);
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'menu_pelanggan' => 'required',
            'nama_menu' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'nama_pegawai' => 'required'
        ]);


        $transaksi = DB::table('transaksi')->where('id', $id);
        $transaksi->update([
            'nama_pelanggan' => $request->menu_pelanggan,
            'nama_menu' => $request->nama_menu,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            'nama_pegawai' => $request->nama_pegawai
        ]); 

        return redirect()->route('transaksi.index')
        ->with('success','Berhasil update !');  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = DB::table('transaksi')->where('id', $id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')
        ->with('success','Berhasil hapus !'); 
    }
}
