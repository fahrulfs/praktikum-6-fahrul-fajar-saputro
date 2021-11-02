<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class BukuController extends Controller
{
 public function formulir(){ 
    	return view('buku.formulir');
    }
     public function formulir_proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
