<?php

/**
 * Criterio Busqueda form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Luis hernandez
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CriterioBusquedaForm extends sfForm
{
  public function configure()
  {

    $format = 'd/m/Y';

    $this->setWidgets(array(
      'fecha_desde'       => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)),
      'fecha_hasta'       => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)),
    ));

    $this->setValidators(array(
      'fecha_desde'       => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')),
      'fecha_hasta'       => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')),
    ));

    $this->widgetSchema->setNameFormat('criterio[%s]');

    $this->setDefault('fecha_desde',date('Y-m-d'));
    $this->setDefault('fecha_hasta',date('Y-m-d'));

  }
}
