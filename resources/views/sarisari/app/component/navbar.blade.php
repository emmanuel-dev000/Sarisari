<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/sarisari') }}"><h2>Sixteen <em>Clothing</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/sarisari') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/sarisari/products') }}">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/sarisari/about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/sarisari/contacts') }}">Contact Us</a>
          </li>
          @if ( Auth::check() )
            <li class="nav-item">
              @include('sarisari.app.component.account-dropdown')
            </li> 
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>