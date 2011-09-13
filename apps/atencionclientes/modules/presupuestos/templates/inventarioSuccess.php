<?php use_helper('I18N', 'Date') ?>

<div class="quickstart">
      <div class="hero-unit">
        <div class="row">
          <div class="span7 columns">
            <form method="post">
            <fieldset>
              <h2>Consulta de Existencia</h2>
              <p>Introduzca los valores en los rectangulos y presione en Calcular</p>
            <?php if ($sf_user->hasFlash('notice')): ?>
              <div class="alert-message success">
                <a href="#" class="close">×</a>
                <p><?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?></p>
              </div>
            <?php endif; ?>

            <?php if ($sf_user->hasFlash('error')): ?>
              <div class="alert-message error">
                <a href="#" class="close">×</a>
                <p><?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?></p>
              </div>
            <?php endif; ?>

              <?php echo $form ?>
              <div class="actions">
                <input type="submit" value="Buscar" class="btn primary">
                <?php echo link_to1('Limpiar', 'presupuestos/inventario', array('class' => 'btn')); ?>
              </div>
              </tr>
            </fieldset>
            </form>
          </div>
          <div class="span7 columns">
            <fieldset>
              <h3>Resultados</h3>

              <table class="zebra-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Existencia</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($articulos) : ?>
                  <?php foreach($articulos->fetchArray() as $index => $art) : ?>
                  <tr>
                    <td><?php echo ($index+1) ?></td>
                    <td><?php echo $art['co_art'] ?></td>
                    <td><?php echo $art['art_des'] ?></td>
                    <td><h4> <strong> <?php echo number_format($art['prec_vta5'], 2,',','.') ?> </strong> </h4></td>
                  </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>

            </fieldset>
          </div>
        </div>
      </div>
  </div>