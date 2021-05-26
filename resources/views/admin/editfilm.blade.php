@extends('layouts.admin_layouts')

@section('title-block')Редактирование@endsection
@section('content')


<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Редактирование фильма: {{ $film['title'] }}</h1>
          </div>
          <div class="col-sm-6">
          @if (session('success'))
          <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check">{{ session('success') }}</i></h4>
          </div>
          @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
      
            <div class="card card-secondary">
              <div class="card-header">
              </div>
              <div class="card-body">
              <form action="{{ route('addfilm.update', $film['id'])}}" method="POST">
                @csrf
               @method('PATCH')
                <div class="form-group">
                    <label for="title">Название фильма {{$film['id']}}</label>
                    <input type="text" value="{{ $film['title'] }}" name="title"  class="form-control" id="title" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" name="description" value="{{ $film['description'] }}" class="form-control" id="description" placeholder="Enter description">
                  </div>
                  <div class="form-group">
                    <label for="text">text</label>
                    <input type="text" name="text" value="{{ $film['text'] }}" class="form-control" id="text" placeholder="Enter text">
                  </div>
                  <div class="form-group">
                    <label for="slug">slug</label>
                    <input type="text" name="slug" value="{{ $film['slug'] }}" class="form-control" id="slug" placeholder="Enter slugtitle">
                  </div>
                  <div class="form-group">
                    <label for="srcimage">srcimage</label>
                    <input type="text" name="srcimage" value="{{ $film['srcimage'] }}" class="form-control" id="srcimage" placeholder="Enter srcimagetitle">
                  </div>
                  <div class="form-group">
                    <label for="time">time</label>
                    <input type="number" name="time" value="{{ $film['time'] }}" class="form-control" id="time placeholder="Enter time>
                  </div>
                  
                      <!-- <div class="form-group">
                        <label>Описание</label>
                        <textarea  class="form-control" rows="3"  placeholder="Enter ..."></textarea>
                      </div>

                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Главная картинка</label>
                    </div>
                    <br><br>


                    <div class="form-group">
                    <label for="exampleInputEmail1">Url на трейлер</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter url">
</div> -->
<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- ./wrapper -->
@endsection

                    <!-- <div class="row">
                    <div class="col-sm-6">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №1</label>
                    </div>
</div>
<div class="col-sm-6">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №2</label>
                    </div>
</div>                    <div class="col-sm-6">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №3</label>
                    </div>
</div>
<div class="col-sm-6">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      
                      <label class="custom-file-label" for="customFile">доп картинка №4</label>
                    </div>
</div>
<div class="col-sm-6">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №5</label>
                    </div>
</div>
                    </div> -->