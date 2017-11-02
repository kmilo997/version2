<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@role('cliente')
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La palmera</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>La Palmera</strong> </h1>
                            <div class="description">
                              
                            </div>
                        </div>
                   <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>No esta autorizado</h3>
                              
                                </div>
                           
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            

                            </div>
                            </div>


                            
                              
                          
                           
                           



                        </div>

                    </div>
                   
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

   </div>
   </body>
   </html>
@endrole

@role('admin')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>LA PALMERA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Exec Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- bootstrap-css -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
  <!--// bootstrap-css -->
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
  <!--// css -->
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/team.css') }}" type="text/css" media="all" />
  <!--// css -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
  <!-- font-awesome icons -->
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!-- font -->
  <link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <!-- //font -->
</head>

<body>
  <div class="inner_agile_pages">
    <div class="main_agileits">
      <div class="agile_wthree_nav">
        <nav class="navbar navbar-default">
          <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="#"><i class="fa " aria-hidden="true"></i>La Palmera</a></h1>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-8" id="link-effect-8">
               <ul class="nav navbar-nav">
                <li><a href="{{route('venta.index')}}">Ventas</a></li>
                <li ><a href="{{route('products.index')}}">Productos</a></li>
                <li><a href="{{route('proveedor.index')}}">Proveedores</a></li>
                 <li><a href="{{route('cliente.index')}}">Clientes</a></li>
                 <li><a href="{{route('pedidoAdmin.index')}}">Pedidos</a></li>
                 
                
                </li>
                @guest
                          

                        @else
                            <li class="dropdown">
                                
                                </a> 
                                <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            CERRAR SESION
                                        </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                               
                            </li>
                        @endguest
              </ul>
            </nav>
          </div>
        
            <!-- cd-search -->
            
            <!-- //cd-search -->

          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!--/w3_short-->
  <!--<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

     
    </div>
  </div>-->
  <!--//w3_short-->

  <!-- /banner_bottom_w3ls_agile -->
  @yield('content')
  
  <!-- //banner_bottom_w3ls_agile -->
  <!-- /services -->
  
            
  <!-- //services -->
  <!-- staforeing gils callme sexy, ehhhh...ts -->
  <!-- stats -->







  <div class="stats" id="stats">
    <div class="container">
      <div class="agile_inner_info_stats">
        <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
          <i class="fa fa-dropbox " aria-hidden="true"></i>
          <p class="counter"> <?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM products ")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    echo $row_cnt;

    /* cerrar el resultset */
    $result->close();
}?>
</p>
          <h3>Productos</h3>
        </div>
        <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
          <i class="fa fa-smile-o" aria-hidden="true"></i>
          <p class="counter"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM ventas ")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    echo $row_cnt;

    /* cerrar el resultset */
    $result->close();
}?></p>
          <h3>Ventas</h3>
        </div>
        <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
          <i class="fa fa-users" aria-hidden="true"></i>
          <p class="counter"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM proveedors ")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    echo $row_cnt;

    /* cerrar el resultset */
    $result->close();
}?></p>
          <h3>Proveedores</h3>
        </div>
        <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
          <i class="fa fa-user" aria-hidden="true"></i>
          <p class="counter"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT id FROM clientes ")) {

    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;

    echo $row_cnt;

    /* cerrar el resultset */
    $result->close();
}?></p>
          <h3>Clientes</h3>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>

  <!-- //stats -->
  <!-- team -->

<!-- team -->
  <!-- /services -->

  <!-- //services -->
  <!-- /testimonials-->

  <!-- //testimonials-->
  <!-- footer -->
  <div class="footer">
    <div class="container">
      
      </div>
      <p>© 2017  </p>
    </div>
  </div>
  <!-- //footer -->
  <script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>
  <script src="{{ asset('/js/search.js') }}"></script>
  <!-- stats -->
  <script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.countup.js') }}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats -->
  <!-- carousel -->
  <script src="{{ asset('/js/owl.carousel.js') }}"></script>
  <script>
    $(document).ready(function () {
      $("#owl-demo").owlCarousel({
        items: 1,
        itemsDesktop: [768, 1],
        itemsDesktopSmall: [414, 1],
        lazyLoad: true,
        autoPlay: true,
        navigation: true,

        navigationText: false,
        pagination: true,

      });

    });
  </script>
  <!-- //carousel -->
  <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>

</html>
@endrole
