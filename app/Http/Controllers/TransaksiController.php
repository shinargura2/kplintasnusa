<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transaksis')->get();
        $barang = DB::table('barangs')->get();
        return View::make('layout.t_transaksi',["data"=> $data,"barang"=>$barang]);
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
        //  $data = array(
        //     'id_satuan' => request()->get('idsatuan'),
        //     'satuan' => request()->get('namasatuan'),
        // );
        // DB::table('satuans')->insert($data);
        // return redirect('/satuan');;

        $data = array(
            'id_transaksi' => request()->get('idtransaksi'),
            'id_barang' => request()->get('idbarang'),
            'nama_barang' => request()->get('namabarang'),
            'jumlah_transaksi' => request()->get('jumlahtransaksi'),
            'status' => request()->get('status'),
        );
        DB::table('transaksis')->insert($data);
        return redirect('/transaksi');;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('transaksis')->where('id_transaksi','=',$id)->first();
        $barang = DB::table('barangs')->get();
        // dd($data);
        return view('layout.formedit.t_transaksi_edit', ["data"=> $data,"barang"=>$barang]);
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
            'id_transaksi' => request()->get('idtransaksi'),
            'id_barang' => request()->get('idbarang'),
            'nama_barang' => request()->get('namabarang'),
            'jumlah_transaksi' => request()->get('jumlahtransaksi'),
            'status' => request()->get('status'),
        );
        DB::table('transaksis')->where('id_transaksi','=',request()->get('idtransaksi'))->update($data);
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('transaksis')->where('id_transaksi',$id)->delete();
        return redirect('/transaksi');
    }

    public function cetaklaporan()
    {
        $data = DB::table('transaksis')->get();
        $pdf = PDF::loadview("layout/laporan/transaksi_pdf", [
            "data" => $data]);

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',compact('data'));

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',['data'=>$data]);
        return $pdf->download('laporantransaksi.pdf');
    }

    // public function dropDownShow(Request $request){

    //     $pickid = barangs::pluck('id_barang');
    //     // $selectedID = 2;
    //     return view('layout.t_transaksi', compact('id', 'items'));
    // }
    // public function getBarang(){
    //     $idbarangs =  DB::table('barangs')->pluck("id_barang","nama_barang");
    //     return view('t_transaksi', compact('barangs'))

    // }



}
