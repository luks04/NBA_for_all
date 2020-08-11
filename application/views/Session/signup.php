<!------------------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------- Signup ------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------>
<div class="container-fluid">
    <div class="container">
        <div class="signup-box">
            <center>
              <i class="far fa-id-card fa-5x"></i>
              <h1>SignUp</h1>
            </center>
            <form class="needs-validation" method="post" action="<?php echo site_url('SignupController/insertar');?>" novalidate>
              <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" name="entradaUsername" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Digite su Username" required>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
              <label for="validationCustomEmail">Correo electrónico</label>
              <input type="email" class="form-control" name="entradaEmail" id="validationCustomEmail" placeholder="Digite su correo electrónico" required>
              <div class="invalid-feedback">
                Check your email!
              </div>
              <label for="validationCustomPassword">Password</label>
              <input type="password" class="form-control" name="entradaPassword" id="validationCustomPassword" placeholder="Digite su contraseña" required>
              <div class="invalid-feedback">
                Please write your password.
              </div>
              <br>
              <div class="msg-error">
                <?php echo $this->session->flashdata('msg2'); if ($this->session->flashdata('msg2') == 'El usuario ingresado ya existe') {echo "<br>";}?>
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Signup</button>
          		<button type="reset" class="btn btn-danger">Borrar Formulario</button>
            </form>
        </div>
    </div>
</div>
