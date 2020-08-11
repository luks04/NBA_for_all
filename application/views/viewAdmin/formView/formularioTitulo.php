<div class="container-fluid">
  <div class="container">
    <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarTituloStatsForm');?>" novalidate>
        <br>
        <label for="validationCustom01"><h1>DIGITE TÍTULO</h1></label>
        <input type="text" class="form-control" name="entradaTitulo" id="validationCustom01" value="<?php echo $titulo;?>" required>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
    </form>
    <br>
  </div>
</div>
