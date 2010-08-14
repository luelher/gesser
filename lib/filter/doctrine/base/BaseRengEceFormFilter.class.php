<?php

/**
 * RengEce filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengEceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_emp'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spemple'), 'add_empty' => true)),
      'cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horas'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_emp'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spemple'), 'column' => 'co_emp')),
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'horas'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_ece_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEce';
  }

  public function getFields()
  {
    return array(
      'co_ced'   => 'Number',
      'reng_num' => 'Number',
      'co_emp'   => 'ForeignKey',
      'cantidad' => 'Number',
      'horas'    => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
