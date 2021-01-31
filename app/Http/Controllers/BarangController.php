<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('barangs')->get();
        return View::make('layout.t_barang')->with('barangs', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $pilihpemasok = DB::table('pemasoks')
       // ->select
       // ('pemasoks.nama_pemasok')->get();
       // $data['pemasoks'] = $pilihpemasok;
       // return view('layout.t_barang' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = array(
            'id_barang' => request()->get('idbarang'),
            'nama_barang' => request()->get('namabarang'),
            'jumlah_barang' => request()->get('jumlahbarang'),
            'nama_pemasok' => request()->get('namapemasok'),
            'id_gudang' => request()->get('idgudang'),
            'satuan' => request()->get('satuanbarang'),
        );
        DB::table('barangs')->insert($data);
        return redirect('/barang');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    // public function dropdownbarang(){
    //     $tampilpemasok = pemasoks::pluck('id_pemasok','nama_pemasok')
    //     return view('layout.t_barang',compact('tampilpemasok'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = DB::table('barangs')->where('id_barang','=',$id)->first();
        return view('layout.formedit.t_barang_edit')->with('barangs', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data = array(
            'id_barang' => request()->get('idbarang'),
            'nama_barang' => request()->get('namabarang'),
            'jumlah_barang' => request()->get('jumlahbarang'),
            'nama_pemasok' => request()->get('namapemasok'),
            'id_gudang' => request()->get('idgudang'),
            'satuan' => request()->get('satuanbarang'),
        );
        DB::table('barangs')->where('id_barang','=',request()->get('idbarang'))->update($data);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barangs')->where('id_barang',$id)->delete();
        return redirect('/barang');
    }
}
