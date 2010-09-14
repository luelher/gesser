<?php

/**
 * Entregas filter form.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EntregasFormFilter extends BaseEntregasFormFilter
{
  public function configure()
  {
    $format = 'd/m/Y';

    $this->setWidgets(array(
      'servicios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => true)),
      'observacion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)), 'to_date' => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format),array('value' => date('Y-m-d'))), 'with_empty' => false, 'template' => 'desde %from_date%<br />hasta %to_date%')),
    ));

    $this->setValidators(array(
      'servicios_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Servicio'), 'column' => 'id')),
      'observacion'  => new sfValidatorPass(array('required' => false)),
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')), 'to_date' => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')))),
    ));

    $this->widgetSchema->setNameFormat('entregas_filters[%s]');

    $this->setDefault('fecha',array('from' => date('Y-m-d'), 'to' => date('Y-m-d')));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();
  }
}
