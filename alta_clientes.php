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
  <title>Alta Clientes.</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alta clientes</title>

  <!--Aqui esta el script para el buscador-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
     <script src="typeahead.min.js"></script>


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
                <a href="alta_instalacion.php">Día de instalción.</a>
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
          

       
          <div class="line"></div>
          <br>
           <div class="container">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4"><font face="Arial Black" size="18"> Alta clientes.</font></h1>
        </div>
      </div>

















<!-- VALIDAR FORMULARIO OJO -->

          <div class="line"></div>
          <br>
          <div class="container">
            <form onsubmit="return validarForm()" accept-charset="utf-8" action="" method="POST" >

              <input type="hidden" maxlength="45" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Luis Imannol" >

              <!--Div-->

              <div class="form-group col-6" >
                <label for="nombre">* Nombre.</label>
                <input type="text" maxlength="45" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Luis Imannol" name="nombre" required>
                <small id="nombre" class="form-text text-muted">Escriba el nombre del cliente.</small></div>
                <!--/Div-->
                <!--AQUI TERMINA EL NOMBRE DEL CLIENTE -->

                <!--AQUI COMIENZA EL APODO DEL CLIENTE -->
                <!--Div-->
                <div class="form-group col-6" >
                  <label for="Apodo">* Apodo.</label>
                  <input type="text" maxlength="45" class="form-control" id="apodo" aria-describedby="apodo" placeholder="Sicario" name="apodo" required>
                  <small id="apodo" class="form-text text-muted">Escriba el 
                  'apodo' del cliente.</small></div>
                  <!--/Div-->
                  <!--AQUI TERMINA EL APODO DEL CLIENTE -->


                  <!--AQUI COMIENZA TELEFONO DEL CLIENTE -->
                  <div class="form-group col-6" >
                    <label for="Telefono">* Teléfono.</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" onkeypress="return check(event)" placeholder="3251009246"  maxlength="10"  name="telefono" required>
                    <small class="form-text text-muted">Escriba el teléfono del cliente.</small></div>
                    <!--/Div-->
                    <!--AQUI TERMINA EL CELULAR DEL CLIENTE -->


                    <!--AQUI COMIENZA DOMICILIO DEL CLIENTE -->
                    <div class="form-group col-6" >
                      <label for="Domicilio">* Domicilio.</label>
                      <input type="text" class="form-control" id="domicilio" aria-describedby="domicilio" maxlength="45" placeholder="Guerrero y Campeche" name="domicilio" required>
                      <small id="domicilio" class="form-text text-muted">Escriba el domicilio del cliente.</small></div>
                      <!--/Div-->
                      <!--AQUI TERMINA EL DOMICILIO DEL CLIENTE -->



                      <!--AQUI COMIENZA IP DEL CLIENTE DEL CLIENTE -->
                      <div class="form-group col-6" >
                        <label for="IP">Ip del cliente. </label>
                        <input type="text" class="form-control" id="ip" aria-describedby="ip" placeholder="192.168.21.1" maxlength="15"  name="ip">
                        <small id="ip" class="form-text text-muted">Escriba la ip del cliente.</small></div>
                        <!--/Div-->
                        <!--AQUI TERMINA IP DEL DEL CLIENTE -->

                 <div class="form-group col-6" >
                <label for="Día"> * Fecha del día en que se instalo la antena.</label>
                <input type="date" class="form-control" id="dia" aria-describedby="dia" placeholder="dia" name="dia" required>
                <small id="dia" class="form-text text-muted">Ingresé la fecha para su registro.</small></div>
                        <!--AQUI COMIENZA CLAVE FORANEA CON EL NOMBRE DE LA LOCALIDAD DEL CLIENTE -->
                        <div class="form-group col-md-6">
                         <label for="Localidad">* Localidades.</label>
                         <select name="localidad" id="selector"  class="form-control" required>
                           <option value="">Seleccione...</option>
                           <?php
                           include 'connect_db.php';

                           $sql=("SELECT id_localidad,nombre_localidad FROM localidad ORDER BY nombre_localidad");
                           $query=mysqli_query($mysqli,$sql);
                           while($arreglo=mysqli_fetch_assoc($query))
                           {
                            echo '<option value='.$arreglo["id_localidad"].'">'.$arreglo["nombre_localidad"].'</option>';
                          }
                          ?>
                        </select>
                      </div>

                      <!--/Div-->
                      <!-- AQUI TERMINA CLAVE FORANEA DE NOMBRE LOCALIDAD DEL CLIENTE -->
                      <div class="col-3 mb-5">
                      <button type="submit" class="btn btn-primary">Guardar.</button>
                      </form>
                      </div>

 
 
































 <!--ESTE FUCNTION ES PARA VALIDAR EL CAMPO DEL NUMERO DEL CELULAR QUE SOLO INGRESARA 10 NUMEROS DE TELEFONOS MAS NO LETRAS CHAVAL-->
 <script>
  function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

          //Tecla de retroceso para borrar, siempre la permite
          if (tecla == 8) {
            return true;
          }
          // Patron de entrada, en este caso solo acepta numeros y letras
          patron = /[0-9]/;
          tecla_final = String.fromCharCode(tecla);
          return patron.test(tecla_final);
        }
      </script>




      <?php
