<!DOCTYPE html>
<html>
    
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Instrumentos Técnicos Administrativos</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
      <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>  <?php 
                                    include 'conexion.php';
                                    $q = "SELECT * FROM login";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                    echo $fila['nombre'];
                                    ?>
                                         
                                    <?php
                                        }?>  <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    
                                </ul>
                            </li>
                        </ul>
                         <ul class="nav">
                           
                            <li class="active">
                                 <img src="images/gricenter.jfif" width="40px" height="40px">
                            </li>
                       
                        </ul>
                        <ul class="nav">
                           
                            <li class="active">
                                <a  href="#"><i class="icon-home"></i></a>
                            </li>
                       
                        </ul>
                        
                        
                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                  <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.html" ><i class="icon-chevron-right"></i> Inicio</a>
                        </li> 
                        <li  >
                            <a href="form.html"><i class="icon-chevron-right"></i>Administración del conocimiento</a>
                        </li>
                        <li >
                            <a href="form2.html"><i class="icon-chevron-right"></i>Dirección del conocimiento</a>
                        </li>
                        <li >
                            <a href="form3.html"><i class="icon-chevron-right"></i>Liderazgo del conocimiento</a>
                        </li>
                        <li >
                            <a href="form4.html"><i class="icon-chevron-right"></i>Gestión del conocimiento </a>
                        </li>
                        <li>
                            <a href="form5.html"><i class="icon-chevron-right"></i>Gerencia del conocimiento</a>
                        </li>
                       
                                <li  class="active">
                            <a href="login.html"><i class="icon-chevron-right"></i>Resultados de evaluaciones</a>
                                    </li>
                       
                        
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Administración del conocimiento <th>conocimiento</th> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
						                  <th>Nombres</th>
						                  <th>Apellidos</th>
						                  <th>Unidad</th>
                                             <th>Cargo</th>
                                             <th>Codigo</th>
                                             <th>Puntuacion total</th>
                                           
						                </tr>
						              </thead>
						              <tbody>
                                          
                                          <tr>
                                              <?php
                                           $contador1=0;   
                                                $sumador=0;
                                    include 'conexion.php';

                                        $q = "SELECT * FROM herramienta1";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                            $sumador=$sumador+1;
                                   echo '<tr>';
                                    echo '<td>'. $fila['nombre'].'</td>';
                                    echo '<td>'.$fila['apellido'].'</td>';
                                    echo '<td>'.$fila['unidad'].'</td>';
                                    echo '<td>'.$fila['cargo'].'</td>';
                                    echo '<td>'.$fila['codigo'].'</td>';
                                    echo '<td>'.$fila['total'].'</td>';
                                    
                                    echo '</tr>';
                                            $contador1=$fila['total']+$contador1;
                                        }	$foo=($contador1/$sumador);
                                        echo '<tr> <td> NOTA GLOBAL  :  '.number_format((float)$foo, 2, '.', '').'</td> </tr>';
                                             ?>
                                              <tr>
                                          
                                          </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Dirección del conocimiento</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						               <tr>
						                   <th>Nombres</th>
						                  <th>Apellidos</th>
						                  <th>Unidad</th>
                                             <th>Cargo</th>
                                             <th>Codigo</th>
                                             <th>Puntuacion total</th>
						                </tr>
						              </thead>
						              <tbody>
                                          
                                          <tr>
                                              <?php
                                              
                                           $contador2=0;  
                                              $sumador2=0;
                                    include 'conexion.php';

                                        $q = "SELECT * FROM herramienta2";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                             $sumador2=$sumador2+1;
                                   echo '<tr>';
                                    echo '<td>'. $fila['nombre'].'</td>';
                                    echo '<td>'.$fila['apellido'].'</td>';
                                    echo '<td>'.$fila['unidad'].'</td>';
                                    echo '<td>'.$fila['cargo'].'</td>';
                                    echo '<td>'.$fila['codigo'].'</td>';
                                    echo '<td>'.$fila['total'].'</td>';
                                      $contador2=$contador2+$fila['total'];
                                    echo '</tr>';
                                        }	$foo2=($contador2/$sumador2);
                                        echo '<tr> <td> NOTA GLOBAL  :  '.number_format((float)$foo2, 2, '.', '').'</td> </tr>';
                                             ?>
                                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Liderazgo del conocimiento</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						               <tr>
						                   <th>Nombres</th>
						                  <th>Apellidos</th>
						                  <th>Unidad</th>
                                             <th>Cargo</th>
                                             <th>Codigo</th>
                                             <th>Puntuacion total</th>
						                </tr>
						              </thead>
						              <tbody>
                                          
                                          <tr>
                                              <?php
                                              $contador3=0;
                                                $sumador3=0;
                                    include 'conexion.php';

                                        $q = "SELECT * FROM herramienta3";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                            $sumador3=$sumador3+1;
                                   echo '<tr>';
                                    echo '<td>'. $fila['nombre'].'</td>';
                                    echo '<td>'.$fila['apellido'].'</td>';
                                    echo '<td>'.$fila['unidad'].'</td>';
                                    echo '<td>'.$fila['cargo'].'</td>';
                                    echo '<td>'.$fila['codigo'].'</td>';
                                    echo '<td>'.$fila['total'].'</td>';
                                     $contador3=$contador3+$fila['total'];
                                    echo '</tr>';
                                        }	$foo3=($contador3/$sumador3);
                                        echo '<tr> <td> NOTA GLOBAL  :  '.number_format((float)$foo3, 2, '.', '').'</td> </tr>';
                                             ?>
                                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                               <div class="muted pull-left">Gestión del conocimiento</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						               <tr>
						                   <th>Nombres</th>
						                  <th>Apellidos</th>
						                  <th>Unidad</th>
                                             <th>Cargo</th>
                                             <th>Codigo</th>
                                             <th>Puntuacion total</th>
						                </tr>
						              </thead>
						              <tbody>
                                          
                                          <tr>
                                              <?php
                                              
                                                $contador4=0;
                                              $sumador4=0;
                                    include 'conexion.php';

                                        $q = "SELECT * FROM herramienta4";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                            $sumador4=$sumador4+1;
                                   echo '<tr>';
                                    echo '<td>'. $fila['nombre'].'</td>';
                                    echo '<td>'.$fila['apellido'].'</td>';
                                    echo '<td>'.$fila['unidad'].'</td>';
                                    echo '<td>'.$fila['cargo'].'</td>';
                                    echo '<td>'.$fila['codigo'].'</td>';
                                    echo '<td>'.$fila['total'].'</td>';
                                     $contador4=$contador4+$fila['total'];
                                    echo '</tr>';
                                        }	$foo4=($contador4/$sumador4);
                                        echo '<tr> <td> NOTA GLOBAL  :  '.number_format((float)$foo4, 2, '.', '').'</td> </tr>';
                                             ?>
                                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                               <div class="muted pull-left">Gerencia del conocimiento</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
						                   <th>Nombres</th>
						                  <th>Apellidos</th>
						                  <th>Unidad</th>
                                             <th>Cargo</th>
                                             <th>Codigo</th>
                                             <th>Puntuacion total</th>
						                </tr>
						              </thead>
						              <tbody>
                                          
                                          <tr>
                                              <?php
                                              $sumador5=0;
                                                $contador5=0;
                                    include 'conexion.php';

                                        $q = "SELECT * FROM herramienta5";
                                        $ejecutar_consulta = $conn->query($q);
                                                                                
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                            $sumador5=$sumador5+1;
                                   echo '<tr>';
                                    echo '<td>'. $fila['nombre'].'</td>';
                                    echo '<td>'.$fila['apellido'].'</td>';
                                    echo '<td>'.$fila['unidad'].'</td>';
                                    echo '<td>'.$fila['cargo'].'</td>';
                                    echo '<td>'.$fila['codigo'].'</td>';
                                    echo '<td>'.$fila['total'].'</td>';
                                     $contador5=$contador5+$fila['total'];
                                    echo '</tr>';
                                        }	$foo5=($contador5/$sumador5);
                                        echo '<tr> <td> NOTA GLOBAL  :  '.number_format((float)$foo5, 2, '.', '').'</td> </tr>';
                                             ?>
                                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Derechos Reservados GT02 Equipo 4 administración de personal III </p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>