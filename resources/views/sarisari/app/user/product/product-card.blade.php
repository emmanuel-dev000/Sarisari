<div class="col-md-4">
    <div class="product-item">
      {{-- <a href="#"><img src="assets/images/product_04.jpg" alt=""></a> --}}
      <a href="#"><img src="{{ asset('images/product-images') }}" alt=""></a>
      <div class="down-content">
        {{-- <a href="#"><h4>Tittle goes here</h4></a> --}}
        <a href="#"><h4>{{ $product->name }}</h4></a>
        {{-- <h6>$15.25</h6> --}}
        <h6>${{ $product->price }}</h6>
        {{-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p> --}}
        <p>{{ $product->description }}</p>
        <ul class="stars">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
        </ul>
        <span>Reviews (48)</span>
      </div>
    </div>
</div>