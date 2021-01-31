<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;
class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudangs = DB::table('gudangs')->get();
        $data['gudangs'] = $gudangs;
        return view('layout.t_gudang', $data);
        // return View::make('layout.t_gudang')->with('gudangs', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = array(
        //     'id_gudang' => request()->get('idgudang'),
        //     'nama_gudang' => request()->get('namagudang'),
        // );
        // DB::table('gudangs')->insert($data);
        // return redirect('/gudang');;
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
            'id_gudang' => request()->get('idgudang'),
            'nama_gudang' => request()->get('namagudang'),
        );
        DB::table('gudangs')->insert($data);
        return redirect('/gudang');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //LIHAT DETAIL TABEL GUDANG
        $data = DB::table('barangs')->where('id_gudang','=', $id)->get();
        return View::make('layout.detail.t_detil_gudang')->with('barangs', $data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('gudangs')->where('id_gudang','=',$id)->first();
        return view('layout.formedit.t_gudang_edit')->with('gudangs', $data);
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
            'id_gudang' => request()->get('idgudang'),
            'nama_gudang' => request()->get('namagudang'),
        );
        DB::table('gudangs')->where('id_gudang','=',request()->get('idgudang'))->update($data);
        return redirect('/gudang')->with('message', 'Berhasil Update Data');


        // return Redirect::to('/read')->with('message','Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('gudangs')->where('id_gudang',$id)->delete();
        return redirect('/gudang');
    }
}
