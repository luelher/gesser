<?php

/**
 * RengAra filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengAraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'reng_ara' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_reng' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_ara' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'reng_ara' => new sfValidatorPass(array('required' => false)),
      'des_reng' => new sfValidatorPass(array('required' => false)),
      'porc_ara' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_ara_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAra';
  }

  public function getFields()
  {
    return array(
      'co_art'   => 'Text',
      'reng_ara' => 'Text',
      'des_reng' => 'Text',
      'co_conv'  => 'Text',
      'porc_ara' => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
