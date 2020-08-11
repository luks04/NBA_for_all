<!--------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------- Home ----------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
    <div class="container">
        <br>
        <div class="row">
          <div class="col">
            <h1><?php echo $titulo1_col1;?></h1>
            <br>
            <?php $i = 0; foreach ($contentProxEnc->result_array() as $fila):?>
            <div class="row">
                <div class="col-2">
                  <a href="<?php echo site_url('AdminController/showFormEncuentro/'.urlencode(base64_encode($fila['Equipo1'])).'/'.urlencode(base64_encode($fila['Equipo2'])).'/'.urlencode(base64_encode($fila['Contenido'])).'/'.$fila['Id']); ?>"><i class="fas fa-edit fa-2x"></i></a>
                  <a href="<?php echo site_url('AdminController/eliminarContentProxEnc/'.$fila['Id']); ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                </div>
                <div class="col-1">
                    <img src="<?php echo base_url($imgProxEnc[$i]); $i++;?>" class="img-logo-h"><br><br><br>
                </div>
                <div class="col-1">
                    <h4>&nbsp VS &nbsp</h4><br>
                </div>
                <div class="col-1">
                    <img src="<?php echo base_url($imgProxEnc[$i]); $i++;?>" class="img-logo-h"><br><br><br>
                    </div>
              <div class="col-7">
                  <p><?php echo $fila['Contenido'];?></p>
                  <br>
              </div>
            </div>
            <?php endforeach; ?>
            <a href=""><i class="fas fa-plus-circle fa-2x"></i></a>
          </div>
          <div class="col">
              <h1><?php echo $titulo1_col2;?></h1>
              <br>
              <?php echo $video;?>
              <a href="<?php echo site_url('AdminController/showFormVideo'); ?>"><i class="fas fa-edit fa-2x"></i><a href=""><i class="fas fa-plus-circle fa-2x"></i></a>
          </div>
        </div>
    </div>
</div>
