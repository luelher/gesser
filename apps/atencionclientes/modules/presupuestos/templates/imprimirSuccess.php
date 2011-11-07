<div class="quickstart">
  <div class="hero-unit">
    <div class="row">
      <div class="span7 columns">


        <table class="zebra-striped">
          <thead>
            <tr>
              <th>Código</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Precio</th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; ?>
            <?php if ($seleccionados) : ?>
            <?php foreach ($seleccionados as $index => $select) : ?>
                <tr>
                  <td><?php echo $select->getCoArt() ?></td>
                  <td><?php echo $select->getArtDes() ?></td>
                  <td><h4> <strong> <?php echo $select->getCantidad() ?> </strong> </h4></td>
                  <td><h4> <strong> <?php echo number_format($select->getCantidad() * $select->getPrecVta5(), 2, ',', '.') ?> </strong> </h4></td>
                </tr>
            <?php $total += ( $select->getCantidad() * $select->getPrecVta5()) ?>
            <?php endforeach; ?>
            <?php endif; ?>
              </tbody>
            </table>
            <h4> <strong> Total: <?php echo number_format(round($total, 2), 2, ',', '.') ?> Bsf</strong> </h4>

          </div>
          <div class="span7 columns">

            <h3>Financiamiento</h3>
        <table class="zebra-striped">
          <thead>
            <tr>
              <th>Total</th>
              <th>Porcentaje Inicial</th>
              <th>Incial</th>
              <th>Cuotas</th>
              <th>Monto Cuota</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                  <td><h4> <strong> <?php echo $saldo != '' ? number_format($total, 2, ',', '.') : '';  ?> </strong> </h4></td>
                  <td><h4> <strong> <?php echo $porcentaje_inicial != '' ? number_format($porcentaje_inicial, 2, ',', '.') : '0,0'; ?> % </strong> </h4></td>
                  <td><h4> <strong> <?php echo $inicial != '' ? number_format($inicial, 2, ',', '.') : '0,0'; ?> </strong> </h4></td>
                  <td><h4> <strong> <?php echo $cuotas != '' ? number_format($cuotas, 0, ',', '.') : '';  ?> </strong> </h4></td>
                  <td><h4> <strong> <?php echo $cuota_mensual != '' ? number_format($cuota_mensual, 2, ',', '.') : ''; ?> </strong> </h4></td>
                </tr>
              </tbody>
            </table>

      </div>
    </div>
  </div>
</div>

