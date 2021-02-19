<?php
session_start();
include 'conexion.php';
$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['apellido']=$_POST['apellido'];
$_SESSION['unidad']=$_POST['unidad'];
$_SESSION['cargo']=$_POST['cargo'];
$_SESSION['codigo']=strtolower($_POST['codigo']);
$bandera=0;
 echo '
 <!DOCTYPE html>
<html>   <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      
    
    <body>
 ';

                                        $q = "SELECT * FROM herramienta2";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                  
                                   if($fila['codigo']==$_SESSION['codigo'])
                                   {
                                       $bandera=1;
                                     echo '  <div class="alert alert-error alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Error!</h4>
										Usted ya realizo esta evaluación, solo se permite un intento por empleado
									</div>
                                    
                                    <a type="button"  href="index.html"class="btn btn-large btn-block btn-success">Regresar menú principal</a>
                                    ';
                                   }
                                        
                                        }
                                           

echo '</body></html>';
 if($bandera==0)
                                            {
                                                echo '<script> location.href="form2.html" </script>';
                                            }
?>
       
