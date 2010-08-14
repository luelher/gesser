<!-- apps/frontend/modules/job/templates/_form.php -->
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<div>
<?php echo form_tag('informenes/servicios') ?>
      <?php echo $form ?>
  <input type="submit" name="Enviar">
</form>
</div>