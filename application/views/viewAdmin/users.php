<!--------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------- Users ---------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid" id="wallpaperUsers">
  <div class="container">
    <br>
    <h1 class="usersText tituloUsers">Usuarios</h1>
    <br>
  </div>
  <div class="row">
    <?php $i=1; if ($i <= 3):?>
      <div class="col-4">
        <p class="usersText contenidoUsers">
          <?php
            foreach ($consultaUsers->result_array() as $fila)
            {
            	echo "Registro ".$i."<br>";
              echo "ID: ".$fila['Id']."<br>";
            	echo "Username: ".$fila['Username']."<br>";
            	echo "Email: ".$fila['Email']."<br>";
            	echo "Password: ".$fila['Password']."<br>";
              echo "User_level: ".$fila['User_level']."<br>";
              echo "<br>";
              echo "<a href=".site_url('AdminController/eliminarUsuario/').$fila['Id']."><button class='btn btn-outline-danger' role='button' aria-pressed='true'>Eliminar Registro</button></a>";
              echo "&nbsp";
              echo "<a href=".site_url('AdminController/showFormEditUser/').$fila['Id'].'/'.$fila['Username'].'/'.urlencode(base64_encode($fila['Email'])).'/'.$fila['Password'].'/'.$fila['User_level']."><button class='btn btn-outline-warning' role='button' aria-pressed='true'>Actualizar Registro</button></a>";
              echo "<br><br>";
            	$i++;
          }
          ?>
        </p>
      </div>
      <div class="col-4">
      </div>
      <div class="col-4">
      </div>
    <?php else: ?>
      <div class="col-4">
      </div>
      <div class="col-4">
      </div>
      <div class="col-4">
        <p class="usersText contenidoUsers">
          <?php
            foreach ($consultaUsers->result_array() as $fila)
            {
            	echo "Registro ".$i."<br>";
              echo "ID: ".$fila['Id']."<br>";
            	echo "Username: ".$fila['Username']."<br>";
            	echo "Email: ".$fila['Email']."<br>";
            	echo "Password: ".$fila['Password']."<br>";
              echo "User_level: ".$fila['User_level']."<br>";
              echo "<br>";
              echo "<a href=".site_url('AdminController/eliminarUsuario/').$fila['Id']."><button class='btn btn-outline-danger' role='button' aria-pressed='true'>Eliminar Registro</button></a>";
              echo "&nbsp";
              echo "<a href=".site_url('AdminController/showFormEditUser/').$fila['Id'].'/'.$fila['Username'].'/'.urlencode(base64_encode($fila['Email'])).'/'.$fila['Password'].'/'.$fila['User_level']."><button class='btn btn-outline-warning' role='button' aria-pressed='true'>Actualizar Registro</button></a>";
              echo "<br><br>";
            	$i++;
          }
          ?>
        </p>
      </div>
    <?php endif; ?>
  <br>
  </div>
</div>
