<?php

/**
 * Spced form base class.
 *
 * @method Spced getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpcedForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ced'    => new sfWidgetFormInputHidden(),
      'ced_des'   => new sfWidgetFormInputText(),
      'cap_max'   => new sfWidgetFormInputText(),
      'estandar'  => new sfWidgetFormInputCheckbox(),
      'fec_emis'  => new sfWidgetFormDateTime(),
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'cantidad'  => new sfWidgetFormInputText(),
      'co_uni'    => new sfWidgetFormInputText(),
      'co_dep'    => new sfWidgetFormInputText(),
      'campo1'    => new sfWidgetFormInputText(),
      'campo2'    => new sfWidgetFormInputText(),
      'campo3'    => new sfWidgetFormInputText(),
      'campo4'    => new sfWidgetFormInputText(),
      'campo5'    => new sfWidgetFormInputText(),
      'campo6'    => new sfWidgetFormInputText(),
      'campo7'    => new sfWidgetFormInputText(),
      'campo8'    => new sfWidgetFormInputText(),
      'co_us_in'  => new sfWidgetFormInputText(),
      'co_us_mo'  => new sfWidgetFormInputText(),
      'co_us_el'  => new sfWidgetFormInputText(),
      'fe_us_in'  => new sfWidgetFormDateTime(),
      'fe_us_mo'  => new sfWidgetFormDateTime(),
      'fe_us_el'  => new sfWidgetFormDateTime(),
      'rowguid'   => new sfWidgetFormInputText(),
      'co_sucu'   => new sfWidgetFormInputText(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'numcom'    => new sfWidgetFormInputText(),
      'feccom'    => new sfWidgetFormDateTime(),
      'dias'      => new sfWidgetFormInputText(),
      'horas'     => new sfWidgetFormInputText(),
      'por_cos'   => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'total_uni' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_ced'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ced')), 'empty_value' => $this->getObject()->get('co_ced'), 'required' => false)),
      'ced_des'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cap_max'   => new sfValidatorNumber(array('required' => false)),
      'estandar'  => new sfValidatorBoolean(array('required' => false)),
      'fec_emis'  => new sfValidatorDateTime(array('required' => false)),
      'co_art'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'cantidad'  => new sfValidatorNumber(array('required' => false)),
      'co_uni'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_dep'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'  => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateTime(array('required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_sucu'   => new sfValidatorString(array('max_length' => 6)),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'numcom'    => new sfValidatorInteger(array('required' => false)),
      'feccom'    => new sfValidatorDateTime(array('required' => false)),
      'dias'      => new sfValidatorInteger(array('required' => false)),
      'horas'     => new sfValidatorNumber(array('required' => false)),
      'por_cos'   => new sfValidatorNumber(array('required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1)),
      'total_uni' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spced[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spced';
  }

}
