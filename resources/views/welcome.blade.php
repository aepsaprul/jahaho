@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

@endsection

@section('content')
<div class="content">
  {{-- slider --}}
  <div id="slider">
    <!-- Swiper -->
    <div class="swiper sliderSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/slider-50.png" style="width:100%">
        </div>
        <div class="swiper-slide">
          <img src="assets/slider-2-50.jpg" style="width:100%">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>   
  </div>

  {{-- transaksi --}}
  <div id="transaksi">
    <div class="container">
      <h3>kemudahan transaksi</h3>
      <picture>
        <source media="(min-width: 1200px)" srcset="assets/transaksi-100.png">
        <source media="(min-width: 768px)" srcset="assets/transaksi-50.png">
        <img src="assets/transaksi-50.png" style="width:100%">
      </picture>
    </div>
  </div>

  {{-- produk --}}
  <div id="produk">
    <div class="container">
      <h3>produk</h3>
      <div id="myBtnContainer" class="title">
        <button class="btn" onclick="filterSelection('best_seller')">best seller</button>
        <button class="btn" onclick="filterSelection('merchandise')">merchandise</button>
        <button class="btn" onclick="filterSelection('stationary')">stationary</button>
        <button class="btn" onclick="filterSelection('promotion')">promotion</button>
        <button class="btn" onclick="filterSelection('billboard')">billboard</button>
        <button class="btn" onclick="filterSelection('other')">Lainnya</button>
      </div>
      <div class="kategori">
        <div class="col filterDiv best_seller">
          <img src="assets/produk.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv best_seller">
          <img src="assets/produk-6.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv best_seller">
          <img src="assets/produk-7.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv merchandise">
          <img src="assets/produk-1.jfif" alt="produk">
          <p>merchandise</p>
        </div>
        <div class="col filterDiv merchandise">
          <img src="assets/produk-8.jfif" alt="produk">
          <p>merchandise</p>
        </div>
        <div class="col filterDiv stationary">
          <img src="assets/produk-2.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv stationary">
          <img src="assets/produk-9.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv stationary">
          <img src="assets/produk-10.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv stationary">
          <img src="assets/produk-11.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv promotion">
          <img src="assets/produk-3.jfif" alt="produk">
          <p>promotion</p>
        </div>
        <div class="col filterDiv billboard">
          <img src="assets/produk-4.jfif" alt="produk">
          <p>billboard</p>
        </div>
        <div class="col filterDiv other">
          <img src="assets/produk-5.jfif" alt="produk">
          <p>other</p>
        </div>
      </div>
    </div>
  </div>

  {{-- blog --}}
  <div id="blog">
    <div class="blog-container">
      <h3>blog review</h3>
      <div class="blog-thumbnail">
        <div class="thumbnail">
          <img src="assets/thumbnail.jpg" alt="image blog">
        </div>
        <div class="title">
          <h6>Tips Aman Menyambut Hari Raya Idul Adha di Tengah Pandemi COVID-19</h6>
        </div>
        <div class="tanggal">
          <p><i class="fas fa-calendar-alt"></i> 28 Juli 2022</p>
        </div>
        <div class="deskripsi">
          <p>Berdasarkan keputusan Kemenag (Kementrian Agama) dengan diselenggarakan nya sidang isbat untuk penentuan hari raya Idul Adha 1441 H. Dan keputusan dari hasil sidang isbat tersebut, hari raya Idul Adha 1441 H, jatuh pada 10 Dzulhijah 1441 H pada hari Jum’at tanggal 31 Juli 2020 (31/07/2020).</p>
        </div>
      </div>
      <div class="blog-list">
        <div class="list">
          <div class="thumbnail">
            <img src="assets/blog-1.jfif" alt="image blog">
          </div>
          <div class="title">
            <p>Cari Tahu Ukuran Spanduk Yang Cocok Untuk Kebutuhan Mu</p>
          </div>
          <div class="tanggal">
            <p><i class="fas fa-calendar-alt"></i> 28 Juli 2022</p>
          </div>
        </div>
        <div class="list">
          <div class="thumbnail">
            <img src="assets/blog-2.png" alt="image blog">
          </div>
          <div class="title">
            <p>Cari Tahu Ukuran Spanduk Yang Cocok Untuk Kebutuhan Mu</p>
          </div>
          <div class="tanggal">
            <p><i class="fas fa-calendar-alt"></i> 28 Juli 2022</p>
          </div>
        </div>
        <div class="list">
          <div class="thumbnail">
            <img src="assets/blog-3.png" alt="image blog">
          </div>
          <div class="title">
            <p>Cari Tahu Ukuran Spanduk Yang Cocok Untuk Kebutuhan Mu</p>
          </div>
          <div class="tanggal">
            <p><i class="fas fa-calendar-alt"></i> 28 Juli 2022</p>
          </div>
        </div>
        <div class="list">
          <div class="thumbnail">
            <img src="assets/blog-4.png" alt="image blog">
          </div>
          <div class="title">
            <p>Cari Tahu Ukuran Spanduk Yang Cocok Untuk Kebutuhan Mu</p>
          </div>
          <div class="tanggal">
            <p><i class="fas fa-calendar-alt"></i> 28 Juli 2022</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- why --}}
  <div id="why">
    <div class="why-container">
      <h3>kenapa memilih kami?</h3>
      <div class="why-thumbnail">
        <img src="assets/thumbnail.jpg" alt="video">
      </div>
      <div class="why-list">
        <div class="list">
          <div class="image">
            <img src="assets/icon.png" alt="icon">
          </div>
          <div class="deskripsi">
            <div class="title">
              <p>cetak cepat - cetak banyak</p>
            </div>
            <div class="keterangan">
              <p>Bayangkan hanya dalam waktu 1 jam Anda sudah bisa memiliki lebih dari 250 lembar brosur A4</p>
            </div>
          </div>
        </div>
        <div class="list">
          <div class="image">
            <img src="assets/icon-2.png" alt="icon">
          </div>
          <div class="deskripsi">
            <div class="title">
              <p>FULL COLOR</p>
            </div>
            <div class="keterangan">
              <p>Umumnya percetakan memiliki 4 warna, kami memiliki 5 warna yang pastinya lebih berwarna</p>
            </div>
          </div>
        </div>
        <div class="list">
          <div class="image">
            <img src="assets/icon-3.png" alt="icon">
          </div>
          <div class="deskripsi">
            <div class="title">
              <p>DESAIN SESUAI KEINGINAN</p>
            </div>
            <div class="keterangan">
              <p>Kami juga membuatkan desain sesuai keinginan Anda. Akan ada Art Design Team yang akan membantu Anda</p>
            </div>
          </div>
        </div>
        <div class="list">
          <div class="image">
            <img src="assets/icon-4.png" alt="icon">
          </div>
          <div class="deskripsi">
            <div class="title">
              <p>FILE KIRIM EMAIL</p>
            </div>
            <div class="keterangan">
              <p>File dapat dikirimkan melalui email. Anda akan dihubungi saat proses selesai</p>
            </div>
          </div>
        </div>
        <div class="list">
          <div class="image">
            <img src="assets/icon-5.png" alt="icon">
          </div>
          <div class="deskripsi">
            <div class="title">
              <p>LANGSUNG KIRIM DENGAN GO-SEND</p>
            </div>
            <div class="keterangan">
              <p>Kemudahan dalam digital membuat kita dapat mendistribusikan di hari yang sama. Ada pula opsi pengiriman ekspedisi inhouse dan online</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fasilitas">
    <h3>Fasilitas Produksi</h3>
    <!-- Swiper -->
    <div class="swiper fasilitasSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-1.jpg') }}" alt="fasilitas">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-2.jpg') }}" alt="fasilitas">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-3.jpg') }}" alt="fasilitas">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-4.jpg') }}" alt="fasilitas">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-5.jpg') }}" alt="fasilitas">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/fasilitas-6.jpg') }}" alt="fasilitas">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div id="partner">
    <div class="container">
      <h3>corporate partner</h3>
      <div class="kiri">
        <div class="navigasi">
          <div class="list">Hotel</div>
          <div class="list">Kosmetik</div>
          <div class="list">Manufakturing</div>
          <div class="list">Pariwisata</div>
          <div class="list">Perbankan</div>
          <div class="list">Property</div>
          <div class="list">Provider & Elektronik</div>
          <div class="list">Rokok</div>
          <div class="list">Transportasi</div>
        </div>
      </div>
      <div class="kanan">
        <h4>Hotel</h4>
        <div class="data">
          <div class="col">
            <div class="thumbnail">
              <img src="assets/hotel.png" alt="image partner">
            </div>
          </div>
          <div class="col">
            <div class="thumbnail">
              <img src="assets/hotel.png" alt="image partner">
            </div>
          </div>
          <div class="col">
            <div class="thumbnail">
              <img src="assets/hotel.png" alt="image partner">
            </div>
          </div>
          <div class="col">
            <div class="thumbnail">
              <img src="assets/hotel.png" alt="image partner">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sitemap">
    <div class="perusahaan">
      <p><a href="#">tentang kami</a></p>
      <p><a href="#">kebijakan hak cipta</a></p>
      <p><a href="#">privacy policy</a></p>
      <p><a href="#">corporate partner</a></p>
      <p><a href="#">fasilitas produksi</a></p>
      <p><a href="#">blog kami</a></p>
    </div>
    <div class="bantuan">
      <p><a href="#">cara pemesanan</a></p>
      <p><a href="#">berkarir di jahaho</a></p>
      <p><a href="#">FAQ</a></p>
    </div>
    <div class="kontak">
      <h6>cv. jahaho</h6>
      <div>
        <p>NPWP: 01.991.344.1.652.000</p>
        <p>Email: jahaho@gmail.com</p>
        <p>Phone: (0341) 470150</p>
        <p>WhatsApp: 081 555 800000</p>
      </div>
      <div>
        <div>Jam Operasional:</div>
        <div>(Senin – Jumat, 9:00 sampai 20:00)</div>
      </div>
      <div>
        <p>Jl. R. Tumenggung Suryo No.35, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65126</p>
      </div>
    </div>
    <div class="lokasi">
      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2055818734743!2d109.23828971376565!3d-7.44249219463075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655df95d51a6ff%3A0x5886b7e0b08cf2cd!2sHead%20Office%20Abata%20Printing!5e0!3m2!1sid!2sid!4v1668466237482!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
    </div>
  </div>
</div>
@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
  // slider swiper
  var swiper = new Swiper(".sliderSwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    loop: true
  });

  // fasilitas
  var swiper = new Swiper(".fasilitasSwiper", {
    slidesPerView: 1,
    breakpoints: {
      600: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      760: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    }
  });
  
  // produk
  filterSelection("best_seller");
  function filterSelection (kategori) {
    let x, i;
    x = document.getElementsByClassName("filterDiv");
    // if (kategori == )
    for (let i = 0; i < x.length; i++) {
      produkRemoveClass(x[i], "show");
      if (x[i].className.indexOf(kategori) > -1) produkAddClass(x[i], "show");
    }
  }

  function produkAddClass(element, name) {
    let i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (let i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  function produkRemoveClass(element, name) {
    let i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (let i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

  // add active class current button
  let btnContainer = document.getElementById("myBtnContainer");
  let btns = btnContainer.getElementsByClassName("btn");
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      let current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>
@endsection