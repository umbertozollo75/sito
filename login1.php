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
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat+Alternates:400%7CRoboto:300,400">
    <!-- custom css-->
    <link type="text/css" rel="stylesheet" href="./css/style1.css" />
  </head>
  <body class="" style="">
    <div class="page">

      <!-- Page Header-->
      <header class="header-head">
        <div class="header-container">

          <div class="uz-navbar-wrap uz-navbar-wrap-new">
            <nav class="navbar navbar-expand-lg">
              <div class="uz-navbar-inner">

                <div class="uz-navbar-panel uz-navbar-panel-left">
                  <!-- RD Navbar Brand-->
                  <div class="brand">
                    <div class="brand-logo"><i class="fa fa-camera-retro fa-4x" aria-hidden="true"></i></div>
                    <div class="brand-name">
                      <a href="./index1.html">UMBERTO ZOLLO</a>
                      <p>PHOTOGRAPHY</p>
                    </div>
                  </div>
                </div>
                <div class="uz-navbar-panel uz-navbar-panel-center">
                  <?php include './social1.php'; ?>
                </div>
                <div class="uz-navbar-panel uz-navbar-panel-right">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto navbar-custom">
                      <li class="nav-item">
                        <a class="nav-link" href="./index1.php"> Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Portfolio</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">2021</a>
                          <a class="dropdown-item" href="#">2020</a>
                          <a class="dropdown-item" href="#">2019</a>
                        </div>
                      </li>
                      <!--
                      <li class="nav-item">
                        <a class="nav-link" href="news.php"> News</a>
                      </li>
                      -->
                      <li class="nav-item">
                        <a class="nav-link" href="./contatti1.php"> Contatti</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="./login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>

      <main class="page-head">
        <div class="page-container">

          <div class="uz-contact-panel">
            <div class="uz-contact-center">
              <h1>ADMIN PANEL</h1>
            </div>
          </div>
          <div class="uz-login-panel">
            <div class="uz-login-colsx">&nbsp;</div>
            <div class="uz-login-colcx">
              <form id="login-form" method="post" action="" role="form">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_username">Username *</label>
                    <input id="form_username" type="text" name="username" class="form-control" placeholder="Inserisci il tuo username *" required="required" data-error="L'username è richiesto.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_password">Password *</label>
                    <input id="form_password" type="text" name="password" class="form-control" placeholder="Inserisci la tua password *" required="required" data-error="La password è richiesta.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12 text-left">
                  <button type="submit" class="btn btn-outline-primary">Login</button>
                </div>
              </form>
            </div>
            <div class="uz-login-coldx">&nbsp;</div>
          </div>
        </div>
      </main>

      <?php include 'footer.php'; ?>
    </div>
    <!-- JS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->   
    <script type="text/javascript" src="./js/custom.js"></script>
  </body>
</html>