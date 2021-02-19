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

                    $numero25 = $_POST['seis5'];
                    $numero26 = $_POST['seis6'];
                    $numero27 = $_POST['seis7'];
                    $numero28 = $_POST['seis77'];
                    $numero29 = $_POST['seis8'];

                    $numero30 = $_POST['seis9'];
                    $numero31 = $_POST['seis10'];
                    $numero32 = $_POST['seis11'];
                    $numero33 = $_POST['seis12'];

                    $numero34 = $_POST['seis13'];
                    $numero35 = $_POST['seis14'];
                    $numero36 = $_POST['seis15'];
                    $numero37 = $_POST['seis16'];

                    $numero38 = $_POST['seis17'];
                    $numero39 = $_POST['seis18'];
                    $numero40 = $_POST['seis19'];
                   
switch($numero1)
{
    case 1:
         $valor=0.0;
        break;
    case 2:
        $valor=0.01;
        break;
    case 3:
         $valor=0.02;        
        break;
    case 4:
         $valor=0.03;
        break;
    case 5:
        $valor=0.04;
        break;
}
                    switch($numero2)
{
    case 1:
           $valor2=0.0;
        break;
    case 2:
        $valor2=0.009;
        break;
    case 3:
         $valor2=0.018;   
        break;
    case 4:
          $valor2=0.026;
        break;
    case 5:
        $valor2=0.035;
        break;
}
                        switch($numero3)
{
    case 1:
           $valor3=0.0;
        break;
    case 2:
        $valor3=0.01;
        break;
    case 3:
         $valor3=0.02;  
        break;
    case 4:
          $valor3=0.03;
        break;
    case 5:
         $valor3=0.04;
        break;
}
      
                    switch($numero4)
{
    case 1:
            $valor4=0.0;
        break;
    case 2:
        $valor4=0.009;
        break;
    case 3:
         $valor4=0.018;  
        break;
    case 4:
          $valor4=0.026;
        break;
    case 5:
        $valor4=0.035;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero5)
{
    case 1:
         $valors=0.0;
        break;
    case 2:
        $valors=0.005;
        break;
    case 3:
         $valors=0.01;        
        break;
    case 4:
         $valors=0.015;
        break;
    case 5:
        $valors=0.02;
        break;
}
                    switch($numero6)
{
    case 1:
           $valors2=0.0;
        break;
    case 2:
        $valors2=0.009;
        break;
    case 3:
         $valors2=0.018;   
        break;
    case 4:
          $valors2=0.026;
        break;
    case 5:
        $valors2=0.035;
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
        $valors4=0.004;
        break;
    case 3:
         $valors4=0.008;  
        break;
    case 4:
          $valors4=0.011;
        break;
    case 5:
        $valors4=0.015;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero9)
{
    case 1:
         $valorss=0.0;
        break;
    case 2:
        $valorss=0.005;
        break;
    case 3:
         $valorss=0.01;        
        break;
    case 4:
         $valorss=0.015;
        break;
    case 5:
        $valorss=0.02;
        break;
}
                    switch($numero10)
{
    case 1:
           $valorss2=0.0;
        break;
    case 2:
        $valorss2=0.01;
        break;
    case 3:
         $valorss2=0.02;   
        break;
    case 4:
          $valorss2=0.03;
        break;
    case 5:
        $valorss2=0.04;
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
        $valorss4=0.005;
        break;
    case 3:
         $valorss4=0.01;  
        break;
    case 4:
          $valorss4=0.015;
        break;
    case 5:
        $valorss4=0.02;
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
        $valorsss=0.004;
        break;
    case 3:
         $valorsss=0.008;        
        break;
    case 4:
         $valorsss=0.011;
        break;
    case 5:
        $valorsss=0.015;
        break;
}
                    switch($numero14)
{
    case 1:
           $valorsss2=0.0;
        break;
    case 2:
        $valorsss2=0.003;
        break;
    case 3:
         $valorsss2=0.005;   
        break;
    case 4:
          $valorsss2=0.008;
        break;
    case 5:
        $valorsss2=0.01;
        break;
}
                        switch($numero15)
{
    case 1:
           $valorsss3=0.0;
        break;
    case 2:
        $valorsss3=0.004;
        break;
    case 3:
         $valorsss3=0.008;  
        break;
    case 4:
          $valorsss3=0.011;
        break;
    case 5:
         $valorsss3=0.015;
        break;
}
      
                    switch($numero16)
{
    case 1:
            $valorsss4=0.0;
        break;
    case 2:
        $valorsss4=0.003;
        break;
    case 3:
         $valorsss4=0.005;  
        break;
    case 4:
          $valorsss4=0.008;
        break;
    case 5:
        $valorsss4=0.01;
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
        $valorssss=0.005;
        break;
    case 3:
         $valorssss=0.01;        
        break;
    case 4:
         $valorssss=0.015;
        break;
    case 5:
        $valorssss=0.02;
        break;
}
                    switch($numero18)
{
    case 1:
           $valorssss2=0.0;
        break;
    case 2:
        $valorssss2=0.006;
        break;
    case 3:
         $valorssss2=0.013;   
        break;
    case 4:
          $valorssss2=0.019;
        break;
    case 5:
        $valorssss2=0.025;
        break;
}
                        switch($numero19)
{
    case 1:
           $valorssss3=0.0;
        break;
    case 2:
        $valorssss3=0.01;
        break;
    case 3:
         $valorssss3=0.02;  
        break;
    case 4:
          $valorssss3=0.03;
        break;
    case 5:
         $valorssss3=0.04;
        break;
}
      
                    switch($numero20)
{
    case 1:
            $valorssss4=0.0;
        break;
    case 2:
        $valorssss4=0.004;
        break;
    case 3:
         $valorssss4=0.008;  
        break;
    case 4:
          $valorssss4=0.011;
        break;
    case 5:
        $valorssss4=0.015;
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
        $valorsssss=0.011;
        break;
    case 3:
         $valorsssss=0.023;        
        break;
    case 4:
         $valorsssss=0.034;
        break;
    case 5:
        $valorsssss=0.045;
        break;
}
                    switch($numero22)
{
    case 1:
           $valorsssss2=0.0;
        break;
    case 2:
        $valorsssss2=0.006;
        break;
    case 3:
         $valorsssss2=0.013;   
        break;
    case 4:
          $valorsssss2=0.019;
        break;
    case 5:
        $valorsssss2=0.025;
        break;
}
                        switch($numero23)
{
    case 1:
           $valorsssss3=0.0;
        break;
    case 2:
        $valorsssss3=0.009;
        break;
    case 3:
         $valorsssss3=0.018;  
        break;
    case 4:
          $valorsssss3=0.026;
        break;
    case 5:
         $valorsssss3=0.035;
        break;
}
      
                    switch($numero24)
{
    case 1:
            $valorsssss4=0.0;
        break;
    case 2:
        $valorsssss4=0.011;
        break;
    case 3:
         $valorsssss4=0.023;  
        break;
    case 4:
          $valorsssss4=0.034;
        break;
    case 5:
        $valorsssss4=0.045;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero25)
{
    case 1:
         $valorssssss=0.0;
        break;
    case 2:
        $valorssssss=0.004;
        break;
    case 3:
         $valorssssss=0.008;        
        break;
    case 4:
         $valorssssss=0.011;
        break;
    case 5:
        $valorssssss=0.015;
        break;
}
                    switch($numero26)
{
    case 1:
           $valorssssss2=0.0;
        break;
    case 2:
        $valorssssss2=0.008;
        break;
    case 3:
         $valorssssss2=0.015;   
        break;
    case 4:
          $valorssssss2=0.023;
        break;
    case 5:
        $valorssssss2=0.03;
        break;
}
                        switch($numero27)
{
    case 1:
           $valorssssss3=0.0;
        break;
    case 2:
        $valorssssss3=0.005;
        break;
    case 3:
         $valorssssss3=0.01;  
        break;
    case 4:
          $valorssssss3=0.015;
        break;
    case 5:
         $valorssssss3=0.02;
        break;
}
      
                    switch($numero28)
{
    case 1:
            $valorssssss4=0.0;
        break;
    case 2:
        $valorssssss4=0.009;
        break;
    case 3:
         $valorssssss4=0.018;  
        break;
    case 4:
          $valorssssss4=0.026;
        break;
    case 5:
        $valorssssss4=0.035;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero29)
{
    case 1:
         $valorsssssss=0.0;
        break;
    case 2:
        $valorsssssss=0.001;
        break;
    case 3:
         $valorsssssss=0.003;        
        break;
    case 4:
         $valorsssssss=0.004;
        break;
    case 5:
        $valorsssssss=0.005;
        break;
}
                    switch($numero30)
{
    case 1:
           $valorsssssss2=0.0;
        break;
    case 2:
        $valorsssssss2=0.004;
        break;
    case 3:
         $valorsssssss2=0.008;   
        break;
    case 4:
          $valorsssssss2=0.011;
        break;
    case 5:
        $valorsssssss2=0.015;
        break;
}
                        switch($numero31)
{
    case 1:
           $valorsssssss3=0.0;
        break;
    case 2:
        $valorsssssss3=0.005;
        break;
    case 3:
         $valorsssssss3=0.01;  
        break;
    case 4:
          $valorsssssss3=0.015;
        break;
    case 5:
         $valorsssssss3=0.02;
        break;
}
      
                    switch($numero32)
{
    case 1:
            $valorsssssss4=0.0;
        break;
    case 2:
        $valorsssssss4=0.003;
        break;
    case 3:
         $valorsssssss4=0.005;  
        break;
    case 4:
          $valorsssssss4=0.008;
        break;
    case 5:
        $valorsssssss4=0.01;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero33)
{
    case 1:
         $valorssssssss=0.0;
        break;
    case 2:
        $valorssssssss=0.004;
        break;
    case 3:
         $valorssssssss=0.008;        
        break;
    case 4:
         $valorssssssss=0.011;
        break;
    case 5:
        $valorssssssss=0.015;
        break;
}
                    switch($numero34)
{
    case 1:
           $valorssssssss2=0.0;
        break;
    case 2:
        $valorssssssss2=0.004;
        break;
    case 3:
         $valorssssssss2=0.008;   
        break;
    case 4:
          $valorssssssss2=0.011;
        break;
    case 5:
        $valorssssssss2=0.015;
        break;
}
                        switch($numero35)
{
    case 1:
           $valorssssssss3=0.0;
        break;
    case 2:
        $valorssssssss3=0.003;
        break;
    case 3:
         $valorssssssss3=0.005;  
        break;
    case 4:
          $valorssssssss3=0.008;
        break;
    case 5:
         $valorssssssss3=0.01;
        break;
}
      
                    switch($numero36)
{
    case 1:
            $valorssssssss4=0.0;
        break;
    case 2:
        $valorssssssss4=0.003;
        break;
    case 3:
         $valorssssssss4=0.005;  
        break;
    case 4:
          $valorssssssss4=0.008;
        break;
    case 5:
        $valorssssssss4=0.01;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
switch($numero37)
{
    case 1:
         $valorsssssssss=0.0;
        break;
    case 2:
        $valorsssssssss=0.009;
        break;
    case 3:
         $valorsssssssss=0.018;        
        break;
    case 4:
         $valorsssssssss=0.026;
        break;
    case 5:
        $valorsssssssss=0.035;
        break;
}
                    switch($numero38)
{
    case 1:
           $valorsssssssss2=0.0;
        break;
    case 2:
        $valorsssssssss2=0.01;
        break;
    case 3:
         $valorsssssssss2=0.02;   
        break;
    case 4:
          $valorsssssssss2=0.03;
        break;
    case 5:
        $valorsssssssss2=0.04;
        break;
}
                        switch($numero39)
{
    case 1:
           $valorsssssssss3=0.0;
        break;
    case 2:
        $valorsssssssss3=0.01;
        break;
    case 3:
         $valorsssssssss3=0.02;  
        break;
    case 4:
          $valorsssssssss3=0.03;
        break;
    case 5:
         $valorsssssssss3=0.04;
        break;
}
      
                    switch($numero40)
{
    case 1:
            $valorsssssssss4=0.0;
        break;
    case 2:
        $valorsssssssss4=0.009;
        break;
    case 3:
         $valorsssssssss4=0.018;  
        break;
    case 4:
          $valorsssssssss4=0.026;
        break;
    case 5:
        $valorsssssssss4=0.035;
        break;
}
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$total=$valor+$valor2+$valor3+$valor4;
$total1=$valors+$valors2+$valors3+$valors4;
$total2=$valorss+$valorss2+$valorss3+$valorss4;
$total3=$valorsss+$valorsss2+$valorsss3+$valorsss4;
$total4=$valorssss+$valorssss2+$valorssss3+$valorssss4;
$total5=$valorsssss+$valorsssss2+$valorsssss3+$valorsssss4;

$total6=$valorssssss+$valorssssss2+$valorssssss3+$valorssssss4;
$total7=$valorsssssss+$valorsssssss2+$valorsssssss3+$valorsssssss4;
$total8=$valorssssssss+$valorssssssss2+$valorssssssss3+$valorssssssss4;
$total9=$valorsssssssss+$valorsssssssss2+$valorsssssssss3+$valorsssssssss4;


$dato1= ($total*10);
$dato2= ($total1*10);
$dato3= ($total2*10);
$dato4= ($total3*10);
$dato5= ($total4*10);
$dato6= ($total5*10);
$dato7= ($total6*10);
$dato8= ($total7*10);
$dato9= ($total8*10);
$dato10= ($total9*10);
$resultado=$dato1+$dato2+$dato3+$dato4+$dato5+$dato6+$dato7+$dato8+$dato9+$dato10;
$nombre= $_SESSION['nombre'];
$apellido= $_SESSION['apellido'];
$unidad= $_SESSION['unidad'];
$cargo= $_SESSION['cargo'];
$codigo=$_SESSION['codigo'];

 $insertar = "INSERT INTO herramienta3( nombre, apellido, unidad,cargo,codigo,valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8,valor9,valor10,total) VALUES ('$nombre','$apellido','$unidad','$cargo','$codigo','$dato1','$dato2','$dato3','$dato4','$dato5','$dato6','$dato7','$dato8','$dato9','$dato10','$resultado')";
$ejecutar_insertar = $conn->query($insertar);
if ($ejecutar_insertar) {
                echo '<script> location.href="index.html" </script>';
            }
            else {
                echo "<br>Error: EL CODIGO DEL EMPLEADO DEBE SER DIFERENTE, NOSE PERMITE CODIGO REPETIDO CAMBIARLO PORFAVOR <br>";
            }
?>
              
                

        
