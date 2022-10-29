@extends('layouts.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajeng UTS</title>
</head>
<body>
<h3>DAFTAR BARANG</h3>
@foreach ($allbarang as $key => $barang)
<tr>
    <td>Nomor : {{ $key + 1}}</td>
    <br>
    <td>Nama Barang : {{ $barang->NamaBarang}}</td>
    <br>
    <td>Harga Barang : {{ $barang->HargaBarang}}</td>
    <br>
    <td><a href="{{ route('review', $barang->IDbarang) }}">Lihat Review</a></td>
    <br>
</tr>
@endforeach
</body>
</html>
@endsection