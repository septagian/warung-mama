<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 md-2" href="#"><i class="bi bi-handbag-fill"></i>Shops</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active rotate" aria-current="page" href="/"><i class="bi bi-house-door"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active rotate" href="{{ route('shop.shopping') }}"><i class="bi bi-cart4"></i>Shopping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active rotate" href="{{ route('contact.contact') }}"><i class="bi bi-person-circle"></i></i>Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form action="/logout" method="post"> 
              @csrf
              <button type="submit" class="btn btn-outline-light">
                <i class="bi bi-box-arrow-in-left"></i></i>Log out
              </button>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('contact.menu') }}"><i class="bi bi-justify"></i>Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>