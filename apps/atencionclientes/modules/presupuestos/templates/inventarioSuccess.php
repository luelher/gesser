<?php use_helper('I18N', 'Date') ?>

<div class="quickstart" id="grid-system">
      <div class="hero-unit">
        <div class="row">
          <div class="span7 columns">
            <form method="post" id="formulario">
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
                <input type="hidden" value="<?php echo $pagina ?>" id="page" name="page">
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

              <table class="zebra-striped" id="table-zebra-striped">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Existencia</th>
                    <th>Precio</th>
                    <th>Seleccionar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($articulos) : ?>
                  <?php foreach($articulos->toArray() as $index => $art) : ?>
                  <tr>
                    <td><?php echo $art['co_art'] ?></td>
                    <td><?php echo $art['art_des'] ?></td>
                    <td><?php echo ($art['stock_act']==0) ? '<strong>Sin Existencia</strong>' : $art['stock_act'] ?></td>
                    <td><h4> <strong> <?php echo number_format($art['prec_vta5'], 2,',','.') ?> </strong> </h4></td>
                    <td>
                      <?php  if($art['stock_act']>0) : ?>
                        <a id="btn<?php echo $index ?>" class="btn small" href="javascript:agregar_articulo('<?php echo 'btn'.$index ?>','<?php echo 'loader'.$index ?>','<?php echo $art['co_art'] ?>')">Agregar</a>
                        <img id="loader<?php echo $index ?>" src="/images/loader.gif" style="vertical-align: middle; display: none" />
                      <?php endif; ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <div class="pagination">
                    <ul>
                      <li class="prev"><a href="#" id="previous">← Anterior</a></li>
                      <li class="next"><a href="#" id="next">Siguiente →</a></li>
                    </ul>
                    
                  </div>
                  Pagina <?php echo $pagina ?> de <?php echo $total ?> 
                  <img id="loaderpager" src="/images/loader.gif" style="vertical-align: middle; display: none" />
                  <?php endif; ?>
                </tbody>
              </table>

            </fieldset>
          </div>
        </div>
      </div>


   <div class="hero-unit">
    <div class="row">
      <div class="span16 columns">
          <h2>Articulos Seleccionados</h2>
          <div id="arts">
            <?php include_partial('seleccionados', array('seleccionados' => $seleccionados)) ?>
          </div>
          <?php echo link_to1('Calcular', 'presupuestos/presupuesto', array('class' => 'btn primary')); ?>
          <?php echo link_to1('Limpiar', 'presupuestos/limpiar', array('class' => 'btn')); ?>
      </div>
    </div>
  </div>
  </div>