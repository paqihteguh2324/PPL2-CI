<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo base_url()?>/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login</h3>
            <form action="/login/auth" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="username" name="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" name="password">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo base_url() ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/js/main.js"></script>
  </body>
</html>