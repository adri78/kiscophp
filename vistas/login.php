<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistema para Kioscos online" />
    <meta name="author" content="Roberto adrian gil/ Miniapps " />
    <meta name="keyword" content="Ventas, kiosco" />
    <title>Rapi Kiosco</title>

    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon" />
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!--external css-->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!--  -->
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
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
        <form class="form-login" action="index.html">
          <h2 class="form-login-heading">Rapi <span>KI</span>osco</h2>
          <div class="login-wrap">
            <input
              type="text"
              class="form-control"
              placeholder="Usuario"
              autofocus
            />
            <br />
            <br />
            <input
              type="password"
              class="form-control"
              placeholder="Contraseña"
            />
            <label class="checkbox" style="margin-left: 20px;">
              <input type="checkbox" value="remember-me" /> Recordar contraseña
              <span class="pull-right">
                <a data-toggle="modal" href="login.html#myModal">
                  No recuerdo?</a
                >
              </span>
            </label>
            <hr />
            <button
              class="btn btn-theme btn-block"
              href="index.html"
              type="submit"
            >
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
  </body>
</html>
