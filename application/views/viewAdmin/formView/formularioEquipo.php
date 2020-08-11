<div class="container-fluid">
  <div class="container">
    <br>
    <h1>EDITAR EQUIPO</h1>
    <div class="container">
      <form class="needs-validation" method="post" action="<?php echo site_url('AdminController/actualizarEquipo');?>" novalidate>
          <br>
          <input type="hidden" name="Id" value="<?php echo $id;?>">
          <label for="validationCustom09"><h3>ESCOJA LA CONFERENCIA</h3></label>
          <select class="form-control" name="entradaConference" value"<?php echo $conferencia; ?>">
            <option>EASTERN CONFERENCE</option>
            <option>WESTERN CONFERENCE</option>
          </select>
          <br>
          <label for="validationCustom010"><h3>DIGITE EL NOMBRE DEL EQUIPO</h3></label>
          <input type="text" class="form-control" name="entradaTeamName" id="validationCustom010" value="<?php echo $equipo; ?>" required>
          <br>
          <label for="validationCustom011"><h3>DIGITE LA RUTA DEL LOGO</h3></label>
          <input type="text" class="form-control" name="entradaLogo" id="validationCustom011" value="<?php echo $ruta; ?>" required>
          <br>
          <label for="validationCustom012"><h3>PARTIDOS GANADOS</h3></label>
          <input type="text" class="form-control" name="entradaWins" id="validationCustom012" value="<?php echo $ganados; ?>" required>
          <br>
          <label for="validationCustom013"><h3>PARTIDOS PERDIDOS</h3></label>
          <input type="text" class="form-control" name="entradaLoses" id="validationCustom013" value="<?php echo $perdidos; ?>" required>
          <br>
          <label for="validationCustom014"><h3>LOCAL</h3></label>
          <input type="text" class="form-control" name="entradaLocalR" id="validationCustom014" value="<?php echo $local; ?>" required>
          <br>
          <label for="validationCustom015"><h3>VISITANTE</h3></label>
          <input type="text" class="form-control" name="entradaVisitR" id="validationCustom015" value="<?php echo $visitante; ?>" required>
          <br>
          <label for="validationCustom016"><h3>RACH</h3></label>
          <input type="text" class="form-control" name="entradaRach" id="validationCustom016" value="<?php echo $rach; ?>" required>
          <br>
          <button type="submit" class="btn btn-primary">Actualizar</button>&nbsp<button type="reset" class="btn btn-danger">Borrar Formulario</button>
      </form>
      <br>
    </div>
  </div>
</div>
