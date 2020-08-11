<!--------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------- Carousel ---------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $i = 0; foreach ($imgCarousel->result_array() as $fila):?>
      <?php if ($i == 0): ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php else: ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
      <?php endif; ?>
      <?php $i++; endforeach; ?>
    </ol>
    <div class="carousel-inner">
      <?php $j = 0; foreach ($imgCarousel->result_array() as $fila):?>
        <?php if ($j == 0): ?>
          <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url($fila['Ruta_img']);?>" alt="<?php echo $fila['Nombre'];?>">
              <div class="carousel-caption">
                  <h3><?php echo $fila['Nombre'];?></h3>
              </div>
          </div>
        <?php else: ?>
          <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url($fila['Ruta_img']);?>" alt="<?php echo $fila['Nombre'];?>">
              <div class="carousel-caption">
                  <h3><?php echo $fila['Nombre'];?></h3>
              </div>
          </div>
        <?php endif; ?>
      <?php $j++; endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
