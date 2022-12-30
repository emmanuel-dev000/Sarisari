@extends('sarisari.app.layout.layout')

@section('banner')
<div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new arrivals</h4>
            <h2>sarisari products</h2>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filters">
          <ul>
              <li class="active" data-filter="*">All Products</li>
              @foreach ($categories as $category)
                <li>{{ $category->name }}</li>
              @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md-12">
        <div class="filters-content">
            <div class="row grid">
              @foreach ($products as $product)
                @include('sarisari.app.user.product.product-card-large')
              @endforeach
            </div>
        </div>
      </div>
      <div class="col-md-12">
        <ul class="pages">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- @foreach ($categories as $category)
    <p>{{ $category->name }}</p>
@endforeach --}}