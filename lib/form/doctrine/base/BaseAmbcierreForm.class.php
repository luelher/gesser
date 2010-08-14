<?php

/**
 * Ambcierre form base class.
 *
 * @method Ambcierre getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbcierreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'   => new sfWidgetFormInputHidden(),
      'ent_num'    => new sfWidgetFormInputCheckbox(),
      'almacen'    => new sfWidgetFormInputCheckbox(),
      'almacend'   => new sfWidgetFormInputCheckbox(),
      'co_alma'    => new sfWidgetFormInputText(),
      'bt_serial'  => new sfWidgetFormInputCheckbox(),
      'bt_anulo'   => new sfWidgetFormInputCheckbox(),
      'bt_reversa' => new sfWidgetFormInputCheckbox(),
      'fecha'      => new sfWidgetFormInputCheckbox(),
      'bt_confirm' => new sfWidgetFormInputCheckbox(),
      'odp_num'    => new sfWidgetFormInputCheckbox(),
      'ent_des'    => new sfWidgetFormInputCheckbox(),
      'bt_decon'   => new sfWidgetFormInputCheckbox(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'rowguid'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'amb_usua'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'ent_num'    => new sfValidatorBoolean(array('required' => false)),
      'almacen'    => new sfValidatorBoolean(array('required' => false)),
      'almacend'   => new sfValidatorBoolean(array('required' => false)),
      'co_alma'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'bt_serial'  => new sfValidatorBoolean(array('required' => false)),
      'bt_anulo'   => new sfValidatorBoolean(array('required' => false)),
      'bt_reversa' => new sfValidatorBoolean(array('required' => false)),
      'fecha'      => new sfValidatorBoolean(array('required' => false)),
      'bt_confirm' => new sfValidatorBoolean(array('required' => false)),
      'odp_num'    => new sfValidatorBoolean(array('required' => false)),
      'ent_des'    => new sfValidatorBoolean(array('required' => false)),
      'bt_decon'   => new sfValidatorBoolean(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambcierre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambcierre';
  }

}
