<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
<?php include_stylesheets() ?>
<?php include_javascripts() ?>

</head>
<body>
<div id="header">
  <h1>Agencia Royal 33</h1>
  <h2>por Grupo Emporium C.A.</h2>
</div>
<div id="menu">
  <ul>
    <li class="first"><?php echo link_to('Clientes','clientes') ?></li>
    <li><?php echo link_to('Servicios','servicios') ?></li>
    <li><?php echo link_to('Acciones','acciones') ?></li>
    <li><?php echo link_to('Entregas','entregas') ?></li>
    <li><?php echo link_to('Informes','informenes') ?></li>
  </ul>
</div>
<div id="content">
  <div id="columnA">
  <?php echo $sf_data->getRaw('sf_content') ?>
  </div>
  <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <p>Copyright &copy; 2007 AgenciaRoyal.com Diseñado por <a href="http://www.freecsstemplates.org" class="link1">Free CSS Templates</a></p>
</div>
</body>
</html>