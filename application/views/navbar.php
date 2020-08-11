<!---------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------ Navegation Bar ------------------------------------------------------>
<!---------------------------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="<?php echo base_url($this->ContenidoImagenes->getLogo());?>" width="15" height="30" class="d-inline-block align-top" alt="">
    <h5 class="navbar-brand">&nbsp NBA FOR ALL</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- Sesion premium-->
          <?php if($this->session->userdata('level')==='3'):?>
            <li class="nav-item active">
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo site_url('PremiumController');?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('PremiumController/showTeamsRanking');?>">Teams Ranking</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('PremiumController/showNews');?>">News</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('PremiumController/showRememberingLegends');?>">Remembering Legends</a>
              </li>
          <!-- Sesion editor-->
          <?php elseif($this->session->userdata('level')==='2'):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('EditorController');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('EditorController/showTeamsRanking');?>">Teams Ranking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('EditorController/showNews');?>">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('EditorController/showRememberingLegends');?>">Remembering Legends</a>
            </li>
          <!-- Sesion admin-->
          <?php elseif($this->session->userdata('level')==='1'):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('AdminController');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('AdminController/showTeamsRanking');?>">Teams Ranking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('AdminController/showNews');?>">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('AdminController/showRememberingLegends');?>">Remembering Legends</a>
            </li>
          <!-- Sin sesion -->
          <?php else:?>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('Main');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Main/showTeamsRanking');?>">Teams Ranking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Main/showNews');?>">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="<?php echo site_url('Main/showRememberingLegends');?>">Remembering Legends</a>
            </li>
          <?php endif;?>
        </ul>
        <!-- Session -->
        <div class="nav-link-sesion">
            <ul class="navbar-nav mr-auto">
              <!-- Sesion premium o editor-->
              <?php if($this->session->userdata('level')==='3' || $this->session->userdata('level')==='2'):?>
                <li class="nav-item">
                    <a class="nav-link">@<?php echo $this->session->userdata('username')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('LoginController/logout');?>">Logout</a>
                </li>
              <!-- Sesion admin-->
              <?php elseif($this->session->userdata('level')==='1'):?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('AdminController/showUsers');?>"><button class="btn btn-sm btn-outline-success" type="button">Administrar usuarios</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">@<?php echo $this->session->userdata('username')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('LoginController/logout');?>">Logout</a>
                </li>
              <!-- Sin Sesion-->
              <?php else:?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('LoginController');?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('SignupController');?>">SignUp</a>
                </li>
              <?php endif;?>
            </ul>
        </div>
        <!-- Redes Sociales -->
        <a title="NBA Instagram" target="_blank" href="https://www.instagram.com/nba/?hl=es-la"><i class="fab fa-instagram fa-2x"></i></a>
        <a title="NBA Facebook" target="_blank" href="https://www.facebook.com/nba/"><i class="fab fa-facebook fa-2x"></i></a>
        <a title="NBA Twitter" target="_blank" href="https://twitter.com/nba?lang=es"><i class="fab fa-twitter fa-2x"></i></a>
    </div>
</nav>
