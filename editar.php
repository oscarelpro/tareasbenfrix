<html>
<!--esta es una vista -->
<head>
	<title>Nuevo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/flat-ui.min.css">

	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/flat-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>static/scripts/jquery-3.2.1.min.js"></script>
</head>
<body>
<table class="container" style="margin-left:10%;">
<?php echo form_open("curso/actualizar".$id)?>
<?php

//creacion de arreglos para cada input
$usuario = array(
	'name'=>'usuario','placeholder'=>'escribe tu nombre','value'=>$curso->result()[0]->usuario
	);
$password = array(
	'name'=>'password','placeholder'=>'contraseña','type'=>'password','value'=>$curso->result()[0]->password
	);

?>

<?php echo form_label('nombre de usuario','usuario')?><br>
<?php  echo form_input($usuario) ?>
<br><br><br>

<?php echo form_label('password','password')?><br>
<?php echo form_input ($password) ?>

<br><br><br>
<input type="submit" name="actualizar" value="actualizar" style="margin-left:10%;">

<?php echo form_close() ?>



</table>

</body>
</html>



