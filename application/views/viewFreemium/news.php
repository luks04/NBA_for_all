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
            <a href=<?php echo $fila['Link']; ?> target="_blank"><button type="button" class="btn btn-outline-primary">Ver más</button></a>
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
            <a href=<?php echo $fila['Link']; ?> target="_blank"><button type="button" class="btn btn-outline-primary">Ver más</button></a>
          </div>
          <div class="col-6">
            <img src="<?php echo base_url($imgNews[$i]); $i++;?>">
          </div>
        </div>
        <br>
      <?php endif; //Cierra condicional para intercalar?>
    <?php endforeach; ?>
  </div>
</div>
