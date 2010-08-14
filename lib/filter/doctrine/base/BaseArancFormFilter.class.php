<?php

/**
 * Aranc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArancFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ara'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_ara'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_ara' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_ara'   => new sfValidatorPass(array('required' => false)),
      'des_ara'  => new sfValidatorPass(array('required' => false)),
      'porc_ara' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'calidad'  => new sfValidatorPass(array('required' => false)),
      'nivel'    => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aranc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aranc';
  }

  public function getFields()
  {
    return array(
      'co_art'   => 'Text',
      'co_ara'   => 'Text',
      'des_ara'  => 'Text',
      'porc_ara' => 'Number',
      'calidad'  => 'Text',
      'nivel'    => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
