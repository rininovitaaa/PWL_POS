<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelContorller extends Controller
{
    public function index()
    {
        //$row = DB::update('update m_level set level_nama = ? where level_kode=?',['customer','CUS',]);
        //return 'update data baru berhasil. Jumlah data yang diupdate:'. $row. 'baris'; 

        //$row = DB::delete('delete from m_level where level_kode = ?',['CUS',]);
       // return 'delete data baru berhasil. Jumlah data yang dihapus:'. $row. 'baris'; 

       $data = DB::SELECT('select * from m_level');
       return view('level', ['data' => $data]);
    }
}
