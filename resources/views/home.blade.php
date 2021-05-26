@extends('layouts.app')

@section('content')
<div class="bgimage">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="container">
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="/image/381322.jpg"  width="100%"  height="550" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Первый слайд</h1>
            <p>Слева будет текст</p>
            <p><a class="btn btn-lg btn-primary" href="#">Кнопка просмотра</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="/image/381322.jpg"  width="100%"  height="550" alt=""></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Второй слайд</h1>
            <p>Текст будет в центре</p>
            <p><a class="btn btn-lg btn-primary" href="#">кнопка просмотра</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="/image/381322.jpg"  width="100%"  height="550" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Третий слайд</h1>
            <p>Текст будет справа</p>
            <p><a class="btn btn-lg btn-primary" href="#">кнопка просмотра</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container-fluid bg-light">
    <h2 class="display-6 text-center mb-4">Смотрите сегодня</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($films as $film)
        <div class="col">
          <div class="card shadow-sm">
          <p>{{ $film['srcimage']}}</p>
          <p>{{ $film['title']}}</p>
            
            

            <div class="card-body">
              <p class="card-text">{{$film['description']}}!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('getFilm', [$film->slug])}}"><button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button></a>
                  
                </div>
                <small class="text-muted">{{$film['slug']}}</small>
              </div>
            </div>
          </div>
          
        </div>
        @endforeach
     
            
    </div>
    </br></br></br>
    <h2 class="display-6 text-center mb-4">Новости и акции</h2>
      <div class="bd-example">
        <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text></svg>
        </div>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <a href="google"><img src="https://png.pngtree.com/element_our/20190604/ourlarge/pngtree-banner-banner-paper-border-image_1474759.jpg" width="750"  height="150"alt=""></br></br></br></a>
      <h1 class="display-4 fw-normal">СеоТекст</h1>
      <p class="fs-5 text-muted">сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст сео текст </p>
    </div>
    </div>
    
  </div>
</div>
    </div>
    
    
@endsection
