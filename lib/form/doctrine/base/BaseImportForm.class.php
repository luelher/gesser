<?php

/**
 * Import form base class.
 *
 * @method Import getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseImportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imp_num'  => new sfWidgetFormInputHidden(),
      'status'   => new sfWidgetFormInputText(),
      'fec_imp'  => new sfWidgetFormDateTime(),
      'descrip'  => new sfWidgetFormInputText(),
      'co_mone'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'co_sucu'  => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'revisado' => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'ajus_num' => new sfWidgetFormInputText(),
      'n_cost_b' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'tasa'     => new sfWidgetFormInputText(),
      'd_gasto'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'imp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('imp_num')), 'empty_value' => $this->getObject()->get('imp_num'), 'required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'fec_imp'  => new sfValidatorDateTime(array('required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'co_mone'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'ajus_num' => new sfValidatorInteger(array('required' => false)),
      'n_cost_b' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tasa'     => new sfValidatorNumber(array('required' => false)),
      'd_gasto'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('import[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Import';
  }

}
