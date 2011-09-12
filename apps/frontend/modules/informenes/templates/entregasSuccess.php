<!-- apps/frontend/modules/job/templates/_form.php -->
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div>
  <h1>Informe de Servicios</h1>
</div>

<div>
<?php echo form_tag('informenes/entregas') ?>
      <?php echo $form ?>
  <input type="submit" name="generar">
  <br>
  <p><?php echo $mensaje ?></p>
</form>
</div>