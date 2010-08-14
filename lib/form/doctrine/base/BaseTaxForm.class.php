<?php

/**
 * Tax form base class.
 *
 * @method Tax getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaxForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tax_id'   => new sfWidgetFormInputHidden(),
      'tax_des'  => new sfWidgetFormInputText(),
      'entidad'  => new sfWidgetFormInputText(),
      'tasa1'    => new sfWidgetFormInputText(),
      'tasa2'    => new sfWidgetFormInputText(),
      'tasa3'    => new sfWidgetFormInputText(),
      'formula'  => new sfWidgetFormInputCheckbox(),
      'limite'   => new sfWidgetFormInputText(),
      'porc1'    => new sfWidgetFormInputText(),
      'porc2'    => new sfWidgetFormInputText(),
      'dis_cen'  => new sfWidgetFormTextarea(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
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
    ));

    $this->setValidators(array(
      'tax_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tax_id')), 'empty_value' => $this->getObject()->get('tax_id'), 'required' => false)),
      'tax_des'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'entidad'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tasa1'    => new sfValidatorNumber(array('required' => false)),
      'tasa2'    => new sfValidatorNumber(array('required' => false)),
      'tasa3'    => new sfValidatorNumber(array('required' => false)),
      'formula'  => new sfValidatorBoolean(array('required' => false)),
      'limite'   => new sfValidatorNumber(array('required' => false)),
      'porc1'    => new sfValidatorNumber(array('required' => false)),
      'porc2'    => new sfValidatorNumber(array('required' => false)),
      'dis_cen'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tax[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tax';
  }

}
