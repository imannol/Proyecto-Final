<?php 
include 'connect_db.php';

  if (empty($_GET['id'])==false) 
  { 

    $id = $_GET['id']; 
     echo '<script>("'.$id.'")</script>';
    $sqlmate="DELETE FROM fichaje WHERE id='$id'";  
    $resborrar=mysqli_query($mysqli,$sqlmate);
    echo '<script>("'.$sqlmate.'")</script>';
         
   echo '<script>alert("REGISTRO ELIMINADO CORRECTAMENTE")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='alta_fichas.php'</script>";
  } 
  else 
  { 
    echo '<script>alert("EL REGISTRO NO SE ELIMINO")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='principal.php'</script>";
  } 
?>