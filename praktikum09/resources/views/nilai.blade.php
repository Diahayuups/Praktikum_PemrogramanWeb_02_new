<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    @php 
        $nama = "Diah ayu puspasari";
$nilai = 90;
    @endphp
    @if ($nilai >= 90)
        <h1>Nilai anda A, Kerja Bagus!</h1>
    @endif
    <h1>Nama saya {{$nama}}, saya mendapatkan nilai {{$nilai}}</h1>
</body>
</html>