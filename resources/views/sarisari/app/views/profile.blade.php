@extends('sarisari.app.layout.layout')

@section('banner')
<div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Your Profile</h4>
            <h2>{{ Auth::user()->name }}</h2>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Manage your Products</h2>
          </div>
        </div>
        
    </div>
</div>
@endsection