<!DOCTYPE html>
<html>
<head>
   @include('partials.head')
   <style>
        .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color : #fff;

            }
            .preloader .loading {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                font: 14px arial;
            }
        </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
        <div class="preloader">
                <div class="loading">
                    <img src="{{asset('images/22.gif')}}" width="80">
                    <p>Harap Tunggu</p>
                </div>
            </div>

  <header class="main-header">
      @include('partials.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   @include('partials.sidemenu')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('sectionheader')
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')

    </section>
    <!-- /.content -->
  </div>

    @include('partials.footer')

</div>
<!-- ./wrapper -->
@include('partials.script')
<script>

    $(document).ready(function(){
   $(".preloader").hide();
   loader.prependTo(window);
});

$(window).load(function(){
   loader.remove();
   $(".preloader").show();
});
   </script>
</body>
</html>
