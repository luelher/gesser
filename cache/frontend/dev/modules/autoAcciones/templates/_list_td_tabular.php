<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo link_to($acciones->getNombre(), 'acciones_edit', $acciones) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_accion">
  <?php echo $acciones->getAccion() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha">
  <?php echo false !== strtotime($acciones->getFecha()) ? format_date($acciones->getFecha(), "f") : '&nbsp;' ?>
</td>
