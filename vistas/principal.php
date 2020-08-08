
      <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
      <!--header start-->
        <?php include ('core/BarraArriba.php'); ?>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include ('core/BarraLateral.php') ; ?>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <!-- Rapidos -->
              <div class="showback Rapi">
                <h3 style="margin: 0;">Iconos Rapidos</h3>
                <button type="button" class="btn btn-theme">
                  <i class="fa fa-cog"></i> Bebidas
                </button>
                <button type="button" class="btn btn-theme02">
                  <i class="fa fa-check"></i> Cigarrillos
                </button>
                <button type="button" class="btn btn-theme04">
                  <i class="fa fa-heart"></i> articulo X
                </button>
                <button type="button" class="btn btn-danger">
                  <i class="fa fa-cog"></i> Bebidas
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-check"></i> Cigarrillos
                </button>
                <button type="button" class="btn btn-warning">
                  <i class="fa fa-heart"></i> articulo X
                </button>
              </div>
              <!-- Buscar -->
              <div class="showback">
                <form class="form-horizontal style-form" method="get">
                  <div class="form-group">
                    <h4
                      class="col-sm-2 col-sm-2 control-label"
                      style="margin-top: 0; text-align: right;"
                    >
                      Buscar
                    </h4>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="TextBuscar" />
                    </div>
                  </div>
                </form>
                <!-- **********************************************************************************************************-->
                <style>
                  :root {
                    --colorFoco: rgba(78, 205, 196, 0.6);
                    --colorImpar: #e2e0e0;
                  }
                  #BusArt tbody tr td:nth-child(3),
                  #BusArt tbody tr td:nth-child(2) {
                    text-align: right;
                  }
                  #BusArt tbody tr:nth-child(odd) {
                    background: var(--colorImpar);
                  }
                  #BusArt tbody tr:hover {
                    background: var(--colorFoco) !important;
                  }

                  #TextBuscar:focus {
                    background: var(--colorFoco);
                  }

                  .Rapi button {
                    margin: 20px;
                  }
                </style>

                <table
                  class="table table-bordered table-striped table-condensed"
                  id="BusArt"
                >
                  <thead>
                    <tr>
                      <th>Articulo</th>
                      <th>Stock</th>
                      <th class="numeric">Precio</th>
                      <th class="numeric">Familia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr key="">
                      <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                      <td class="numeric">$1.38</td>
                      <td class="numeric">-0.01</td>
                      <td class="numeric">-0.36%</td>
                    </tr>
                    <tr>
                      <td>ARDENT LEISURE GROUP</td>
                      <td class="numeric">$1.15</td>
                      <td class="numeric">+0.02</td>
                      <td class="numeric">1.32%</td>
                    </tr>
                    <tr>
                      <td>AUSENCO LIMITED</td>
                      <td class="numeric">$4.00</td>
                      <td class="numeric">-0.04</td>
                      <td class="numeric">-0.99%</td>
                    </tr>
                    <tr>
                      <td>ADELAIDE BRIGHTON LIMITED</td>
                      <td class="numeric">$3.00</td>
                      <td class="numeric">+0.06</td>
                      <td class="numeric">2.04%</td>
                    </tr>
                    <tr>
                      <td>ABACUS PROPERTY GROUP</td>
                      <td class="numeric">$1.91</td>
                      <td class="numeric">0.00</td>
                      <td class="numeric">0.00%</td>
                    </tr>
                    <tr>
                      <td>ADITYA BIRLA MINERALS LIMITED</td>
                      <td class="numeric">$0.77</td>
                      <td class="numeric">+0.02</td>
                      <td class="numeric">2.00%</td>
                    </tr>
                  </tbody>
                </table>

                <!-- ***********************************************************************************************************-->
              </div>
            </div>
            <style>
              .numClass {
                text-align: right !important;
              }

              #BusVen:focus,
              #CantVen:focus {
                background: var(--colorFoco);
              }
              #Venta tbody tr:nth-child(odd) {
                background: var(--colorImpar);
              }
              #Venta tbody tr:hover {
                background: var(--colorFoco) !important;
              }
              #Venta tbody tr td:nth-child(2) {
                text-align: center;
              }
              .sinFondo {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important;
                border-bottom-width: 0 !important;
              }

              .todoDerecha {
                text-align: right;
              }

              .fondoGris {
                background: #c2bfbf;
                border: 2px solid #000000;
                color: #a50404;
                padding: 10px 19px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
              }
              .espacio {
                margin-top: 25px;
              }
            </style>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <!-- Ventas -->
              <div class="showback">
                <form
                  class="form-horizontal style-form sinFondo"
                  method="get"
                  |
                  id="VenAgregarArticulo"
                >
                  <div class="form-group">
                    <div class="col-sm-9">
                      <select
                        class="form-control"
                        id="BusVen"
                        title="Articulo / codigo / Barras"
                      >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      <br />
                      <div class="form-group sinFondo numClass">
                        <label class="col-xs-4 control-label numClass"
                          >$ <span>100.50</span></label
                        >
                        <input
                          class="col-xs-3 numClass"
                          type="number"
                          id="CantVen"
                        />
                        <label class="col-xs-4 control-label numClass"
                          >$ <span>100.50</span></label
                        >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <button
                        type="button"
                        style="padding: 20px 15px;"
                        class="btn btn-theme03 btn-block btn-lg"
                      >
                        <i class="fa fa-plus"></i> Agregar
                      </button>
                    </div>
                  </div>
                </form>
                <!-- ########################################################################################################-->

                <table
                  class="table table-bordered table-striped table-condensed"
                  id="Venta"
                >
                  <thead>
                    <tr>
                      <th>Articulo</th>
                      <th>Canti</th>
                      <th>Precio</th>
                      <th>SubTotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>

                <!-- ########################################################################################################-->

                <div class="form-horizontal style-form sinFondo">
                  <div class="col-xs-2 espacio">
                    <label class="checkbox-inline">
                      <input
                        type="checkbox"
                        id="inlineCheckbox1"
                        value="option1"
                      />
                      Ticket
                    </label>
                  </div>
                  <div class="col-xs-2 espacio">
                    <label class="checkbox-inline">
                      <input
                        type="checkbox"
                        id="inlineCheckbox1"
                        value="option1"
                      />
                      Vuelto
                    </label>
                  </div>
                  <div class="col-xs-3">
                    <h3 class="todoDerecha" style="padding-top: 15px;">
                      Total:$
                    </h3>
                  </div>
                  <div class="col-xs-5">
                    <h3 class="todoDerecha fondoGris">0123.45</h3>
                  </div>

                  <div class="col-xs-6">
                    <button
                      type="button"
                      class="btn btn-danger btn-block btn-lg"
                    >
                      Limpiar
                    </button>
                  </div>
                  <div class="col-xs-6">
                    <button
                      type="button"
                      class="btn btn-success btn-block btn-lg"
                    >
                      Grabar
                    </button>
                  </div>
                </div>

                <!-- ########################################################################################################-->
              </div>
            </div>
          </div>
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib/jquery.ui.touch-punch.min.js"></script>
    <script
      class="include"
      type="text/javascript"
      src="lib/jquery.dcjqaccordion.2.7.js"
    ></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
  </body>
</html>
