<div class="container-fluid">
  <div class="container">
    <br>
    <h1>EDITAR USUARIO</h1>
    <div class="container">
          <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarUser');?>" novalidate>
            <div class="form-group">
              <input type="hidden" name="Id" value="<?php echo $id; ?>">
              <label for="validationCustom027">Digite el Username</label>
              <input type="text" class="form-control" name="entradaUserName" id="validationCustom027" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
              <label for="validationCustom028">Digite el Email</label>
              <input type="text" class="form-control" name="entradaEmail" id="validationCustom028" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
              <label for="validationCustom029">Digite la contraseña</label>
              <input type="text" class="form-control" name="entradaPassword" id="validationCustom029" value="<?php echo $password; ?>" required>
            </div>
            <div class="form-group">
              <label for="validationCustom030">Digite el Nivel</label>
              <input type="text" class="form-control" name="entradaLevel" id="validationCustom030" value="<?php echo $user_level; ?>" required>
            </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
          </form>
          <br>
      </div>
    </div>
</div>
