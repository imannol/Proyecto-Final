<?php 
include 'connect_db.php';

if (empty($_GET['id'])==false) 
{ 

  $id = $_GET['id']; 
  
  $sqlejecutar="DELETE FROM dinero WHERE id_monto ='$id'";  
  $resborrar=mysqli_query($mysqli,$sqlejecutar);
  
  
  echo '<script>alert("REGISTRO ELIMINADO CORRECTAMENTE")</script> ';
            //header('Location: proyectos.php');
  echo "<script>location.href='alta_monto_fichas.php'</script>";
} 
else 
{ 
  echo '<script>alert("EL REGISTRO NO SE ELIMINO")</script> ';
            //header('Location: proyectos.php');
  echo "<script>location.href='alta_monto_fichas.php'</script>";
} 
?>