<div class="container-fluid">
  <div class="container">
    <br>
    <h1>EDITAR ENCUENTRO</h1>
    <div class="container">
      <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarEncuentros');?>" novalidate>
          <br>
          <input type="hidden" name="Id" value="<?php echo $id;?>">
          <label for="validationCustom05"><h3>ESCOJA EQUIPO LOCAL</h3></label>
          <input type="text" class="form-control" name="entradaLocalTeam" id="validationCustom05" value="<?php echo $equipoLocal;?>" required>
          <br>
          <label for="validationCustom06"><h3>ESCOJA EQUIPO VISITANTE</h3></label>
          <input type="text" class="form-control" name="entradaVisitTeam" id="validationCustom06" value="<?php echo $equipoVisitante;?>" required>
          <br>
          <label for="validationCustom07"><h3>DIGITE INFORMACIÓN</h3></label>
          <input type="text" class="form-control" name="entradaInfoEncuentro" id="validationCustom07" value="<?php echo $info;?>" required>
          <br>
          <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
      </form>
      <br>
    </div>
  </div>
</div>
