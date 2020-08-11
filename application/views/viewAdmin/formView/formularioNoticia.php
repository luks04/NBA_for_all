<div class="container-fluid">
  <div class="container">
    <br>
    <h1>EDITAR NOTICIA</h1>
    <div class="container">
      <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarNews');?>" novalidate>
          <br>
          <input type="hidden" name="Id" value="<?php echo $id; ?>">
          <label for="validationCustom017"><h3>DIGITE EL TÍTULO</h3></label>
          <input type="text" class="form-control" name="entradaTituloNew" id="validationCustom017" value="<?php echo $titulo; ?>" required>
          <br>
          <label for="validationCustom018"><h3>DIGITE EL SUBTÍTULO</h3></label>
          <input type="text" class="form-control" name="entradaSubTituloNew" id="validationCustom018" value="<?php echo $subtitulo; ?>" required>
          <br>
          <label for="validationCustom019"><h3>DIGITE EL ID CORRESPONDIENTE EN LA TABLA DE IMAGENES</h3></label>
          <input type="text" class="form-control" name="entradaImgNew" id="validationCustom019" value="<?php echo $img; ?>" required>
          <br>
          <label for="validationCustom020"><h3>DIGITE EL CONTENIDO</h3></label>
          <input type="text" class="form-control" name="entradaContenidoN" id="validationCustom020" value="<?php echo $contenido; ?>" required>
          <br>
          <label for="validationCustom021"><h3>DIGITE EL LINK</h3></label>
          <input type="text" class="form-control" name="entradaLinkN" id="validationCustom021" value="<?php echo $link; ?>" required>
          <br>
          <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
      </form>
      <br>
    </div>
  </div>
</div>
