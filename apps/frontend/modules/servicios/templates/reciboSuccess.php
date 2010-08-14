<?php use_helper('I18N') ?>

<?php echo __('Agencia Royal 33 C.A. 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
//    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .
    '								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Servicio Nro: ').__($servicio_id) ?></br>
<?php echo __('RIF: J-00000525-7') ?></br>
<?php echo __('Dirección: Av. 20 entre carreras 32 y 33. Barquisimeto. Edo Lara') ?></br>
<?php echo __('Telefonos: (0251)2329080-2329968') ?></br>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><U><?php echo __('CONSTANCIA DE RECEPCIÓN DE EQUIPOS') ?></U></strong></br>
</br>
</br>
<?php echo 'Hemos recibido del Sr/Sra: '; if($servicio) echo $servicio->getNombre(); ?>
<?php echo ', C.I: '.$servicio->getCliente() ?>
<?php echo ', los Siguientes equipos:' ?>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong><?php echo ' Factura Nro '.$servicio->getFactura().' de Fecha: '.$servicio->getFactFecEmis() ?></strong></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong><?php echo ' - '.$servicio->getNomart() ?></strong>
</br>
</br>
<?php echo 'Presentando el siguiente problema: '; ?>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $servicio->getSituacion() ?>
</br>
</br>
<?php echo tag('textarea','dir','Dirección del Cliente: ', 'size=20x1 style="border:none" readonly=true'); ?>
<?php echo tag('textarea','textdir', $servicio->getDireccion(), 'size=40x1 style="border:none" readonly=true' ) ?>
</br>
<?php echo tag('textarea', 'telf','Telefonos del Cliente: ', 'size=20x1 style="border:none" readonly=true'); ?>
<?php echo tag('textarea', 'texttelf', $servicio->getTelefonos(), 'size=40x1 style="border:none" readonly=true' ) ?>

<a href="javascript:window.print();">Imprimir</a>
