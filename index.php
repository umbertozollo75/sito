<!doctype html>
<html lang='en-US'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Umberto Zollo Photography</title>

    <!-- JQuery, Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./bootstrap-4.5.0-dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- JS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>	

    <!-- custom css-->
    <link type="text/css" rel="stylesheet" href="./css/style.css" />
    <!-- custom js -->   
    <script type="text/javascript" src="./js/custom.js"></script>
  </head>
  <body class="home">

    <header class="header-head header-full-height">
      <div class="rd-navbar-wrap" style="height: 116px;">
        <div class="rd-navbar rd-navbar-static">
          <div class="row rd-navbar-inner">

            <div class="col-4 rd-navbar-panel rd-navbar-panel-left">
              <div class="moto-widget-text-content">
                <p class="moto-text_system_1">
                  <a class="" href="#" >Umberto <span class="moto-color_custom5">ZOLLO</span></a>​
                  &nbsp;
                  <span class="moto-color1_1">
                    <span style="font-size:12px;">PHOTOGRAPHY</span>​
                  </span>
                </p>
              </div>
            </div>

            <div class="col-4 rd-navbar-panel rd-navbar-panel-center">
              <?php include 'social.php'; ?>
            </div>

            <div class="col-4 rd-navbar-panel rd-navbar-panel-right">
              <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#"> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Portfolio</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2019</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="news.php"> News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contatti.php"> Contatti</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>

          </div>
        </div>
      </div>
      <div class="section-head">
        <div class="section-container">
          <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./image/home-slider01.jpg" alt="">
                <div class="carousel-caption">
                  <h3 class="h3-responsive">GIORNATA GLAMOUR</h3>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/home-slider02.jpg" alt="">
                <div class="carousel-caption">
                  <h3 class="h3-responsive">GIORNATA GLAMOUR</h3>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/home-slider03.jpg" alt="">
                <div class="carousel-caption">
                  <h3 class="h3-responsive">GIRO DELL'APPENNINO 2020</h3>
                  <p>Genova</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/home-slider04.jpg" alt="">
                <div class="carousel-caption">
                  <h3 class="h3-responsive">GIRO DEL PIEMONTE 2019</h3>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/home-slider05.jpg" alt="">
                <div class="carousel-caption">
                  <h3 class="h3-responsive">GIRO DEL PIEMONTE 2019</h3>
                  <p>Oropa (BI)</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
              <span><i class="fa fa-angle-double-left"></i></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
              <span><i class="fa fa-angle-double-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <?php include 'footer.php';?>

  </body>
</html>