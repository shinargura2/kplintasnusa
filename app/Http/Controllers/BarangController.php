<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
use PDF;

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
        $pemasok = DB::table('pemasoks')->get();
        $gudang = DB::table('gudangs')->get();
        $satuan = DB::table('satuans')->get();
        return View::make('layout.t_barang', ["data" => $data,"pemasok"=>$pemasok, "gudang" => $gudang, "satuan" => $satuan]);
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
         $pemasok = DB::table('pemasoks')->get();
         $gudang = DB::table('gudangs')->get();
         $satuan = DB::table('satuans')->get();
        return view('layout.formedit.t_barang_edit', ["data"=> $data,"pemasok"=>$pemasok, "gudang"=> $gudang , "satuan"=> $satuan]);
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

    public function cetaklaporan()
    {
        $data = DB::table('barangs')->get();
        $pdf = PDF::loadview("layout/laporan/barang_pdf", ["data" => $data]);

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',compact('data'));

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',['data'=>$data]);
        return $pdf->download('laporanbarang.pdf');
    }
}
