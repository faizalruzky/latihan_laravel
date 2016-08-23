<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=devicewidth, initialscale=1">
      <title>FaizalRuzky</title>
      <!--Import library css-->
      <link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="/library/materialize/css/materialize.min.css" rel="stylesheet"/>
      <link href="/library/masonry/style.css" rel="stylesheet">
     <!--  <link href="/library/masonry/normalize.css" rel="stylesheet"> -->
      
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="/custom/style.css">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700">
      
      <script src="/library/jquery/jquery-3.1.0.js"></script>
      <script src="/library/bootstrap/js/bootstrap.min.js"></script>
      <script src="/library/materialize/js/materialize.min.js"></script>
      <script src="/library/masonry/masonry.pkgd.min.js"></script>
      <script src="/library/masonry/jquery.js"></script>
      <script src="http://code.jquery.com/jquery.js"></script>
 
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
      <script src="custom/script.js"></script>
    </head>
    
    <body>
      <!--bagian navigation-->
      @include('shared.head_nav')
      <!-- Bagian Content -->
      <div class="container clearfix">
        <!--  <div class="row row-offcanvas row-offcanvas-left "> -->
        <!--Bagian Kiri-->
        <!-- @include("shared.left_nav") -->
        <!--Bagian Kanan-->
        <div id="main-content">
          <div class="panel-body">
            @if (Session::has('error'))
              <div class="session-flash alert-danger">
                  {{Session::get('error')}}
              </div>
            @endif
            @if (Session::has('notice'))
              <div class="session-flash alert-info">
                  {{Session::get('notice')}}
              </div>
            @endif
            @yield("content")
          <!-- </div> -->
        </div>
      </div>
      <link href="/library/masonry/style.css" rel="stylesheet"/>
      <script src="/library/masonry/jquery.js" type="text/javascript"></script>
    </body>
  </html>