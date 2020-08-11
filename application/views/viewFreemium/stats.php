<!---------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Stats ------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
  <div class="container">
    <br>
    <h1><?php echo $titulo2;?></h1>
    <br>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">¡Genial!</h4>
      <p>Has click en el siguiente link (<?php echo "<a href=$statsArray[1] target='_blank'>$statsArray[0]</a>";?>) para ver los resultados de tu búsqueda en la página oficial de ESPN.</p>
    </div>
    <a href="<?php echo site_url('Main');?>"><button class="btn btn-primary">Regresar</button></a>
    <br><br>
  </div>
</div>
