<div class="container-fluid">
  <div class="container">
    <br>
    <h1>EDITAR CARRUSEL</h1>
    <div class="container">
      <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarCarousel');?>" novalidate>
          <br>
          <input type="hidden" name="Id" value="<?php echo $id;?>">
          <label for="validationCustom03"><h3>DIGITE RUTA</h3></label>
          <input type="text" class="form-control" name="entradaImagenCarrusel" id="validationCustom03" value="<?php echo $rutaImagen;?>" required>
          <br>
          <label for="validationCustom04"><h3>DIGITE TÍTULO</h3></label>
          <input type="text" class="form-control" name="entradaTituloCarrusel" id="validationCustom04" value="<?php echo $nombreImagen;?>" required>
          <br>
          <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
      </form>
      <br>
    </div>
  </div>
</div>
