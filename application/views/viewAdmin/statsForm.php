<!--------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Stats Form  ------------------------------------------------------>
<!--------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
  <div class="container">
    <form method="post" action="<?php echo site_url('AdminController/showStats');?>">
      <div class="form-group">
        <div class="form-group">
          <br>
          <h1><?php echo $titulo2;?>&nbsp&nbsp<a href="<?php echo site_url('AdminController/showFormTituloStatsForm/'.urlencode(base64_encode($titulo2)));?>"><i class="fas fa-edit fa-1x"></i></a></h1>
          <br>
          <p>Elija una opción para filtrar su búsqueda</p>
          <select class="form-control" name="statsOptions">
            <option>Points</option>
            <option>Rebounds</option>
            <option>Assists</option>
            <option>Blocks</option>
            <option>3-Pointers Made</option>
            <option>Steals</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
      </div>
    </form>
  </div>
</div>
