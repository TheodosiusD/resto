<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            	// mengambil data dari table pegawai
    	$menu = DB::table('menu')->get();
    	// mengirim data pegawai ke view index
    	return view('manager/index',['menu' => $menu]);
 
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
        $menu= Manager::insert([
            "menu_manager" => $request->nama_menu_manager,
            "deskripsi" => $request->deskripsi,
            "harga_manager" => $request->harga_manager,
            "ketersediaan" => $request->ketersediaan,
        ]);
        return redirect('/manager');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
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
        $menu = DB::table('menu')->where('id', $id)->get()->first();
        // dd($menu);
        return view('manager.edit', compact('menu'));
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
            'menu_manager' => 'required',
            'deskripsi' => 'required',
            'harga_manager' => 'required',
            'ketersediaan' => 'required'
        ]);


        $menu = DB::table('menu')->where('id', $id);
        $menu->update([
            'menu_manager' => $request->menu_manager,
            'deskripsi' => $request->deskripsi,
            'harga_manager' => $request->harga_manager,
            'ketersediaan' => $request->ketersediaan
        ]); 

        return redirect()->route('manager.index')
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
        $menu = DB::table('menu')->where('id', $id);
        $menu->delete();
        return redirect()->route('manager.index')
        ->with('success','Berhasil hapus !');  
    }   
}
