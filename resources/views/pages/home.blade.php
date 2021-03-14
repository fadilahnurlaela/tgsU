@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ ('image/img6.jpeg') }}" class="d-block w-100">
      </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
      <img src="{{ ('image/img4.jpeg') }}" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Rose</h4>
            <a class="btn btn-primary" href="#" role="button">Link</a>
        </div>
    </div>
    <div class="card">
        <img src="{{ ('image/img5.jpeg') }}" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">Brand</h4>
                <a class="btn btn-primary" href="#" role="button">Link</a>
            </div>
    </div>
    <div class="card">
        <img src="{{ ('image/img6.jpeg') }}" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">The Place</h4>
                <a class="btn btn-primary" href="#" role="button">Link</a>
            </div>
    </div>
  </div>
<div class="card-deck">
    <div class="card">
      <img src="{{ ('image/img1.jpeg') }}" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Sakura</h4>
            <a class="btn btn-primary" href="#" role="button">Link</a>
        </div>
    </div>
    <div class="card">
        <img src="{{ ('image/img2.jpeg') }}" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">Jasmine</h4>
                <a class="btn btn-primary" href="#" role="button">Link</a>
            </div>
    </div>
    <div class="card">
        <img src="{{ ('image/img3.jpeg') }}" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">Kingdom</h4>
                <a class="btn btn-primary" href="#" role="button">Link</a>
            </div>
    </div>
  </div>
  <footer class="footer">
      <p>Copyright @ Food. All reserve right</p>
  </footer>
@stop

@section('js')
<script>
console.log('Hello');
</script>
@stop