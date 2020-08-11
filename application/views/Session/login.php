<!------------------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------- Login ------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------>
<div class="container-fluid">
    <div class="container">
        <div class="login-box">
            <center>
              <i class="fas fa-user fa-5x"></i>
              <h1>Login</h1>
            </center>
            <form class="needs-validation" method="post" action="<?php echo site_url('LoginController/auth');?>" novalidate>
              <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" name="entradaUsername" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Digite su Username" required>
                <div class="invalid-feedback">
                  Please write your username.
                </div>
              </div>
              <label for="validationCustom02">Password</label>
              <input type="password" class="form-control" name="entradaPassword" id="validationCustom02" placeholder="Digite su contraseña" required>
              <div class="invalid-feedback">
                Please write your password.
              </div>
              <br>
              <div class="msg-error">
                <?php echo $this->session->flashdata('msg'); if ($this->session->flashdata('msg') == 'Usuario y/o Contraseña incorrectos') {echo "<br><br>";}?>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <button type="reset" class="btn btn-danger">Borrar Formulario</button>
            </form>
        </div>
    </div>
</div>
