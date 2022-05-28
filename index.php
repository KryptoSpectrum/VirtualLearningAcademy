<?php 

	$conexion=mysqli_connect('localhost','root','','vladb');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">
       <nav>
           <img src="img/vlamerica-logo.png" alt="">
       </nav>
       <main>
          <div class="container-fluid mt-3">
            <h1>Lista de cursos disponibles</h1>
            
            <div class="row">

<!--Curso 1-->            
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 1";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                    <img class="card-img-top" src="img/flag2.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curIngles.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 2-->    
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 2";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/compras-linea-concepto-aplicacion-movil-digital_1375-3058.webp" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curMarketing.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 3-->   
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 3";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/portugiesisch-600x400-09.webp" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curPortuges.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 4--> 
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 4";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/logotipo-microsoft-excel.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curExcel.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 5--> 
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 5";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/Logo-Linux--625x330.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curLinux.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 6--> 
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 6";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/aws_logo_smile_1200x630.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curAWS.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 7--> 
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 7";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/Python-Symbol.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curPython.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>
<!--Curso 8--> 
            <?php 
		        $sql="SELECT * from catalogo WHERE IDCatalogoClase = 8";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>

            <div class="col-sm-3 p-3 text-black">
                <div class="card">
                <img class="card-img-top" src="img/sql-server-logo-1022958.png" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $mostrar['NombreCurso'] ?></h4>
                      <p class="card-text">&raquo;&nbsp;<?php echo $mostrar['FechaInicio'] ?><br>&raquo;&nbsp;<?php echo $mostrar['Descripcion'] ?><br>&raquo;&nbsp;<strong>$<?php echo $mostrar['Costo'] ?></strong></p>
                      <a href="curSQL.php" class="btn btn-primary" target="_blank">+INFO</a>
                    </div>
                  </div>
                </div>
	        <?php 
	            }
	        ?>

        </div>
    </div>

       </main>
       <div id="sidebar">
           <ul>
             <li><h5>Clases en vivo (no pre-grabadas)</h5></li>
             <li><h5>Opciones flexibles de pago</h5></li>
             <li><h5>Ayuda gratis para buscar empleo</h5></li>
             <li><h5>Consigue el empleo de tus sueños en 4-8 meses</h5></li>
             <li><h5>Tutorías ilimitadas</h5></li>
             <li><h5>Certificados Oficiales</h5></li>
           </ul>
        
        
       </div>

       <div id="content1">Content 1</div>
       <div id="content2">Content 2</div>
       <div id="content3">Content 3</div>
       <footer>Footer</footer>

   </div>
    
</body>
</html>