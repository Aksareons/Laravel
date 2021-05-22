@extends('index')

@section('title-block')Страница фильмов@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Информация о фильме</h1>
          </div>
          <div class="col-sm-6">
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <!-- <h3 class="card-title">Custom Elements</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название фильма</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Описание</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter ..."></textarea>
                      </div>

                      <!-- textarea -->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Главная картинка</label>
                    </div>
                    <br><br>
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №1</label>
                    </div>
</div>
<div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №2</label>
                    </div>
</div>                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №3</label>
                    </div>
</div>
<div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      
                      <label class="custom-file-label" for="customFile">доп картинка №4</label>
                    </div>
</div>
<div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">доп картинка №5</label>
                    </div>
</div>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Url на трейлер</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter url">
</div>
<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection