<!--------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------- Remembering Legends --------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
    <div class="container">
        <br>
        <h1><?php echo $titulo;?></h1>
        <br>
        <div class="row">
            <div class="col">
              <!------------------------------------------------->
              <!----------------- Kobe Bryant ------------------->
              <!------------------------------------------------->
                <h3><?php echo $titulo1_col1;?></h3>
                <img src="<?php echo base_url($imgsLegends[0]);?>">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="frase"><?php echo $frase1;?></p>
                    <footer class="blockquote-footer frase"><?php echo $nombre1;?></footer>
                  </blockquote>
                </div>

                <br>
                <h3><?php echo $titulo2_col1;?></h3>
                <br>
                <table class="table table-striped table-dark">
                  <tbody>
                    <?php $i = 0; while ($i < (count($tabla_l1->result_array())-1)):?>
                    <tr>
                      <td><?php echo $tabla_l1->result_array()[$i]['Logros']; $i++;?></td>
                      <td></td>
                      <td><?php echo $tabla_l1->result_array()[$i]['Logros']; $i++;?></td>
                    </tr>
                  <?php endwhile; ?>
                  <?php if ($i == (count($tabla_l1->result_array())-1)):?>
                    <tr>
                      <td><?php echo $tabla_l1->result_array()[$i]['Logros']; $i++;?></td>
                      <td></td>
                      <td></td>
                    </tr>
                  <?php endif; ?>
                  </tbody>
                </table>
            </div>
            <div class="col">
              <!------------------------------------------------->
              <!--------------- Michael Jordan ------------------>
              <!------------------------------------------------->
                <h3><?php echo $titulo1_col2;?></h3>
                <img src="<?php echo base_url($imgsLegends[1]);?>">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="frase"><?php echo $frase2;?></p>
                    <footer class="blockquote-footer frase"><?php echo $nombre2;?></footer>
                  </blockquote>
                </div>

                <br>
                <h3><?php echo $titulo2_col2;?></h3>
                <br>
                <table class="table table-striped table-dark">
                  <tbody>
                    <?php $j = 0; while ($j < (count($tabla_l2->result_array())-1)):?>
                    <tr>
                      <td><?php echo $tabla_l2->result_array()[$j]['Logros']; $j++;?></td>
                      <td></td>
                      <td><?php echo $tabla_l2->result_array()[$j]['Logros']; $j++;?></td>
                    </tr>
                  <?php endwhile; ?>
                  <?php if ($j == (count($tabla_l2->result_array())-1)):?>
                    <tr>
                      <td><?php echo $tabla_l2->result_array()[$j]['Logros']; $j++;?></td>
                      <td></td>
                      <td></td>
                    </tr>
                  <?php endif; ?>
                  </tbody>
                </table>
            </div>
        </div>
        <br><br>
    </div>
</div>
