<style>
  .form-login-heading {
    font-weight: bolder;
    font-family: "Rowdies", cursive;
  }
  .form-login-heading span {
    color: rgb(50, 135, 151);
  }
</style>

<div id="login-page">
  <div class="container">
    <form class="form-login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <h2 class="form-login-heading">Rapi <span>KI</span>osco</h2>
      <div class="login-wrap">
        <input
          type="text"
          class="form-control"
          placeholder="Usuario"
          id="User"
          autofocus
        />
        <br />
        <br />
        <input
          type="password"
          class="form-control"
          placeholder="Contraseña"
          id="Password"
        />
        <label class="checkbox" style="margin-left: 20px;">
          <input type="checkbox" value="remember-me" /> Recordar contraseña
          <span class="pull-right">
            <a data-toggle="modal" href="index.php#myModal"> No recuerdo?</a>
          </span>
        </label>
        <hr />
        <button class="btn btn-theme btn-block" href="index.php" type="submit">
          <i class="fa fa-lock"></i> Entrar
        </button>
      </div>
      <!-- Modal -->
      <div
        aria-hidden="true"
        aria-labelledby="myModalLabel"
        role="dialog"
        tabindex="-1"
        id="myModal"
        class="modal fade"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-hidden="true"
              >
                &times;
              </button>
              <h4 class="modal-title">Perdiste la contraseña?</h4>
            </div>
            <div class="modal-body">
              <p>Le enviaremos un Email para cambiarla.</p>
              <input
                type="text"
                name="email"
                placeholder="Su Email"
                autocomplete="off"
                class="form-control placeholder-no-fix"
              />
            </div>
            <div class="modal-footer">
              <button
                data-dismiss="modal"
                class="btn btn-default"
                type="button"
              >
                Cancelar
              </button>
              <button class="btn btn-theme" type="button">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
    </form>
  </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="../lib/jquery.backstretch.min.js"></script>
<script>
  $.backstretch("img/login-bg.jpg", {
    speed: 500,
  });
</script>
