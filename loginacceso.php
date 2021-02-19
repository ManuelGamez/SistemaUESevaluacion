<?php
session_start();
$_SESSION['usuario']=$_POST['usuario'];
$_SESSION['contra']=$_POST['contra'];
include 'conexion.php';
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

                                        $q = "SELECT * FROM login";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                  
                                   if($fila['usuario']==$_SESSION['usuario']&&$fila['password']==$_SESSION['contra'])
                                   {
                                       echo '<script> location.href="tables.php" </script>';
                                     
                                   }
                                            else
                                            {
                                                echo '  <div class="alert alert-error alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Error!</h4>
										Usted no poseé permisos especiales 
									</div>
                                    
                                    <a type="button"  href="index.html"class="btn btn-large btn-block btn-success">Regresar menú principal</a>
                                    ';
                                            }
                                        
                                        }
                                            echo '</body></html>';
 
?>
    
              
                

         
