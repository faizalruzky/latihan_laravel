 <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=devicewidth, initialscale=1">
      <meta name="_token" content="{{ csrf_token() }}" />    

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
        <script src="/js/custom.js"></script>
    </head>
    <body>
<script type="text/javascript">
  $(function() {
            $.ajaxSetup({
                headers: {
                    'X-XSRF-Token': $('meta[name="_token"]').attr($article)
                }
            });
        });
</script>

<div class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"/>
        <span class="icon-bar"/>
        <span class="icon-bar"/>
      </button>
      <a href="#" class = "navbar-brand">FaizalRuzky</a>
    </div>
    <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a class="article_link" href="#">Article</a></li>
      <li><a href="{{ url('/posts') }}">Posts</a></li>
    </ul>
    </div>
  </div>
</div>
</body>