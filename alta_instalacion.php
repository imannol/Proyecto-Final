<?php
include 'include/menu.php';
?>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==1) {
  header("Location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Instalación.</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
  <div>
    <script type="text/javascript" src="vistas/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="vistas/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  

  <body>
    <html lang="en">
    <body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">


      <!--AQUI COMIENZA EL NOMBRE DEL CLIENTE -->
      

      <!doctype html>
      <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <title>Internet La Roca</title>
      </head>
      <body>

       <div class="wrapper">
        <nav id="sidebar">
          <div class="sidebar-header">
            <h3>Internet La Roca</h3>
          </div>

          <ul class="list-unstyled components">
            <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Inicio</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="alta_clientes.php">Clientes.</a>
                </li>
                <li>
                 <a href="alta_fichas.php">Fichas.</a>
               </li>
               <li>
                <a href="alta_instalacion.php">Día de instalación.</a>
              </li>
              <li>
                <a href="alta_monto_fichas.php">Cobranza.</a>
              </li>
            </ul> 
          </li>

        </nav>

        <div class="content">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fa fa-align-justify"></i> <span>Desplazar</span>
            </button>

            
            <!--<a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="inicio.php"><i class="fas fa-home"><font color="black" size="3">  Inicio</i></font><span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="alta_clientes.php"><i class="fas fa-user"><font color="black" size="3">  Clientes.</i></font></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="alta_fichas.php"><i class="fas fa-vcard"><font color="black" size="3"> Fichas.</i></font></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="alta_instalacion.php"><i class="fas fa-wrench"><font color="black" size="3"> Instalación.</i></font></a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="alta_monto_fichas.php"><i class="fas fa-hand-holding-usd"><font color="black" size="3"> Cobranza.</i></font></a>
                </li>
                
              </ul>
            </div>
          </nav>
          
          <br><br>
          <div class="container">
            <div class="jumbotron">
              <div class="container">
                <h1 class="display-4"><font face="Arial Black" size="18">Instalación y registro.</font></h1>

              </div>
            </div>
            <!--AQUI COMIENZA EL NOMBRE DEL CLIENTE -->
            <div class="container">
              <form accept-charset="utf-8" action="" method="POST">
                

               <input type="hidden" class="form-control" id="fecha" aria-describedby="id" placeholder="id" name="id" required>
               
               <!--AQUI COMIENZA EL APODO DEL CLIENTE -->
               <!--Div-->
               <div class="form-group col-6" >
                <label for="Día"> * Fecha del día en que se instalo la antena.</label>
                <input type="date" class="form-control" id="dia" aria-describedby="dia" placeholder="dia" name="dia" required>
                <small id="dia" class="form-text text-muted">Ingresé la fecha para su registro.</small></div>
                
                <div class="form-group col-md-6">
                  <label for="Antena">* Tipo de antena que se le dejo al cliente.</label>
                  <select name="antena" id="antena"   class="form-control" required>
                   <option >Seleccione...</option>
                   <option >TPLINK</option>
                   <option>CISCO TPLINK</option>
                   ?>
                 </select>
               </div>

               <div class="form-group col-md-6">
                 <label for="Localidad">* Nombre del cliente a quien se le instalara la antena.</label>
                 <select name="cliente" id="cliente"  class="form-control" required>
                   <option value="">Seleccione...</option>
                   <?php
                   include 'connect_db.php';

                   $sql=("SELECT id_cliente,nombre_cliente FROM cliente ORDER BY nombre_cliente");
                   $query=mysqli_query($mysqli,$sql);
                   while($arreglo=mysqli_fetch_assoc($query))
                   {
                    echo '<option value='.$arreglo["id_cliente"].'">'.$arreglo["nombre_cliente"].'</option>';
                  }
                  ?>
                </select>
              </div>
              
              <div class="col-3 mb-5"><button type="submit" class="btn btn-primary">Guardar.</button>
              </div>
            </form>
            
            <?php
// verificamos la conexion de la base de datos
            require_once('connect_db.php');
 //numero el cual recibe la condicion

            if(isset($_POST['id']))
            {
  //las variables de el formulario
              $id  = $_POST['id'];
              $dia = $_POST['dia'];
              $antena = $_POST['antena'];
              $cliente = $_POST['cliente'];

              
              
  //la estructura de la consulta, los datos deven ser los mismos de la base de datos y a las variables   
              $insertar = "INSERT INTO cobro (id,fecha_instalacion,tipo_antena,id_cliente) VALUES
              ('".$id."','".$dia."','".$antena."','".$cliente."')";

              $ejecutar=$mysqli->query($insertar);
   //metodo para insertar los registros
              if($ejecutar > 0)
              {
     //encaso de que la acción sea positiva tomara esta condición * u *
               echo "
               <!DOCTYPE html>
               <html lang='en'>
               <head>
               <meta charset='UTF-8'>
               <title>Document</title>
               </head>
               <body>
               <script type='text/javascript'>
               alert('Datos Guardados Correctamente')
               window.location='alta_instalacion.php';
               </script>
               </body>
               </html>
               ";
             }
             else
             {
      //en caso de que no tomara esta condicion :(
              echo "
              <!DOCTYPE html>
              <html lang='en'>
              <head>
              <meta charset='UTF-8'>
              <title></title>
              </head>
              <body>
              <script type='text/javascript'>
              alert('Datos No Guardados Correctamente')
              window.location='alta_instalacion.php';
              </script>
              </body>
              </html>
              ";
            }
          }
          ?>
          <div class="alert alert-secondary" role="alert">
            <div class="">
              <font face="Arial Black" size="6">Registro.</font>
            </div>
          </div>
          <table role="table">
            <thead role="rowgroup">
              <tr role="row">

                <div class="col-md- col-sm-6 col-xs-12">
                  <div class="container">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                         
                         
                         <th scope="col"> Día de instalación.</th>
                         <th scope="col"> Tipo de antena.</th>
                         <th scope="col">Nombre del cliente a quien se le instalo la antena.</th>
                         <th scope="col">Editar.</th>
                         <th scope="col">Eliminar.</th>
                       </tr>
                     </thead>
                     <tbody>
                      <?php
                      require("connect_db.php");
                      $sql=("SELECT id,fecha_instalacion,tipo_antena,nombre_cliente from cliente, cobro where cliente.id_cliente = cobro.id_cliente");
                      $query=mysqli_query($mysqli,$sql);
                      while($extraer=mysqli_fetch_array($query)){

                        echo "<tr class='success'>";
                        "$extraer[0]";
                        echo "<td>$extraer[1] </td>";
                        echo "<td>$extraer[2] </td>";
                        echo "<td>$extraer[3] </td>";
                        
                        
                        
                        
                        echo "<td><a href='actualizar_cobro.php?id=$extraer[0]'><button type='button' class='btn btn-warning'><i class='fas fa-edit'></i></button></td>";

                        echo "<td><a href='borrar_cobro.php?id=$extraer[0]'><button type='button' class='btn btn-danger'><i class='fas fa-trash'></i></button></td>";
                        echo "</tr>";
                      }

                      ?>    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
            <script>
              $(document).ready(function(){
                $('#sidebarCollapse').on('click',function(){
                  $('#sidebar').toggleClass('active');
                });
              });  
            </script>
            
            
            <style type="text/css">
              @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
              body{font-family: 'Poppins', sans-serif;
              background: #fafafa}
              p{font-family: 'Poppins', sans-serif;
              font-size: 1.1em;
              font-weight: 300;
              line-height: 1.7em;
              color: #999;
            }
            a,
            a:hover,
            a:focus{
              color: inherit;
              text-decoration: none;
              transition: all 0.3s;
            }
            .navbar{
              padding: 15px 10px;
              background: #fff;
              border: none;
              border-radius: 0;
              margin-bottom: 40px;
              box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
            }

            .navbar-btn{
              box-shadow: none;
              outline: none!important;
              border: none;
            }

            .line{
              width: 100%;
              height: 1px;
              border-bottom: 1px dashed #ddd;
            }

            .wrapper {
              display: flex;
              width: 100%;
              align-items: stretch;
            }
            #sidebar {
              min-width: 250px;
              max-width: 250px;
              background: #7386D5;
              color: #fff;
              transition: all 0.3s;
            }
            #sidebar.active{
              margin-left: -250px;
            }

            #sidebar .sidebar-header{
              padding: 20px;
              background: #6d7fcc;
            }
            #sidebar ul.components{
              padding: 20px 0px;
              border-bottom: 1px solid #47748b;
            }

            #sidebar ul p{
              padding: 10px;
              font-size: 1.1em;
              display: block;
            }

            #sidebar ul li a{
              padding: 10px;
              font-size: 1.1em;
              display: block;
            }
            #sidebar ul li a:hover {
              color: #7386D5;
              background: #fff;
            }

            #sidebar ul li.active>a,
            a[aria-expanded="true"] {
              color: #fff;
              background: #6d7fcc;
            }
            a[data-toggle="collapse"] {
              position: relative;
            }
            .dropdown-toggle::after {
              display: block;
              position: absolute;
              top: 50%;
              right: 20px;
              transform: translateY(-50%);
            }

            ul ul a {
              font-size: 0.9em !important;
              padding-left: 30px !important;
              background: #6d7fcc;
            }

            ul.CTAs {
              padding: 20px;
            }

            ul.CTAs a {
              text-align: center;
              font-size: 0.9em !important;
              display: block;
              border-radius: 5px;
              margin-bottom: 5px;
            }
            a.download{
              background: #fff;
              color: #7386D5;
            }
            a.article,
            a.article:hover {
              background: #6d7fcc !important;
              color: #fff !important;
            }

            #content {
              width: 100%;
              padding: 20px;
              min-height: 100vh;
              transition: all 0.3s;
            }

            @media(maz-width:768px){
              #sidebar{margin-left: -250px;}
              #sidebar.active{
                margin-left: 0px;
              }
              #sidebarCollapse span{
                display: none;
              }
            }
          </style>
        </body>
        </html>

