<?php

/**
 * TEMPORAL filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTEMPORALFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'campo1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'campo1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'campo2' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('temporal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TEMPORAL';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'campo1' => 'Number',
      'campo2' => 'Text',
    );
  }
}
