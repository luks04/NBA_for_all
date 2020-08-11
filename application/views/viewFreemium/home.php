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
                    <img src="<?php echo base_url($imgProxEnc[$i]); $i++;?>" class="img-logo-h"><br><br><br>
                </div>
                <div class="col-2">
                    <h4>&nbsp VS &nbsp</h4><br>
                </div>
                <div class="col-2">
                    <img src="<?php echo base_url($imgProxEnc[$i]); $i++;?>" class="img-logo-h"><br><br><br>
                    </div>
              <div class="col">
                  <p><?php echo $fila['Contenido'];?></p>
                  <br>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="col">
              <h1><?php echo $titulo1_col2;?></h1>
              <br>
              <?php echo $video;?>
          </div>
        </div>
    </div>
</div>
