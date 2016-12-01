<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>jssOnline</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('plugin/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/admin-theme/css/AdminLTE.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugin/skin/_all-skins.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
  @yield('style-link')
  <style type="text/css">
    @yield('style-link')
    
    
  </style>
  
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('body.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('body.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-md-10 col-lg-8">
          <div class="box box-black">
            <div class="box-header with-border">
              Actualizar para ver las publicaciones... Aplicación en desarrollo
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12">
                  <div class="pad">
                  <div class="form-group">
                  
                  <textarea id="post_content" class="form-control" rows="3" placeholder="Escribe algo..."></textarea>
                </div>
                    
                  </div>
                </div>
               
              </div>
              <!-- /.row -->
            </div>
            <div class="box-footer with-border">
              <div class="box-tools pull-right">
                <button id="public"   type="button" class="btn btn-primary btn-xs">Publicar</button>
                {{ csrf_field() }}
              </div>
            </div>
        
          </div>
      </div>
        <div class="col-md-1 col-lg-2"></div>
        
      </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
     @yield('content')
      
   
  
    </section>
 
  
  <div class="control-sidebar-bg"></div>
  
  
  
</div>
 <footer class="main-footer">
    
  </footer>
</div>

<script src="{{ asset('plugin/jquery/jquery-3.1.1.min.js',true) }}"></script>
<script src="{{asset('plugin/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

<!-- FastClick -->

<!-- AdminLTE App -->
<script src="{{asset('/plugin/admin-theme/js/app.min.js')}}"></script>
@yield('script-link')
<script>
    @yield('script')
</script>
</body>
</html>
