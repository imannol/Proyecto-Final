<?php 
include 'connect_db.php';

  if (empty($_GET['id'])==false) 
  { 
    $id = $_GET['id']; 
 

    $sqlborrar="DELETE FROM cliente WHERE id_cliente ='$id'";  
    $resborrar=mysqli_query($mysqli,$sqlborrar);

   echo '<script>alert("REGISTRO ELIMINADO CORRECTAMENTE")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='alta_clientes.php'</script>";
  } 
  else 
  { 
    echo '<script>alert("EL REGISTRO NO SE ELIMINO")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='principal.php'</script>";
  } 
?>