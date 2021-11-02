<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORDER_LIST</title>
<style>
#list {
    text-align: center;
  width: 50%;
  height: 20px;
  border: 1px solid #ddd;
}
#list th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04aa6d;
  color: white;
}
</style>
</head>
<body>
    <h1>Daftar Pesanan</h1>
    <table id="list">
        <thead>
            <th>Makanan</th>
            <th>Minuman</th>
        </thead>
            <tr>
                <td>{{ $makanan }}</td>
                <td>{{ $minuman }}</td>
            </tr>
    </table>
</body>
</html>