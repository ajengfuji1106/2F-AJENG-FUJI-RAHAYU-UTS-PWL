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
    <h3>REVIEW BARANG</h3>
@foreach ($daftarbarang as $key => $item)
<td>
    <td>Nama Barang : {{ $item->NamaBarang}}</td>
    <br>
    <td>Harga Barang : {{ $item->HargaBarang}}</td>
    <br>
    <td>Review : {{ $item->ReviewBarang}}</td>
    <br>
    <td>Waktu : {{ $item->tanggal_dan_waktu_Review}}</td>
    <br>

</td>
@endforeach
</body>
</html>
@endsection