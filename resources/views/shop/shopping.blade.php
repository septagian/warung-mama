@extends('layouts.shopps')
@section('shopps')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1><i class="bi bi-cart4"></i>Shopping</h1>
                </div>
                <form action="/shop">
                   <div class="input-group mb-3 mt-5">
                      <input type="text" class="form-control" placeholder="search" name="search" aria-label="search" aria-describedby="basic-addon2">
                      <button class="input-group-text btn btn-primary" type="submit">search</button>
                   </div>
                </form>
            </div>
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img  src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/4/25/4ed31782-3547-44fb-ae00-b568ef82367c.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/4/21/4fec9be5-4cba-412f-8914-e85133b0df8c.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/4/21/4fec9be5-4cba-412f-8914-e85133b0df8c.jpg.webp?ect=3g" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="text-center mt-4">
              <div class="card bg-dark">
                <h1 class="text-light"><i class="bi bi-bag-fill"></i>Product</h1>
              </div>
            </div>
            <div class="row row-cols-12 row-cols-md-6 g-4 mt-5">
              @foreach ($product as $row)
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
@endsection
