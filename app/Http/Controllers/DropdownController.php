<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class DropdownController extends Controller
{
    public function dropdown(){
    	$pilihpemasok = DB::table('pemasoks')
       ->select
       ('pemasoks.nama_pemasok')->get();
       $data['pemasoks'] = $pilihpemasok;
       return view('layout.t_barang' , $data);
    }
}
