<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class idgudang extends Model
{
    protected $table = "gudangs";
    protected $fillable = [
        'id_gudang','nama_gudang'];

    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id_gudang';


public static function kodegudang(){
    $kode = DB::table('gudangs')->max('id_gudang');
    $addNol = '';
    $kode = str_replace("TRS","",$kode);
    $kode = (int) $kode +1;
    $incrementKode = $kode;

    if(strlen($kode)==1){
            $addNol = "000";
        }elseif (strlen($kode) == 2) {
            $addNol = "00";
        } elseif (strlen($kode == 3)) {
            $addNol = "0";
        }
    $kodeBaru = "TRS".$addNol.$incrementKode;
    return $kodeBaru;
    }
}