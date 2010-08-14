<td colspan="3">
  <?php echo __('%%nombre%% - %%accion%% - %%fecha%%', array('%%nombre%%' => link_to($acciones->getNombre(), 'acciones_edit', $acciones), '%%accion%%' => $acciones->getAccion(), '%%fecha%%' => false !== strtotime($acciones->getFecha()) ? format_date($acciones->getFecha(), "f") : '&nbsp;'), 'messages') ?>
</td>
