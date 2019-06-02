 <form accept-charset="utf-8" action="" method="POST" onsubmit="return validacion()">

                <input type="hidden" maxlength="45" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Luis Imannol" >

                <!--Div-->

                <div class="form-group col-6" >
                  <label for="Fichas">Fichas que se dejaron.</label>
                  <input type="number" maxlength="45" class="form-control" onkeypress="return check(event)" id="fichas" aria-describedby="fichas" placeholder="10" name="fichas" required>
                  <small id="fichas" class="form-text text-muted">Total de fichas que se dejaron.</small></div>
                  <!--/Div-->
                  <!--AQUI TERMINA EL NOMBRE DEL CLIENTE -->

                  <!--AQUI COMIENZA EL APODO DEL CLIENTE -->
                  <!--Div-->
                  <div class="form-group col-6" >
                    <label for="Precio">Precio de la ficha.</label>
                    <input type="number" maxlength="45" class="form-control" id="precio" aria-describedby="precio" placeholder="$00.00" name="precio" required>
                    <small id="precio" class="form-text text-muted">Ingresé el precio de la ficha.</small></div>
                    <!--/Div-->
                    <!--AQUI TERMINA EL APODO DEL CLIENTE -->
                        <!--/Div-->
                        <!-- AQUI TERMINA CLAVE FORANEA DE NOMBRE LOCALIDAD DEL CLIENTE -->
                        <div class="col-3 mb-5"><button type="submit" class="btn btn-primary">Guardar.</button>
                        </div></form></div>
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
        $id = $_POST['id'];
        $fichas = $_POST['fichas'];
        $precio = $_POST['precio'];
        $preciototal = $_POST['fichas'] * $_POST['precio'];
        

  //la estructura de la consulta, los datos deven ser los mismos de la base de datos y a las bariables   
        $inser = "INSERT INTO cobranza(id_cobranza,fichas,precio,preciototal) VALUES
        ('".$id."','".$fichas."', '".$precio."','".$preciototal."')";

        $ejecutar=$mysqli->query($inser);
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
         window.location='instal.php';
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
        window.location='instal.php';
        </script>
        </body>
        </html>
        ";
      }
    }
    ?>
    <div class="alert alert-secondary" role="alert">
      <div class="">
        <font face="Arial Black" size="6">Registro de fichas vendidas.</font>
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
                    <th scope="col"> Fichas.</th>
                    <th scope="col">$ Precio.</th>
                    <th scope="col">$ Precio total.</th>
                   <th scope="col">Editar.</th>
                    <th scope="col">Eliminar.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require("connect_db.php");
                  $sql=("SELECT * FROM cobranza");
                  $query=mysqli_query($mysqli,$sql);
                  while($array=mysqli_fetch_array($query)){

                    echo "<tr class='success'>";
                    echo "<td>$array[1]</td>";
                    echo "<td>$array[2] pesos</td>";
                    echo "<td>$array[3] pesos</td>";

                    echo "<td><a href='actualizar_cobro.php?id=$array[1]'><button type='button' class='btn btn-warning'><i class='fas fa-edit'></i></button></td>";

                    echo "<td><a href='borrar.php?id=$array[1]'><button type='button' class='btn btn-danger'><i class='fas fa-trash'></i></button></td>";
                    echo "</tr>";
                  }

                  ?>    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
