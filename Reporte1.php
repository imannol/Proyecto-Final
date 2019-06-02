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

        <div class="content">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">

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
          <br><br>
          <div class="container">
            <div class="jumbotron">
              <div class="container">
                <h1 class="display-4"><font face="Arial Black" size="18">Registro de fichas.</font></h1>

              </div>
            </div>
            <!--AQUI COMIENZA EL NOMBRE DEL CLIENTE -->
            <div class="container">
                
               <div class="form-group col-6" >
                <label for="Fecha"><font face="Arial" size="12">Reporte del Listado de los CLientes.</font></label>
          <a href="pdf/primerReporte.php" title=""  target=”_blank” ><button class="btn btn-danger button1" type="submit"> Imprimir </button></a>

          
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

