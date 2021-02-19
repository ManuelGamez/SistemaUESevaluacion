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
  
                    
switch($numero1)
{
    case 1:
         $valor=0.0;
        break;
    case 2:
        $valor=0.018;
        break;
    case 3:
         $valor=0.035;        
        break;
    case 4:
         $valor=0.053;
        break;
    case 5:
        $valor=0.07;
        break;
}
                    switch($numero2)
{
    case 1:
           $valor2=0.0;
        break;
    case 2:
        $valor2=0.018;
        break;
    case 3:
         $valor2=0.035;   
        break;
    case 4:
          $valor2=0.053;
        break;
    case 5:
        $valor2=0.07;
        break;
}
                        switch($numero3)
{
    case 1:
           $valor3=0.0;
        break;
    case 2:
        $valor3=0.025;
        break;
    case 3:
         $valor3=0.05;  
        break;
    case 4:
          $valor3=0.075;
        break;
    case 5:
         $valor3=0.1;
        break;
}
      
                    switch($numero4)
{
    case 1:
            $valor4=0.0;
        break;
    case 2:
        $valor4=0.015;
        break;
    case 3:
         $valor4=0.03;  
        break;
    case 4:
          $valor4=0.045;
        break;
    case 5:
        $valor4=0.06;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero5)
{
    case 1:
         $valors=0.0;
        break;
    case 2:
        $valors=0.018;
        break;
    case 3:
         $valors=0.035;        
        break;
    case 4:
         $valors=0.053;
        break;
    case 5:
        $valors=0.07;
        break;
}
                    switch($numero6)
{
    case 1:
           $valors2=0.0;
        break;
    case 2:
        $valors2=0.015;
        break;
    case 3:
         $valors2=0.03;   
        break;
    case 4:
          $valors2=0.045;
        break;
    case 5:
        $valors2=0.06;
        break;
}
                        switch($numero7)
{
    case 1:
           $valors3=0.0;
        break;
    case 2:
        $valors3=0.018;
        break;
    case 3:
         $valors3=0.035;  
        break;
    case 4:
          $valors3=0.053;
        break;
    case 5:
         $valors3=0.07;
        break;
}
      
                    switch($numero8)
{
    case 1:
            $valors4=0.0;
        break;
    case 2:
        $valors4=0.013;
        break;
    case 3:
         $valors4=0.025;  
        break;
    case 4:
          $valors4=0.038;
        break;
    case 5:
        $valors4=0.05;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero9)
{
    case 1:
         $valorss=0.0;
        break;
    case 2:
        $valorss=0.018;
        break;
    case 3:
         $valorss=0.035;        
        break;
    case 4:
         $valorss=0.053;
        break;
    case 5:
        $valorss=0.07;
        break;
}
                    switch($numero10)
{
    case 1:
           $valorss2=0.0;
        break;
    case 2:
        $valorss2=0.015;
        break;
    case 3:
         $valorss2=0.03;   
        break;
    case 4:
          $valorss2=0.045;
        break;
    case 5:
        $valorss2=0.06;
        break;
}
                        switch($numero11)
{
    case 1:
           $valorss3=0.0;
        break;
    case 2:
        $valorss3=0.016;
        break;
    case 3:
         $valorss3=0.033;  
        break;
    case 4:
          $valorss3=0.049;
        break;
    case 5:
         $valorss3=0.065;
        break;
}
      
                    switch($numero12)
{
    case 1:
            $valorss4=0.0;
        break;
    case 2:
        $valorss4=0.014;
        break;
    case 3:
         $valorss4=0.028;  
        break;
    case 4:
          $valorss4=0.041;
        break;
    case 5:
        $valorss4=0.055;
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
        $valorsss=0.015;
        break;
    case 3:
         $valorsss=0.03;        
        break;
    case 4:
         $valorsss=0.045;
        break;
    case 5:
        $valorsss=0.06;
        break;
}
                    switch($numero14)
{
    case 1:
           $valorsss2=0.0;
        break;
    case 2:
        $valorsss2=0.013;
        break;
    case 3:
         $valorsss2=0.025;   
        break;
    case 4:
          $valorsss2=0.038;
        break;
    case 5:
        $valorsss2=0.05;
        break;
}
                        switch($numero15)
{
    case 1:
           $valorsss3=0.0;
        break;
    case 2:
        $valorsss3=0.011;
        break;
    case 3:
         $valorsss3=0.023;  
        break;
    case 4:
          $valorsss3=0.034;
        break;
    case 5:
         $valorsss3=0.045;
        break;
}
      
                    switch($numero16)
{
    case 1:
            $valorsss4=0.0;
        break;
    case 2:
        $valorsss4=0.011;
        break;
    case 3:
         $valorsss4=0.023;  
        break;
    case 4:
          $valorsss4=0.034;
        break;
    case 5:
        $valorsss4=0.045;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$total=$valor+$valor2+$valor3+$valor4;
$total1=$valors+$valors2+$valors3+$valors4;
$total2=$valorss+$valorss2+$valorss3+$valorss4;
$total3=$valorsss+$valorsss2+$valorsss3+$valorsss4;

$dato1= ($total*10);
$dato2= ($total1*10);
$dato3= ($total2*10);
$dato4= ($total3*10);

$resultado=$dato1+$dato2+$dato3+$dato4;
$nombre= $_SESSION['nombre'];
$apellido= $_SESSION['apellido'];
$unidad= $_SESSION['unidad'];
$cargo= $_SESSION['cargo'];
$codigo=$_SESSION['codigo'];

 $insertar = "INSERT INTO herramienta2( nombre, apellido, unidad,cargo,codigo,valor1,valor2,valor3,valor4,total) VALUES ('$nombre','$apellido','$unidad','$cargo','$codigo','$dato1','$dato2','$dato3','$dato4','$resultado')";
$ejecutar_insertar = $conn->query($insertar);
if ($ejecutar_insertar) {
                echo '<script> location.href="index.html" </script>';
            }
            else {
                echo "<br>Error: EL CODIGO DEL EMPLEADO DEBE SER DIFERENTE, NOSE PERMITE CODIGO REPETIDO CAMBIARLO PORFAVOR <br>";
            }
?>
              
                

        
