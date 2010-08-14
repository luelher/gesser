<?php

/**
 * Acciones filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'servicios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => true)),
      'accion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'servicios_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Servicio'), 'column' => 'id')),
      'accion'       => new sfValidatorPass(array('required' => false)),
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('acciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Acciones';
  }

  public function getFields()
  {
    return array(
      'servicios_id' => 'ForeignKey',
      'accion'       => 'Text',
      'fecha'        => 'Date',
      'id'           => 'Number',
    );
  }
}
