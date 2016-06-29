<!doctype html>
<html class="no-js">
<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>ICAEW - Administrator Login </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="shortcut icon" href="/favicon.ico">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="stylesheet" href="/assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/iriy-admin.min.css">
  <link rel="stylesheet" href="/assets/lib/font-awesome/css/font-awesome.min.css">

</head>
<body class="body-sign-in">
  <div class="container">
    <div class="panel panel-default form-container">
      <div class="panel-body">

        <form action="/auth/post_login" id="loginForm" method="POST">    
          <h3 class="text-center margin-xl-bottom">Administrator - Login</h3>
          
          <?php if (isset($msg)): ?>
            <div class="alert alert-block  alert-danger fade in">
              <button class="close" type="button" data-dismiss="alert">×</button>
              <?php echo $msg ?>
            </div>
          <?php endif ?>

          <div class="form-group text-center">
            <label class="sr-only" for="username">Username</label>
            <input name="username" type="text" class="form-control input-lg" value="<?php echo isset($username) ? $username : '' ?>" id="username" placeholder="Username" autocomplete="off" required />
          </div>
          <div class="form-group text-center">
            <label class="sr-only" for="password">Password</label>
            <input name="password" type="password" class="form-control input-lg" id="password" placeholder="Password" autocomplete="off" required/>
          </div>

          <button type="submit" class="btn btn-primary btn-block btn-lg">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</body>
<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/respond/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/assets/lib/jquery/jquery.min.js"></script>
<script src="/assets/lib/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/lib/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/js/login.js"></script>

</html>
