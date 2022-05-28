@extends('layouts.main')
<div class="text-center" style="background-color: rgb(150, 162, 167)">
@section('content')
<div class="container row align-items-center">
    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="/img/2.jpg"  width="150" class="img-thumbnail rounded-circle rounded  d-block" alt="...">
                        </div>
                        <div class="col-4 text-light">
                           <h4>{{ $user[0]->name }}</h4>
                           
                           <h6><a class="text-light text-decoration-none" href="{{ route('contact.Acount') }}"><i class="bi bi-pencil"></i>edit</a></h6>
                        </div>
                    </div>
                    <h1 class="text-center text-light"><i class="bi bi-justify"></i>Menu</h1>
                    <h6  class="text-center  mt-5"> <a class="text-light" href="">profil</a></h6>
                    <h6  class="text-center text-light">Tambah Post</h6>
                    <h6  class="text-center text-light">contact</h6>
                    <h6  class="text-center text-light">About</h6>
                    <h6  class="text-center text-light">Gallery</h6>
                    <h6  class="text-center text-light">calendar</h6>
                </div>
                <div class="mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,224C240,235,300,213,360,186.7C420,160,480,128,540,106.7C600,85,660,75,720,96C780,117,840,171,900,202.7C960,235,1020,245,1080,234.7C1140,224,1200,192,1260,170.7C1320,149,1380,139,1410,133.3L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
                 </div>
            </div>
        </div>
    </div>
</div>
<footer class="main-footer mt-5">
    <strong>Gian Bau Tai</strong>
  </footer>
</div>
@endsection