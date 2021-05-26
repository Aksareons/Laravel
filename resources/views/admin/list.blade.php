@extends('layouts.admin_layouts')

@section('title-block')Страница фильмов@endsection
@section('content')


	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Список фильмов</h1>
					</div>
					@if (session('success'))
          <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check">{{ session('success') }}</i></h4>
          </div>
          @endif
				</div>
			</div>
		</div>

		<section class="content">

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		@foreach($films as $film)
			<br>
			<div class="col-lg-2 col-6">
			<p>{{ $film['title']}}</p>
				<a href="#" class="small-box-footer">
					<div class="inner">
						<img src="https://lh3.googleusercontent.com/exNEL5KpyEJfL0LIwRdwAMv6ELYqcfN6zK-w6G8l65785DAor9ryE-uo0hPXXCnmHulm8yU=s152" height="120" width="200" alt="" >
					</div>
			
				<td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{route('editFilm', [$film->slug])}}">
                              <i class="fas fa-folder">
                              </i>
                        Подробная Информация
                          </a>
                      <!-- <form action="{{route('editFilm', [$film->slug])}}" method="POST">
					  @csrf
					  
                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button> -->
						  </form>
                      </td>
			</div>
		@endforeach
		
			</section>
			<br>{{$films->links('vendor.pagination.bootstrap-4')}}
	
	</div>
	</div>
@endsection

