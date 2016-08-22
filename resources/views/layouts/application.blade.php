<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=devicewidth, initialscale=1">
      <title>FaizalRuzky</title>
      <link href="/css/bootstrap.min.css" rel="stylesheet" />
      <link href="/css/materialize.min.css" rel="stylesheet" />
    </head>
    <body style="padding-top:60px;">
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
            </div>
          </div>
        </div>
      </div>
      <script src="/js/jquery-3.1.0.js"></script>
      <script src="/js/bootstrap.js"></script>
      <script src="/js/materialize.js"></script>
    </body>
  </html>