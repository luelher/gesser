<?php

/**
 * Spparmaq form base class.
 *
 * @method Spparmaq getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpparmaqForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'par_num'  => new sfWidgetFormInputHidden(),
      'par_des'  => new sfWidgetFormInputText(),
      'fec_inic' => new sfWidgetFormDateTime(),
      'fec_fin'  => new sfWidgetFormDateTime(),
      'co_maq'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spmaq'), 'add_empty' => false)),
      'co_falla' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spfalla'), 'add_empty' => false)),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'rowguid'  => new sfWidgetFormInputText(),
      'fec_emis' => new sfWidgetFormDateTime(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'par_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('par_num')), 'empty_value' => $this->getObject()->get('par_num'), 'required' => false)),
      'par_des'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fec_inic' => new sfValidatorDateTime(array('required' => false)),
      'fec_fin'  => new sfValidatorDateTime(array('required' => false)),
      'co_maq'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spmaq'), 'required' => false)),
      'co_falla' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spfalla'), 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'fec_emis' => new sfValidatorDateTime(array('required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6)),
    ));

    $this->widgetSchema->setNameFormat('spparmaq[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spparmaq';
  }

}
