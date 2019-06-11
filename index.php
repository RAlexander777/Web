<!DOCTYPE html>
<html>
<head>

	<title>Problema de la Mochila</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
</head>
<body>
	<div class="col-sm-5">
    	<h3>Problema de la mochila</h3>
    </div>

    <form method="post" action="peso_valor.php" name="numero_objetos" id= "numero_objetos" value="numero_objetos">
         <div class="col-sm-5">
 		 Ingresa la cantidad de objetos
         <input type="text" name="numero_objetos" id="numero_objetos" value=""><br/>
         </div>
        
 		

 	<!--<form action="peso_valor.php" name="capacidad" id= "capacidad" value="capacidad">
 		Ingresa la capacidad de la mochila
 		<input type="text" name="capacidad" id="capacidad" value=""><br/>-->

 		<div class="col-sm-5">
 			<input type="submit" name="aceptar">
 		</div>

</body>
</html>