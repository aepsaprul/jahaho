@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

@endsection

@section('content')
<div id="content">
  {{-- produk --}}
  <div id="produk" style="margin-top: 50px;">
    <div class="container">
      <h3>produk</h3>
      <div id="myBtnContainer" class="title">
        <button class="btn active" onclick="filterSelection('best_seller')">best seller</button>
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
          <img src="assets/produk.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv best_seller">
          <img src="assets/produk-6.jfif" alt="produk">
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
          <img src="assets/produk-9.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv stationary">
          <img src="assets/produk-10.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv promotion">
          <img src="assets/produk-11.jfif" alt="produk">
          <p>stationary</p>
        </div>
        <div class="col filterDiv promotion">
          <img src="assets/produk-3.jfif" alt="produk">
          <p>promotion</p>
        </div>
        <div class="col filterDiv promotion">
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
        <div class="col filterDiv billboard">
          <img src="assets/produk-5.jfif" alt="produk">
          <p>other</p>
        </div>
        <div class="col filterDiv billboard">
          <img src="assets/produk-4.jfif" alt="produk">
          <p>billboard</p>
        </div>
        <div class="col filterDiv billboard">
          <img src="assets/produk-5.jfif" alt="produk">
          <p>other</p>
        </div>
        <div class="col filterDiv other">
          <img src="assets/produk-7.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv other">
          <img src="assets/produk-7.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv other">
          <img src="assets/produk-7.jfif" alt="produk">
          <p>best seller</p>
        </div>
        <div class="col filterDiv other">
          <img src="assets/produk-7.jfif" alt="produk">
          <p>best seller</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>  
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