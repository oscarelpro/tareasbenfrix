<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/flat-ui.min.css">

	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/flat-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/jquery-3.2.1.min.js"></script>
</head>
<body>
<header class="container">
<div class="row demo-row ">
        <div class="col">
          <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
            <a class="navbar-brand" href="#" >Panel</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav mr-auto">
              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle " data-toggle="dropdown">Menu</a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('curso/nuevo')?>">Nuevo</a></li>
                    <li><a href="#">Modificar</a></li>
                    <li><a href="#">Todos</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('login/logout')?>">Salir</a></li>
                  </ul>
                </li>
             
               </ul>
               <form class="navbar-form form-inline my-2 my-lg-0" action="#" role="search">
                <div class="form-group">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div>
</header>


</body>
</html>