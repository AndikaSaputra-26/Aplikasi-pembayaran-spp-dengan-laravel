<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/landing.css') }}">
    <title>Aplikasi Pembayaran SPP</title>
</head>
<body>
    <div class="container">
        <div class="text-hero">
            <h2>Aplikasi Pembayaran SPP</h2>
            <h1>SMK PANCASILA 2 KUTOARJO</h1>
            <div class="button-wrapper">
                <a href="{{url('/app-admin/login')}}">Login Petugas</a>
                <a href="{{url('/siswa/login')}}">Login Siswa</a>
            </div>
        </div>
        <div class="image-hero">
            <img src="{{asset('/images/web/hero.png')}}" alt="">
        </div>
    </div>
</body>
</html>
