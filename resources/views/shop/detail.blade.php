@extends('layouts.shopps')
@section('shopps')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1>Toko</h1>
                    </div>
                </div>
               <div  class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img width="300" height="300" src="{{ asset('img/'.$post->images) }}" alt="">
                    </div>
                    <div class="col-6">
                        <h1>
                            {{ $post->title }}
                        </h1>
                    <h2>
                        penjual :{{ $post->user->name }}
                    </h2>
                     <h5>
                         Deskripsi Product :{{ $post->excerpt }}
                     </h5>
                     <h6>
                        <span class="badge rounded-pill bg-warning text-dark">{{ $post->category->name }}</span>
                    </h6> 
                         <div class="card mt-3">
                             <div class="card-header">
                                 <h3 class="text-warning">{{ $post->prince }}</h3>
                                 <div class="flex items-center AB7YG6">
                                     </div>
                                         <div class="x1-hIE">Produk termurah di Kami
                                     </div>
                                 </div>
                             </div>
                        <div class="mt-5">
                             <button type="button" class="btn btn-outline-warning btn-lg"><i class="bi bi-cart-plus me-3"></i>+Masuk Keranjang</button>
                             <button type="button" class="btn btn-warning btn-lg ms-4">Beli Sekarang</button>
                         </div>
                    </div>
                </div>
            </div>
            </div>
            <div>
        </div>
    </div> 
    <div class="card mt-3">
        <h2 class="text-center">Product lainya</h2>
        <div class="card-body">
    <div class="row row-cols-12 row-cols-md-6 g-4 mt-1">
        @foreach ($detail as $row)
        <div class="col-1">
          <div class="card">
            <img width="invalid-value" height="invalid-value" alt="" class="Vz6gJ3 edy5hG" style="object-fit: contain" src="{{ asset('img/'.$row->images) }}">
            <div class="card-body">
              <h5 class="card-title">{{ $row->title }}</h5>
              <p class="card-text">
                {{ substr($row->excerpt, 0, 10) }}...
              </p>
              <a href="{{ route('shop.detail', $row->id) }}" class="text-decoration-none">
              <h6 class="text-warning">{{ $row->prince }}</h6>
            </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
        </div>
    </div>
</div>
@endsection