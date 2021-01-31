<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Redirect;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('satuans')->get();
        return View::make('layout.t_satuan')->with('satuans', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = array(
        //     'id_satuan' => request()->get('idsatuan'),
        //     'satuan' => request()->get('namasatuan'),
        // );
        // DB::table('satuans')->insert($data);
        // return redirect('/satuan');;
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
            'id_satuan' => request()->get('idsatuan'),
            'satuan' => request()->get('namasatuan'),
        );
        DB::table('satuans')->insert($data);
        return redirect('/satuan');;
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
         $data = DB::table('satuans')->where('id_satuan','=',$id)->first();
        return view('layout.formedit.t_satuan_edit')->with('satuans', $data);
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
            'id_satuan' => request()->get('idsatuan'),
            'satuan' => request()->get('namasatuan'),
        );
        DB::table('satuans')->where('id_satuan','=',request()->get('idsatuan'))->update($data);
        return redirect('/satuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('satuans')->where('id_satuan',$id)->delete();
        return redirect('/satuan');
    }
}
