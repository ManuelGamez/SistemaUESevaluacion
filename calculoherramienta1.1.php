<?php 
session_start();
include 'conexion.php';
error_reporting(E_ALL ^ E_NOTICE);

$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['apellido']=$_POST['apellido'];
$_SESSION['unidad']=$_POST['unidad'];
$_SESSION['cargo']=$_POST['cargo'];
$_SESSION['codigo']=strtolower($_POST['codigo']);

                    $numero1 = $_POST['color'];
                    $numero2 = $_POST['color1'];
                    $numero3 = $_POST['color2'];
                    $numero4 = $_POST['color3'];
                   
                    $numero5 = $_POST['colors'];
                    $numero6 = $_POST['colors1'];
                    $numero7 = $_POST['colors2'];
                    $numero8 = $_POST['colors3'];

                    $numero9 = $_POST['colorss'];
                    $numero10 = $_POST['colorss1'];
                    $numero11 = $_POST['colorss2'];
                    $numero12 = $_POST['colorss3'];
                    $numero13 = $_POST['colorsss'];
                    $numero14 = $_POST['colorsss1'];
                    $numero15 = $_POST['colorsss2'];
                    $numero16 = $_POST['colorsss3'];
  
                    $numero17 = $_POST['colorssss'];
                    $numero18 = $_POST['colorssss1'];
                    $numero19 = $_POST['colorssss2'];
                    $numero20 = $_POST['colorssss3'];
   
                    $numero21 = $_POST['seis1'];
                    $numero22 = $_POST['seis2'];
                    $numero23 = $_POST['seis3'];
                    $numero24 = $_POST['seis4'];
