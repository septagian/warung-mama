@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-6 mt-4 ms-5">
            <div>
                <h1>Build an Online Shop</h1>
                <h1>Businnes-no Matter</h1>
                <h1>What Business</h1>
                <h1>Your in</h1>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </form>
                  <div class="mt-4">
                    <p>Kamu harus bisa nih menggunakan cms toko online terbaik Shopify, sebab kamu dapat menggunakannya untuk toko online secara gratis.</p>
                 </div>
            </div>
        </div>
        <div class="col-sm-4 transisi">
            <img class="img-thumbnail rounded-circle rounded mx-auto d-block" src="img/1.jpg" alt="">
        </div>
        <div class="row gap-y py-7 align-items-center mt-5">
          <div class="col-md-6 text-center">
            <img src="https://s3-ap-southeast-1.amazonaws.com/www.tokotalk.com/feature/tampilan-website-user-friendly-tokotalk.png" alt="Tampilan Website User Friendly TokoTalk" width="540" height="281">
          </div>
          <div class="col-md-5 m-auto text-center text-md-left">
            <h3 class="fw-600 lh-2 text-info">Tampilan Website <em>User-Friendly</em></h3>
                <p class="fs-18 pt-4">Kenyamanan berbelanja <em>customer</em> adalah nomor satu. 
                  <br class="d-none d-md-block">Paham akan hal tersebut, TokoTalk menyediakan 
                  <br class="d-none d-md-block">desain website yang mudah dinavigasikan. 
                  <br class="d-none d-md-block">Diakses dari browser maupun <em>mobile</em>, 
                  <br class="d-none d-md-block">website kamu akan terlihat keren dan responsif. 
                </p>
          </div>
        </div>
        <div class="row gap-y pb-4 align-items-center mt-5">
          <div class="col-md-6 m-auto text-center text-md-left">
            <h3 class="fw-600 lh-2 text-info">Opsi Pembayaran COD</h3>
            <p class="fs-18 pt-4 mb-0">Menyediakan opsi <em>cash on delivery</em> (COD) 
              <br class="d-none d-md-block">bisa membantumu menjangkau <em>customer</em> 
              <br class="d-none d-md-block">lebih luas dan meningkatkan <em>conversion rate</em>! 
              <br class="d-none d-md-block">Psst.. jika <em>customer</em> mengembalikan barang, 
              <br class="d-none d-md-block">gratis biaya retur, <em>lho</em>!*</p>
              <p class="fs-12 pt-4"><em>*Cek detail <a href="https://www.tokotalk.com/help/cod-gratis-biaya-retur/" target="_blank">gratis retur COD TokoTalk</a></em></p>
            </div>
            <div class="col-md-6 text-center order-first order-md-last">
              <img src="https://s3-ap-southeast-1.amazonaws.com/www.tokotalk.com/feature/sistem-pembayaran-cod-tokotalk.png" alt="sistem pembayaran cod tokotalk" width="540" height="234">
            </div>
          </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <div class="col-sm-2">
                <img src="/img/3.jpg" class="card-img-top img-thumbnail rounded-circle rounded mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="col-sm-2">
                <img src="/img/4.jpg" class="card-img-top img-thumbnail rounded-circle rounded mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="col-sm-2">
                <img src="/img/5.jpg" class="card-img-top img-thumbnail rounded-circle rounded mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
          </div>
    </div>
@endsection