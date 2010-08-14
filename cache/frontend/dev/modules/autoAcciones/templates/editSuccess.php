<?php use_helper('I18N', 'Date') ?>
<?php include_partial('acciones/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de Acciones', array(), 'messages') ?></h1>

  <?php include_partial('acciones/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('acciones/form_header', array('acciones' => $acciones, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('acciones/form', array('acciones' => $acciones, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('acciones/form_footer', array('acciones' => $acciones, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
