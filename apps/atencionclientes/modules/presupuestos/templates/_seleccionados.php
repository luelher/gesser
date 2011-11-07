  <table class="zebra-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0; ?>
      <?php if ($seleccionados) : ?>
      <?php foreach($seleccionados as $index => $select) : ?>
      <tr>
        <td><?php echo $select->getCoArt() ?></td>
        <td><?php echo $select->getArtDes() ?></td>
        <td><h4> <strong> <?php echo $select->getCantidad() ?> </strong> </h4></td>
        <td><h4> <strong> <?php echo number_format($select->getCantidad() * $select->getPrecVta5(), 2,',','.') ?> </strong> </h4></td>
        <td><?php echo link_to1('Eliminar', "eliminar/co_art/".$select->getCoArt(),array('class' => 'btn') ); ?></td>
      </tr>
      <?php $total += ($select->getCantidad() * $select->getPrecVta5()) ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
  <div class="span-one-third columns offset-two-thirds"><h4> <strong> Total: <?php echo number_format(round($total,2), 2,',','.') ?> Bsf</strong> </h4> </div>
