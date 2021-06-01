<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
use PDF;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pemasoks')->get();
        return View::make('layout.t_supplier')->with('pemasoks', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = array(
        //     'id_pemasok' => request()->get('idpemasok'),
        //     'nama_pemasok' => request()->get('namapemasok'),
        //     'email' => request()->get('emailpemasok'),
        //     'alamat' => request()->get('alamatpemasok'),

        // );
        // DB::table('pemasoks')->insert($data);
        // return redirect('/supplier');;
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
            'id_pemasok' => request()->get('idpemasok'),
            'nama_pemasok' => request()->get('namapemasok'),
            'email' => request()->get('emailpemasok'),
            'alamat' => request()->get('alamatpemasok'),

        );
        DB::table('pemasoks')->insert($data);
        return redirect('/supplier');;
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
         $data = DB::table('pemasoks')->where('id_pemasok','=',$id)->first();
        return view('layout.formedit.t_supplier_edit')->with('pemasoks', $data);
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
            'id_pemasok' => request()->get('idpemasok'),
            'nama_pemasok' => request()->get('namapemasok'),
            'email' => request()->get('emailpemasok'),
            'alamat' => request()->get('alamatpemasok'),
        );
        DB::table('pemasoks')->where('id_pemasok','=',request()->get('idpemasok'))->update($data);
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pemasoks')->where('id_pemasok',$id)->delete();
        return redirect('/supplier');
    }

    //TAMBAHAN FUNCTIOn
    public function cetaklaporan()
    {
        $data = DB::table('pemasoks')->get();
        $pdf = PDF::loadview("layout/laporan/pemasok_pdf", [
            "data" => $data]);

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',compact('data'));

        // $pdf = PDF::loadview('layout.laporan.pemasok_pdf',['data'=>$data]);
        return $pdf->download('laporansupplier.pdf');
    }

}
