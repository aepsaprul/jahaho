<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">

  <!-- css -->
  <link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: 'Anaheim';font-size: 22px;
    }
  </style>

  @yield('style')
</head>
<body>
  <div class="wrapper">
    {{-- header --}}
    <div id="header">
      <div class="container">
        <div class="logo">
          <div class="logo-image"><img src="assets/logo.png" alt="logo"></div>
          <div class="logo-detail">
            <div class="logo-title">jade indopratama</div>
            <div class="logo-teks">Lebih berwarna, berwarna lebih lama</div>
          </div>
        </div>
        <div class="navigasi">
          <div class="navigasi-burger"><i class="fas fa-bars"></i></div>
          <div class="navigasi-main">
            <div>home</div>
            <div>produk</div>
            <div>order cetak</div>
            <div>cara pemesanan</div>
            <div>company profile</div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

    {{-- footer --}}
    <div id="footer">
      <div class="container">
        <p>&copy;2022 Jahaho. All Right Reserved.</p>
      </div>
    </div>
  </div>

  @yield('script')
</body>
</html>