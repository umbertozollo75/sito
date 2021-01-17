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

    <header class="header-head">
      <div class="rd-navbar-wrap rd-navbar-wrap-new" style="height: 116px;">
        <div class="rd-navbar rd-navbar-static">
          <div class="row rd-navbar-inner">

            <div class="col-4 rd-navbar-panel rd-navbar-panel-left">
              <div class="moto-widget-text-content">
                <p class="moto-text_system_1">
                  <a class="" href="index.php" >Umberto <span class="moto-color_custom5">ZOLLO</span></a>​
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
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"> Home</a>
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
                    <li class="nav-item active">
                      <a class="nav-link" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </header>

    <main class="page-content">
      <section class="section-login">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4 login-box">
            <!--            <div class="login-key">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </div>-->
            <div class="login-title">
              ADMIN PANEL
            </div>
            <div class="login-form">
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
          </div>
          <div class="col-lg-4"></div>
        </div>
      </section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    </main>

    <?php include 'footer.php'; ?>

  </body>
</html>