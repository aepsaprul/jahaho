<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">

  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: lightblue;
      color: lightyellow;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }
    #myBtn:hover {
      background-color: lightblue;
    }
  </style>

  @yield('style')
</head>
<body>
  <div class="wrapper">
    {{-- header --}}
    <div id="header" class="sticky">
      <div class="container">
        <div class="logo">
          <div class="logo-image"><img src="assets/logo.png" alt="logo"></div>
          <div class="logo-detail">
            <div class="logo-title">jade indopratama</div>
            <div class="logo-teks">Lebih berwarna, berwarna lebih lama</div>
          </div>
        </div>
        <div class="navigasi">
          <div class="navigasi-burger" onclick="navigasiBurger()"><i class="fas fa-bars"></i></div>
          <div id="navigasi_main" class="navigasi-main">
            <div><a href="{{ url('/') }}">home</a></div>
            <div><a href="{{ route('produk') }}">produk</a></div>
            <div><a href="#">order cetak</a></div>
            <div><a href="#">cara pemesanan</a></div>
            <div><a href="#">company profile</a></div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

    {{-- footer --}}
    <div id="footer">
      {{-- sitemap --}}
      <div class="sitemap">
        <div class="perusahaan">
          <h4>perusahaan</h4>
          <p><a href="#">Tentang Kami</a></p>
          <p><a href="#">Kebijakan Hak Cipta</a></p>
          <p><a href="#">Privacy Policy</a></p>
          <p><a href="#">Corporate Partner</a></p>
          <p><a href="#">Fasilitas Produksi</a></p>
          <p><a href="#">Blog Kami</a></p>
        </div>
        <div class="bantuan">
          <h4>bantuan</h4>
          <p><a href="#">Cara Pemesanan</a></p>
          <p><a href="#">Berkarir Di Jahaho</a></p>
          <p><a href="#">FAQ</a></p>
        </div>
        <div class="hubungi-kami">
          <h4>hubungi kami</h4>
          <p>cv. jahaho</p>
          <div>
            <p><span style="font-weight: bold;">NPWP:</span> 01.991.344.1.652.000</p>
            <p><span style="font-weight: bold;">Email:</span> jahaho@gmail.com</p>
            <p><span style="font-weight: bold;">Phone:</span> (0341) 470150</p>
            <p><span style="font-weight: bold;">WhatsApp:</span> 081 555 800000</p>
          </div>
          <div style="margin-top: 20px">
            <p style="font-weight: bold;">Jam Operasional:</p>
            <p>(Senin – Jumat, 9:00 sampai 20:00)</p>
          </div>
          <div style="margin-top: 20px;">
            <p>Jl. R. Tumenggung Suryo No.35, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65126</p>
          </div>
        </div>
        <div class="lokasi">
          <h4>lokasi kami</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2055818734743!2d109.23828971376565!3d-7.44249219463075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655df95d51a6ff%3A0x5886b7e0b08cf2cd!2sHead%20Office%20Abata%20Printing!5e0!3m2!1sid!2sid!4v1668466237482!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="container">
        <p>&copy;2022 Jahaho. Hak Cipta Dilindungi.</p>
      </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

  </div>

  <script>
    window.onscroll = function() {
      myFunction();
      scrollFunction();
    };

    // navigas burger
    function navigasiBurger() {
      let navigasi_main = document.getElementById("navigasi_main");
      if (navigasi_main.className == "navigasi-main") {
        navigasi_main.className = "navigasi-main-show";
      } else {
        navigasi_main.className = "navigasi-main";
      }
      console.log(navigasi_main.className);
    }
    
    // header sticky
    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky")
      } else {
        header.classList.remove("sticky");
      }
    }

    // back to top
    let mybutton = document.getElementById("myBtn");
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  @yield('script')
</body>
</html>