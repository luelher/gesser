<?php

/**
 * RengTab filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengTabFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_islr'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'add_empty' => true)),
      'porc_ret' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_imp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraen' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'islr_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_islr'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ConIslr'), 'column' => 'co_islr')),
      'porc_ret' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_imp' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sustraen' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'islr_des' => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tab_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTab';
  }

  public function getFields()
  {
    return array(
      'co_tab'   => 'Number',
      'reng_num' => 'Number',
      'co_islr'  => 'ForeignKey',
      'porc_ret' => 'Number',
      'porc_imp' => 'Number',
      'sustraen' => 'Number',
      'islr_des' => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
