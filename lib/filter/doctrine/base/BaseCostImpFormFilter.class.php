<?php

/**
 * CostImp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCostImpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'monto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'monto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cost_imp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CostImp';
  }

  public function getFields()
  {
    return array(
      'co_art'   => 'Text',
      'nivel'    => 'Text',
      'monto'    => 'Number',
      'nro_doc'  => 'Number',
      'reng_doc' => 'Number',
      'tipo_doc' => 'Text',
      'fecha'    => 'Date',
      'rowguid'  => 'Text',
    );
  }
}
