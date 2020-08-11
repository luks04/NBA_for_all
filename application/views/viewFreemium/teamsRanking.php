<!---------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------ Teams Ranking ------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
  <div class="container">
      <br>
      <h1><?php echo $titulo; ?></h1>
      <br>
      <div class="row">
          <div class="col">
              <h3><?php echo $subtitulo1; ?></h3>
              <div class="table-responsive-sm">
                  <table class="table">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">Equipo</th>
                              <th scope="col">G</th>
                              <th scope="col">P</th>
                              <th scope="col">Loc</th>
                              <th scope="col">Vis</th>
                              <th scope="col">Rach</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $i = -14; foreach ($equipos->result_array() as $fila):?>
                          <tr>
                            <?php if($fila['Conferencia'] == $subtitulo1): ?>
                              <th scope="row"><?php echo $i;?> <img class="img-logo" src="<?php echo base_url($fila['Ruta']);?>"> <?php echo $fila['Equipo']; ?></th>
                              <td><?php echo $fila['Ganados']; ?></td>
                              <td><?php echo $fila['Perdidos']; ?></td>
                              <td><?php echo $fila['Local']; ?></td>
                              <td><?php echo $fila['Visitante']; ?></td>
                              <td><?php echo $fila['Rach']; ?></td>
                            <?php endif; ?>
                          </tr>
                        <?php $i++; endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="col">
              <h3><?php echo $subtitulo2; ?></h3>
              <div class="table-responsive-sm">
                  <table class="table">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">Equipo</th>
                              <th scope="col">G</th>
                              <th scope="col">P</th>
                              <th scope="col">Loc</th>
                              <th scope="col">Vis</th>
                              <th scope="col">Rach</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($equipos->result_array() as $fila):?>
                          <tr>
                            <?php if($fila['Conferencia'] == $subtitulo2): ?>
                              <th scope="row"><?php echo $i;?> <img class="img-logo" src="<?php echo base_url($fila['Ruta']);?>"> <?php echo $fila['Equipo']; ?></th>
                              <td><?php echo $fila['Ganados']; ?></td>
                              <td><?php echo $fila['Perdidos']; ?></td>
                              <td><?php echo $fila['Local']; ?></td>
                              <td><?php echo $fila['Visitante']; ?></td>
                              <td><?php echo $fila['Rach']; ?></td>
                            <?php endif; ?>
                          </tr>
                        <?php $i++; endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
</div>
