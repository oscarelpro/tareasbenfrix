<!--esta es una vista -->
<html>
<head>
	<title>Entrar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/flat-ui.min.css">

	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/flat-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/jquery-3.2.1.min.js"></script>
</head>
<body>
  <form action="" method="POST">
<div class="login-form container" style="width:500px; margin-top:10%;">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="username" value="" placeholder="Usuario" id="login-name">
              <label class="login-field-icon fui-user" for="username"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field"name="password" value="" placeholder="Password" id="login-pass">
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>

            <input type="submit" value="ingresar" class="btn btn-primary">
         
          </div>

  </form>

</body>
</html>