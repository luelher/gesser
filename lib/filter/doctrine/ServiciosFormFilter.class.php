<?php

/**
 * Servicios filter form.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosFormFilter extends BaseServiciosFormFilter
{
  public function configure()
  {
    $format = 'd/m/Y';

    $this->setWidgets(array(
      'cliente'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'situacion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)), 'to_date' => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format),array('value' => date('Y-m-d'))), 'with_empty' => false, 'template' => 'desde %from_date%<br />hasta %to_date%')),
      'factura'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'articulo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cliente'     => new sfValidatorPass(array('required' => false)),
      'situacion'   => new sfValidatorPass(array('required' => false)),
      'observacion' => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')), 'to_date' => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')))),
      'factura'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'articulo'    => new sfValidatorPass(array('required' => false)),
      'estado'      => new sfValidatorPass(array('required' => false)),
      'id'     => new sfValidatorPass(array('required' => false)),      
    ));

    $this->widgetSchema->setNameFormat('servicios_filters[%s]');

    $this->setDefault('fecha',array('from' => date('Y-m-d'), 'to' => date('Y-m-d')));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();
  }
}
