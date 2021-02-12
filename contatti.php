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
    <script src="https://www.google.com/recaptcha/api.js?render=6LdYPDAaAAAAAIuQ_ze3X9u9p30jP6i_Dkk-1sJi"></script>
    <script>
      grecaptcha.ready(function () {
        grecaptcha.execute('6LdYPDAaAAAAAIuQ_ze3X9u9p30jP6i_Dkk-1sJi', {action: 'contact'}).then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
        });
      });
    </script>
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
                    <li class="nav-item active">
                      <a class="nav-link" href="#"> Contatti</a>
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
    </header>

    <main class="page-content">
      <section class="section-contacts">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Contact information</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <div class=""></div>
            <form id="contact-form" method="post" style="margin:10px 0;">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_name">Nome *</label>
                    <input id="form_firstname" type="text" name="name" class="form-control" placeholder="Inserisci il tuo nome *" required="required" data-error="Il nome è richiesto.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_lastname">Cognome *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Inserisci il tuo cognome *" required="required" data-error="Il cognome è richiesto.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Inserisci la tua mail *" required="required" data-error="Una mail valida è richiesta.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_phone">Telefono</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Inserisci il tuo numero di telefono">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_message">Messaggio *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Messaggio per me *" rows="4" required data-error="Per favore, lasciami un messaggio."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-left">
                  <button type="submit" id="submit-button" class="btn btn-outline-primary">Spedisci messaggio</button>
                </div>
              </div>
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
          </div>
          <div class="col-lg-4">&nbsp;</div>
        </div>
      </section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    </main>

    <?php include 'footer.php'; ?>

  </body>
</html>