<?php

/**
 * Servicios filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiciosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'situacion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(array('format' => 'd/m/Y')), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
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

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicios';
  }

  public function getFields()
  {
    return array(
      'cliente'     => 'Text',
      'situacion'   => 'Text',
      'observacion' => 'Text',
      'fecha'       => 'Date',
      'id'          => 'Number',
      'factura'     => 'Number',
      'articulo'    => 'Text',
      'estado'      => 'Text',
    );
  }
}