// verificamos la conexion de la base de datos
      require_once('connect_db.php');
 //numero el cual recibe la condicion

      if(isset($_POST['id']))
      {
  //las variables de el formulario
        $id= $_POST['id'];
        $nombre = $_POST['nombre'];
        $apodo = $_POST['apodo'];
        $telefono = $_POST['telefono'];
        $domicilio = $_POST['domicilio'];
        $ip = $_POST['ip'];
        $dia = $_POST['dia'];
        $loca = $_POST['localidad'];

  //la estructura de la consulta, los datos deven ser los mismos de la base de datos y a las bariables   
        $insertar = "INSERT INTO cliente (id_cliente,nombre_cliente,Apodo,telefono,domicilio,ipe,instal,id_localidad) VALUES
        ('".$id."','".$nombre."', '".$apodo."','".$telefono."','".$domicilio."','".$ip."','".$dia."','".$loca."')";

        $ejecutar=$mysqli->query($insertar);
   //metodo para insertar los registros
        if($ejecutar > 0)
        {
     //encaso de que la accion sea pocitiva tomara esta condicion * u *
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
         window.location='alta_clientes.php';
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
        window.location='principal.php';
        </script>
        </body>
        </html>
        ";
      }
    }
    ?>
    <div class="alert alert-secondary" role="alert">
      <div class="">
        <font face="Arial Black" size="6"> Clientes registrados</font>
      </div>
    </div>
    <table role="table">
      <thead role="rowgroup">
        <tr role="row">

          <div class="col-md- col-sm-2 col-xs-12">
            <div class="container">
              <table class="table table-hover">
                <thead>
                  <tr>

                    <th scope="col">Nombre.</th>
                    <th scope="col">Apodo.</th>
                    <th scope="col">Teléfono.</th>
                    <th scope="col">Domicilio.</th>
                    <th scope="col">IP del Cliente.</th>
                    <th scope="col">Día de instalación.</th>
                    <th scope="col">Localidad.</th>
                    <th scope="col">Editar.</th>
                    <th scope="col">Eliminar.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  require("connect_db.php");
                  $sql=("SELECT id_cliente,nombre_cliente,Apodo,telefono,domicilio,ipe,instal,localidad.nombre_localidad FROM cliente,localidad  WHERE localidad.id_localidad = cliente.id_localidad");
                  $query=mysqli_query($mysqli,$sql);
                  while($arreglo=mysqli_fetch_array($query)){


                    echo "<tr class='success'>";
                    "$arreglo[0]";
                    echo "<td>$arreglo[1]</td>";
                    echo "<td>$arreglo[2]</td>";
                    echo "<td>$arreglo[3]</td>";
                    echo "<td>$arreglo[4]</td>";
                    echo "<td>$arreglo[5]</td>";
                    echo "<td>$arreglo[6]</td>";
                    echo "<td>$arreglo[7]</td>";

                    echo "<td><a href='actualizar_clientes.php?id=$arreglo[0]'><button type='button' class='btn btn-warning'><i class='fas fa-edit'></i></button></td>";

                    echo "<td><a href='borrar.php?id=$arreglo[0]'><button type='button' class='btn btn-danger'><i class='fas fa-trash'></i></button></td>";



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

