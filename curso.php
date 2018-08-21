<!--esta es una vista -->
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/flat-ui.min.css">
	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/flat-ui.min.js"></script>
</head>
<body>
<h1 class="container">Usuarios registrados</h1>
</body>

<?php

foreach ($curso->result() as $curso) {?>
	
	<center>

<table class="table table-striped table-dark container" style="width:400px;">
  <thead>
    <tr>
      
      <th scope="col">Usuario</th>
      <th scope="col">password</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo $curso->usuario;?></td>
      <td><?php echo $curso->password; ?></td>
    </tr>
    
  </tbody>
</table>



</table>

<?php
}
?>
