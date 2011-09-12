<?php use_helper('JavascriptBase'); ?>
<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToDelete($servicios, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <?php echo $helper->linkToEdit($servicios, array(  'label' => 'Editar',  'params' =>   array(  ),  'class_suffix' => 'edit',)) ?>
    <li class="sf_admin_action_recibo">
      <?php echo link_to_function(__('Recibo', array(), 'messages'), "var w=window.open('".url_for1('informenes/recibo')."/id/".$servicios->getId()."','true','menubar=no,toolbar=no,scrollbars=yes,width=500,height=600,resizable=yes,left=500,top=80');w.focus();return false;", array()) ?>
    </li>
  </ul>
</td>
