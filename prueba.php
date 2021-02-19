<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>destino.php</TITLE>
</HEAD>
<BODY>

  <?php 
    include 'conexion.php';
    
    echo "Nombre: " . $_GET["variable1"];
   
    
     
        
         $q = "SELECT * FROM herramienta1 WHERE nombre='".$_GET["variable1"]."'";
                                        $ejecutar_consulta = $conn->query($q);

    
                                        foreach ($ejecutar_consulta as $fila) 
                                        {
                                             echo '<br>';
                                             echo  $fila['valor1'];
                                            echo '<br>';
                                            echo  $fila['valor2'];
                                            echo '<br>';
                                            echo  $fila['valor3'];
                                            echo '<br>';
                                            echo  $fila['valor4'];
                                            echo '<br>';
                                            echo  $fila['valor5'];
                                            echo '<br>';
                                            echo  $fila['valor6'];
                                            echo '<br>';
                                            echo  $fila['total'];
                                   
                                        }
                                  
    ?> 
    
  <br>
 
 
</BODY>
</HTML>