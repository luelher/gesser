<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <h3><a href="#">Agencia Royal 33 C.A.</a></h3>
          <ul class="nav">
            <li class=""><?php echo link_to1('Calculadora', 'presupuestos/presupuesto') ?></li>
            <li class=""><?php echo link_to1('Inventario', 'presupuestos/inventario') ?></li>
            <li><a href="#about">Acerca</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <?php echo $sf_content ?>

      <footer>
        <p>&copy; Agencia Royal 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>