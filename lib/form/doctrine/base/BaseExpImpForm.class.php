<?php

/**
 * ExpImp form base class.
 *
 * @method ExpImp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExpImpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exp_num'  => new sfWidgetFormInputHidden(),
      'exp_nro'  => new sfWidgetFormInputText(),
      'descrip'  => new sfWidgetFormInputText(),
      'co_age'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => false)),
      'fec_emis' => new sfWidgetFormDateTime(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'imp_num'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Import'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'exp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exp_num')), 'empty_value' => $this->getObject()->get('exp_num'), 'required' => false)),
      'exp_nro'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_age'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'required' => false)),
      'fec_emis' => new sfValidatorDateTime(array('required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'imp_num'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Import'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('exp_imp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExpImp';
  }

}