switch($numero1)
{
    case 1:
         $valor=0.0;
        break;
    case 2:
        $valor=0.013;
        break;
    case 3:
         $valor=0.025;        
        break;
    case 4:
         $valor=0.038;
        break;
    case 5:
        $valor=0.05;
        break;
}
                    switch($numero2)
{
    case 1:
           $valor2=0.0;
        break;
    case 2:
        $valor2=0.008;
        break;
    case 3:
         $valor2=0.015;   
        break;
    case 4:
          $valor2=0.023;
        break;
    case 5:
        $valor2=0.03;
        break;
}
                        switch($numero3)
{
    case 1:
           $valor3=0.0;
        break;
    case 2:
        $valor3=0.018;
        break;
    case 3:
         $valor3=0.035;  
        break;
    case 4:
          $valor3=0.053;
        break;
    case 5:
         $valor3=0.07;
        break;
}
      
                    switch($numero4)
{
    case 1:
            $valor4=0.0;
        break;
    case 2:
        $valor4=0.013;
        break;
    case 3:
         $valor4=0.025;  
        break;
    case 4:
          $valor4=0.038;
        break;
    case 5:
        $valor4=0.05;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero5)
{
    case 1:
         $valors=0.0;
        break;
    case 2:
        $valors=0.013;
        break;
    case 3:
         $valors=0.025;        
        break;
    case 4:
         $valors=0.038;
        break;
    case 5:
        $valors=0.05;
        break;
}
                    switch($numero6)
{
    case 1:
           $valors2=0.0;
        break;
    case 2:
        $valors2=0.01;
        break;
    case 3:
         $valors2=0.02;   
        break;
    case 4:
          $valors2=0.03;
        break;
    case 5:
        $valors2=0.04;
        break;
}
                        switch($numero7)
{
    case 1:
           $valors3=0.0;
        break;
    case 2:
        $valors3=0.008;
        break;
    case 3:
         $valors3=0.015;  
        break;
    case 4:
          $valors3=0.023;
        break;
    case 5:
         $valors3=0.03;
        break;
}
      
                    switch($numero8)
{
    case 1:
            $valors4=0.0;
        break;
    case 2:
        $valors4=0.008;
        break;
    case 3:
         $valors4=0.015;  
        break;
    case 4:
          $valors4=0.023;
        break;
    case 5:
        $valors4=0.03;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero9)
{
    case 1:
         $valorss=0.0;
        break;
    case 2:
        $valorss=0.003;
        break;
    case 3:
         $valorss=0.005;        
        break;
    case 4:
         $valorss=0.008;
        break;
    case 5:
        $valorss=0.01;
        break;
}
                    switch($numero10)
{
    case 1:
           $valorss2=0.0;
        break;
    case 2:
        $valorss2=0.008;
        break;
    case 3:
         $valorss2=0.015;   
        break;
    case 4:
          $valorss2=0.023;
        break;
    case 5:
        $valorss2=0.03;
        break;
}
                        switch($numero11)
{
    case 1:
           $valorss3=0.0;
        break;
    case 2:
        $valorss3=0.005;
        break;
    case 3:
         $valorss3=0.01;  
        break;
    case 4:
          $valorss3=0.015;
        break;
    case 5:
         $valorss3=0.02;
        break;
}
      
                    switch($numero12)
{
    case 1:
            $valorss4=0.0;
        break;
    case 2:
        $valorss4=0.01;
        break;
    case 3:
         $valorss4=0.02;  
        break;
    case 4:
          $valorss4=0.03;
        break;
    case 5:
        $valorss4=0.04;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero13)
{
    case 1:
         $valorsss=0.0;
        break;
    case 2:
        $valorsss=0.008;
        break;
    case 3:
         $valorsss=0.015;        
        break;
    case 4:
         $valorsss=0.023;
        break;
    case 5:
        $valorsss=0.03;
        break;
}
                    switch($numero14)
{
    case 1:
           $valorsss2=0.0;
        break;
    case 2:
        $valorsss2=0.005;
        break;
    case 3:
         $valorsss2=0.01;   
        break;
    case 4:
          $valorsss2=0.015;
        break;
    case 5:
        $valorsss2=0.02;
        break;
}
                        switch($numero15)
{
    case 1:
           $valorsss3=0.0;
        break;
    case 2:
        $valorsss3=0.006;
        break;
    case 3:
         $valorsss3=0.013;  
        break;
    case 4:
          $valorsss3=0.019;
        break;
    case 5:
         $valorsss3=0.025;
        break;
}
      
                    switch($numero16)
{
    case 1:
            $valorsss4=0.0;
        break;
    case 2:
        $valorsss4=0.006;
        break;
    case 3:
         $valorsss4=0.013;  
        break;
    case 4:
          $valorsss4=0.019;
        break;
    case 5:
        $valorsss4=0.025;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero17)
{
    case 1:
         $valorssss=0.0;
        break;
    case 2:
        $valorssss=0.013;
        break;
    case 3:
         $valorssss=0.025;        
        break;
    case 4:
         $valorssss=0.038;
        break;
    case 5:
        $valorssss=0.05;
        break;
}
                    switch($numero18)
{
    case 1:
           $valorssss2=0.0;
        break;
    case 2:
        $valorssss2=0.018;
        break;
    case 3:
         $valorssss2=0.035;   
        break;
    case 4:
          $valorssss2=0.053;
        break;
    case 5:
        $valorssss2=0.07;
        break;
}
                        switch($numero19)
{
    case 1:
           $valorssss3=0.0;
        break;
    case 2:
        $valorssss3=0.02;
        break;
    case 3:
         $valorssss3=0.04;  
        break;
    case 4:
          $valorssss3=0.06;
        break;
    case 5:
         $valorssss3=0.08;
        break;
}
      
                    switch($numero20)
{
    case 1:
            $valorssss4=0.0;
        break;
    case 2:
        $valorssss4=0.025;
        break;
    case 3:
         $valorssss4=0.05;  
        break;
    case 4:
          $valorssss4=0.075;
        break;
    case 5:
        $valorssss4=0.1;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero21)
{
    case 1:
         $valorsssss=0.0;
        break;
    case 2:
        $valorsssss=0.01;
        break;
    case 3:
         $valorsssss=0.02;        
        break;
    case 4:
         $valorsssss=0.03;
        break;
    case 5:
        $valorsssss=0.04;
        break;
}
                    switch($numero22)
{
    case 1:
           $valorsssss2=0.0;
        break;
    case 2:
        $valorsssss2=0.013;
        break;
    case 3:
         $valorsssss2=0.025;   
        break;
    case 4:
          $valorsssss2=0.038;
        break;
    case 5:
        $valorsssss2=0.05;
        break;
}
                        switch($numero23)
{
    case 1:
           $valorsssss3=0.0;
        break;
    case 2:
        $valorsssss3=0.008;
        break;
    case 3:
         $valorsssss3=0.015;  
        break;
    case 4:
          $valorsssss3=0.023;
        break;
    case 5:
         $valorsssss3=0.03;
        break;
}
      
                    switch($numero24)
{
    case 1:
            $valorsssss4=0.0;
        break;
    case 2:
        $valorsssss4=0.008;
        break;
    case 3:
         $valorsssss4=0.015;  
        break;
    case 4:
          $valorsssss4=0.023;
        break;
    case 5:
        $valorsssss4=0.03;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$total=$valor+$valor2+$valor3+$valor4;
$total1=$valors+$valors2+$valors3+$valors4;
$total2=$valorss+$valorss2+$valorss3+$valorss4;
$total3=$valorsss+$valorsss2+$valorsss3+$valorsss4;
$total4=$valorssss+$valorssss2+$valorssss3+$valorssss4;
$total5=$valorsssss+$valorsssss2+$valorsssss3+$valorsssss4;
$dato1= ($total*10);
$dato2= ($total1*10);
$dato3= ($total2*10);
$dato4= ($total3*10);
$dato5= ($total4*10);
$dato6= ($total5*10);
$resultado=$dato1+$dato2+$dato3+$dato4+$dato5+$dato6;
$nombre= $_SESSION['nombre'];
$apellido= $_SESSION['apellido']; 
$unidad= $_SESSION['unidad'];
$cargo= $_SESSION['cargo'];
$codigo=$_SESSION['codigo'];

 $insertar = "INSERT INTO herramienta1( nombre, apellido, unidad,cargo,codigo,valor1,valor2,valor3,valor4,valor5,valor6,total) VALUES ('$nombre','$apellido','$unidad','$cargo','$codigo','$dato1','$dato2','$dato3','$dato4','$dato5','$dato6','$resultado')";
$ejecutar_insertar = $conn->query($insertar);
if ($ejecutar_insertar) {
                echo '<script> location.href="index.html" </script>';
            }
            else {
                echo "<br>Error: EL CODIGO DEL EMPLEADO DEBE SER DIFERENTE, NOSE PERMITE CODIGO REPETIDO CAMBIARLO PORFAVOR <br>";
            }
?>
              
                

        
