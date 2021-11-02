<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <style>
input[type="text"],
[type="password"],
[type="number"] {
  box-sizing: border-box;
  width: 50%;
  height: 30px;
  padding: 15px 15px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="submit"] {
  width: 50%;
  background-color: #04aa6d;
  color: white;
  padding: 14px 20px;
  margin: 15px 0;
  border: 0;
  cursor: pointer;
}
    </style>
</head>
<body>

    <h2>Daftar Menu</h2>

<span>MAKANAN</span>
<br>
@php
        $makanan = [
            [
           
                "menu_makan" => "1.nasi & ikan nila bakar",
            ],
            [
     
                "menu_makan" => "2.nasi & ikan lele bakar",
            ],
            [
         
                "menu_makan" => "3.nasi & ayam goreng",
            ],
            [
         
                "menu_makan" => "4.nasi & bebek goreng",
            ],
        ];	
@endphp


    @foreach ($makanan as $makan)
    <br>
    
   
	      {{ $makan['menu_makan'] }}
          @endforeach
@php
        
        $minuman = [
            [
             
                "menu_minuman" => "1.es teh",
            ],
            [
           
                "menu_minuman" => "2.es jeruk",
            ],
            [
          
                "menu_minuman" => "3.jeruk panas",
            ],
            [
              
                "menu_minuman" => "4.teh panas",
            ],
        ];
@endphp
<br>
<br>
<span>MINUMAN</span>
<br> 
@foreach ($minuman as $minum)
    <br>
	     
	      {{ $minum['menu_minuman'] }}
    @endforeach
        </div>

<h2>Tuliskan Pesan Anda</h2> 
<form action="/form/procces" method="post">
    @csrf
<label for="makanan">Makanan</label><br>
<input type="text" name="makanan" id="">
<br>
<label for="minuman">Minuman</label><br>
<input type="text" name="minuman" id=""><br>
<input type="submit" value="PESAN">
</form>
</body>
</html>