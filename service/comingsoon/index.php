<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coming Soon - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Coming Soon!</h1>
              <p class="mb-5" style="font-family: fantasy;">We're working hard to finish the development of this site.The site is worth waiting.
                <strong>See you soon</strong>!. Meet our developer for further details.</p>
              <form method="post" action="#" class="input-group input-group-newsletter">
                  <button style="margin-left: auto;margin-right: auto;" class="btn btn-secondary"  name="home"  type="submit">Bach to Home</button>
                  <button style="margin-left: auto;margin-right: auto;" class="btn btn-secondary" name="dev"  type="submit">Developer</button>
                </form>
  <?php 
    if(isset($_POST['home'])) {
    header("Location: ../../dashboard/");
    }
    if(isset($_POST['dev'])) {
    header("Location: http://www.facebook.com/sumanmichael01");
    }
  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="https://twitter.com/sumanmichael01">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="http://www.facebook.com/sumanmichael01">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="http://www.instagram.com/inside.atom">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
