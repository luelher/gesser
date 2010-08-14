<div class="sf_admin_form_row sf_admin_text sf_admin_form_field_servicio">
    <?php echo $form['id']->renderError() ?>
    <div>
      <?php echo $form['id']->renderLabel('Nro. Servicio') ?>

      <div class="content"><span style="font-size:1.5em"><?php echo $form->getObject()->getId() ?></span></div>

      <div class="help"></div>
    </div>
</div>