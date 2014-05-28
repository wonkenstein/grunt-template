<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?> | Laravel PHP Framework</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <!-- bootstrap -->
        <link rel="stylesheet" href="lib/bootstrap-3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/bootstrap-3.1.1/css/bootstrap-theme.min.css">


        <link rel="stylesheet" href="css/main.css">
        <!-- // <script src="js/main.js"></script> -->


    </head>
    <body>

        <div class="container">
            <!--[if lt IE 8]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <header>
              <img src="http://placehold.it/200x100/&text=logo" />
            </header>
        </div>

        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
              <ul class="nav navbar-nav">
                <?php for($i=1; $i<5; $i++): ?>
                <?php $page = 'template' . $i; ?>
                <li><?php echo link_to($page, $page) ?></li>
                <?php endfor; ?>
              </ul>
            </nav>
        </div>

        <div class="container">
            <section class="main">
              <?php echo $content ?>
            </section>
        </div>

        <div class="container">
            <footer>
                <div class="row">


                      <div class="col-md-3 col-sm-3">
                          <h3>Footer Group 1</h3>
                          <ul>
                            <?php for($i=1; $i<5; $i++): ?>
                            <li><?php echo link_to('#', 'footer link ' . $i) ?></li>
                            <?php endfor; ?>
                          </ul>
                      </div>

                      <div class="col-md-3  col-sm-3">
                          <h3>Footer Group 2</h3>
                          <ul>
                            <?php for($i=1; $i<5; $i++): ?>
                            <li><?php echo link_to('#', 'footer link ' . $i) ?></li>
                            <?php endfor; ?>
                          </ul>
                      </div>



                      <div class="col-md-3 col-sm-3">
                          <h3>Footer Group 3</h3>
                          <ul>
                            <?php for($i=1; $i<5; $i++): ?>
                            <li><?php echo link_to('#', 'footer link ' . $i) ?></li>
                            <?php endfor; ?>
                          </ul>
                      </div>

                      <div class="col-md-3 col-sm-3">
                          <h3>Footer Group 4</h3>
                          <ul>
                            <?php for($i=1; $i<5; $i++): ?>
                            <li><?php echo link_to('#', 'footer link ' . $i) ?></li>
                            <?php endfor; ?>
                          </ul>
                      </div>

                </div>

                    <nav class="footer-nav" role="navigation">
                      <ul class="">
                        <?php for($i=1; $i<5; $i++): ?>
                        <?php $page = 'template' . $i; ?>
                        <li><?php echo link_to($page, $page) ?></li>
                        <?php endfor; ?>
                      </ul>
                    </nav>


            </footer>

        </div>

        <script src="lib/jquery-1.11.1.min.js"></script>
        <script src="lib/bootstrap-3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
