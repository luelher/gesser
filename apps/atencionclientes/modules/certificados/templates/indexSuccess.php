<?php use_helper('I18N', 'Date') ?>

<div class="quickstart">
  <div class="hero-unit">
    <div class="row">
      <div class="span16">
        <form method="post">
          <fieldset>
            <h2>Impresión de Certificados De Origen</h2>
            <p>Introduzca el número de la factura para luego imprimir el Certificado de Origen</p>

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

            <?php echo $formFactura ?>
            <div class="actions">
              <input type="submit" id="factura_buscar" name="factura[buscar]" value="Buscar" class="btn primary">
            </div>

            <?php echo $formDetalle ?>
            <div class="actions">
              <input type="submit" id="detalle_imprimir" name="detalle[imprimir]" value="Imprimir" class="btn info">
              <input type="submit" id="detalle_limpiar" name="detalle[limpiar]" value="Limpiar" class="btn new">
            </div>


          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
