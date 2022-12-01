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

  {{-- fasilitas --}}
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

  {{-- partner --}}
  <div id="partner">
    <div class="container">
      <h3>corporate partner</h3>
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Hotel')" id="defaultOpen">Hotel</button>
        <button class="tablinks" onclick="openCity(event, 'Kosmetik')">Kosmetik</button>
        <button class="tablinks" onclick="openCity(event, 'Bank')">Bank</button>
      </div>      
      <div id="Hotel" class="tabcontent">
        <div class="tabcontent-list">
          <div>
            <img src="{{ asset('assets/hotel.png') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/hotel-2.jpg') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/hotel-3.jfif') }}" alt="partner">
          </div>
        </div>
      </div>      
      <div id="Kosmetik" class="tabcontent">
        <div class="tabcontent-list">
          <div>
            <img src="{{ asset('assets/kosmetik-1.png') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/kosmetik-2.png') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/kosmetik-3.jfif') }}" alt="partner">
          </div>
        </div>
      </div>      
      <div id="Bank" class="tabcontent">
        <div class="tabcontent-list">
          <div>
            <img src="{{ asset('assets/bank-1.png') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/bank-2.png') }}" alt="partner">
          </div>
          <div>
            <img src="{{ asset('assets/bank-3.png') }}" alt="partner">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="clear: both;"></div>
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

  // partner
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
@endsection