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
    $this->setWidgets(array(
      'cliente'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'situacion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')), 'to_date' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')), 'with_empty' => false, 'template' => 'Desde %from_date% <br > Hasta %to_date%')),
      'factura'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'articulo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cliente'     => new sfValidatorPass(array('required' => false)),
      'situacion'   => new sfValidatorPass(array('required' => false)),
      'observacion' => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'factura'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'articulo'    => new sfValidatorPass(array('required' => false)),
      'estado'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();
  }
}
