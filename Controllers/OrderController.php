<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OrderController extends Controller
{
      public function create_form () {
   return view('order.form'); 
}
public function procces_form(Request $request){
    $makanan=$request->input('makanan');
    $minuman=$request->input('minuman');
    return view('order.list',[
    'makanan'=>$makanan,
    'minuman'=>$minuman
    ]);
}
}