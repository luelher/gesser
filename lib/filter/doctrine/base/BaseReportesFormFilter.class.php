<?php

/**
 * Reportes filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReportesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'campo1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'campo1'  => new sfValidatorPass(array('required' => false)),
      'rowguid' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reportes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reportes';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'campo1'  => 'Text',
      'rowguid' => 'Text',
    );
  }
}
