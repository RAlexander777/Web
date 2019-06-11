<?php 
	$numero_objetos = $_POST['numero_objetos'];
 ?>

<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
</head>
    
<body>

  <form method="post" action="mochila1.php" name="numero_objetos" id="numero_objetos" value= "">
    <?php
      $numero_objetos = $_POST['numero_objetos'];
    ?>

<?php 

   for($i = 0 ; $i<$numero_objetos; $i++)	
   {
?>
    <div class="col-sm-5">
    <h2>  
    <?php
       $ireal= $i+1;
       echo "Objeto $ireal";
    ?>
    </h2>
    </div>

    <form method="post" action="mochila1.php" name="mochila" id="mochila" value= "">
        
	<div class="form-group">
			 <label for="valor" class="col-sm-4 control-label">Peso <?php echo $i+1; ?></label>
			 <div class="col-sm-10">
			       	   <input class="form-control" type="text" name="peso" id="peso" value="">
			 </div>
    </div>
        
    <div class="form-group">
			 <label for="valor" class="col-sm-4 control-label">Valor <?php echo $i+1; ?></label>
			 <div class="col-sm-10">
			         <input class="form-control" type="text" name="valor" id="valor" value="">
			 </div>
    </div>
    

<?php
   }
?>

<form method="post" action="mochila1.php" name="capacidad" id="capacidad" value="">
  <label for="valor" class="col-sm-4 control-label">Ingrese la capacidad de la mochila</label>
       <div class="col-sm-10">
                 <input class="form-control" type="text" name="capacidad" id="capacidad" value="">
       </div>

        
<input type="submit" name="Aceptar">

</body>
    
</html>