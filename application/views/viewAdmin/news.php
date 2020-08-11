<!--------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------- News ----------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
  <div class="container">
    <br>
    <h1><?php echo $titulo; ?></h1>
    <br>

    <?php $i = 0; $imgRight = ""; foreach ($news->result_array() as $fila):?>
      <!----------------------------->
      <!--- Imagen a la izquierda --->
      <!----------------------------->
      <?php if($i%2 == 0): //Abre condicional para intercalar?>
        <div class="row">
          <div class="col-6">
            <img src="<?php echo base_url($imgNews[$i]); $i++;?>">
          </div>
          <div class="col-6">
            <h3><?php echo $fila['Titulo']; ?></h3>
            <p><?php echo $fila['Subtitulo']; ?></p>
            <p><small class="text-muted"><?php echo $fila['Contenido']; ?></small></p>
            <a href=<?php echo $fila['Link']; ?> target="_blank"><button type="button" class="btn btn-outline-primary">Ver más</button></a>&nbsp &nbsp
            <a href="<?php echo site_url('AdminController/showFormNews/'.$fila['Id'].'/'.urlencode(base64_encode($fila['Contenido'])).'/'.urlencode(base64_encode($fila['Titulo'])).'/'.urlencode(base64_encode($fila['Subtitulo'])).'/'.urlencode(base64_encode($fila['Link']))).'/'.$fila['Img']; ?>"><i class="fas fa-edit fa-2x"></i></a>
            <a href="<?php echo site_url('AdminController/eliminarNews/'.$fila['Id']); ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
          </div>
        </div>
        <br>
      <!----------------------------->
      <!--- Imagen a la derecha --->
      <!----------------------------->
      <?php else: //Continua condicional para intercalar?>
        <div class="row">
          <div class="col-6">
            <h3><?php echo $fila['Titulo']; ?></h3>
            <p><?php echo $fila['Subtitulo']; ?></p>
            <p><small class="text-muted"><?php echo $fila['Contenido']; ?></small></p>
            <a href=<?php echo $fila['Link']; ?> target="_blank"><button type="button" class="btn btn-outline-primary">Ver más</button></a>&nbsp &nbsp
            <a href="<?php echo site_url('AdminController/showFormNews/'.$fila['Id'].'/'.urlencode(base64_encode($fila['Contenido'])).'/'.urlencode(base64_encode($fila['Titulo'])).'/'.urlencode(base64_encode($fila['Subtitulo'])).'/'.urlencode(base64_encode($fila['Link']))).'/'.$fila['Img']; ?>"><i class="fas fa-edit fa-2x"></i></a>
            <a href="<?php echo site_url('AdminController/eliminarNews/'.$fila['Id']); ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
          </div>
          <div class="col-6">
            <img src="<?php echo base_url($imgNews[$i]); $i++;?>">
          </div>
        </div>
        <br>
      <?php endif; //Cierra condicional para intercalar?>
    <?php endforeach; ?>
    <br>
    <center>
      <a href=""><i class="fas fa-plus-circle fa-4x"></i></a>
    </center>
    <br><br>
  </div>
</div>
