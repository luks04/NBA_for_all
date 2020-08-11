<div class="container-fluid">
  <div class="container">
    <br>
    <h1>CAMBIAR VIDEO</h1>
    <div class="container">
      <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarVideo');?>" novalidate>
          <br>
          <h3>Si no sabes como cambiar el viedo, dale click a este botón:</h3>
          <br>
          <a href="https://www.youtube.com/watch?v=CDV2AwOeeis" target="_blank"><button type="button" class="btn btn-outline-primary">Ver tutorial</button></a>
          <br>
          <br>
          <label for="validationCustom08"><h3>PEGUE AQUÍ EL CÓDIGO HTML</h3></label>
          <input type="text" class="form-control" name="entradaVideo" id="validationCustom08" placeholder="Pegue aquí el código HTML" required>
          <br>
          <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
      </form>
      <br>
    </div>
  </div>
</div>
