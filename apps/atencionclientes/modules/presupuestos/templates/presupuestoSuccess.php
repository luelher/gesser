<?php use_helper('I18N', 'Date') ?>

<div class="quickstart">
  <div class="hero-unit">
    <div class="row">
      <div class="span7 columns">
        <form method="post">
          <fieldset>
            <h2>Calculadora de Giros</h2>
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
              <input type="submit" value="Calcular" class="btn primary">
              <a class="btn" href="presupuesto">Limpiar</a>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="span7 columns">
        <fieldset>
          <h3>Resultados</h3>
          <div class="clearfix alert-message warning">
            <label for="saldo_financiar">Inicial</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($inicial, 2,',','.') : ''; ?></span>  </div>
          </div>
          <div class="clearfix alert-message warning">
            <label for="saldo_financiar">Saldo financiar</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($saldo, 2,',','.') : '';  ?></span>  </div>
          </div>
          <div class="clearfix alert-message warning">
            <label for="numero_cuotas">Numero cuotas</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($cuotas, 2,',','.') : '';  ?></span>  </div>
          </div>
          <div class="clearfix alert-message success">
            <label for="cuota_mensual">Cuota mensual</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($cuota_mensual, 2,',','.') : '';  ?></span>  </div>
          </div>
          <div class="clearfix alert-message warning">
            <label for="total_venta_a_credito">Total venta a credito</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($venta_credito, 2,',','.') : '';  ?></span>  </div>
          </div>
          <div class="clearfix alert-message warning">
            <label for="intereses">Intereses</label>
            <div class="input"> <span class="uneditable-input"><?php echo $inicial!='' ? number_format($intereses, 2,',','.') : ''; ?></span>  </div>
          </div>
        </fieldset>          </div>
    </div>
  </div>
</div>