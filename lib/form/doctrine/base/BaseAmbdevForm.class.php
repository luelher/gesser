<?php

/**
 * Ambdev form base class.
 *
 * @method Ambdev getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbdevForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'   => new sfWidgetFormInputHidden(),
      'almaori'    => new sfWidgetFormInputCheckbox(),
      'almorid'    => new sfWidgetFormInputCheckbox(),
      'alma_ori'   => new sfWidgetFormInputText(),
      'almades'    => new sfWidgetFormInputCheckbox(),
      'almdesd'    => new sfWidgetFormInputCheckbox(),
      'alma_des'   => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormInputCheckbox(),
      'motivo'     => new sfWidgetFormInputCheckbox(),
      'bt_ser'     => new sfWidgetFormInputCheckbox(),
      'bt_anula'   => new sfWidgetFormInputCheckbox(),
      'bt_reversa' => new sfWidgetFormInputCheckbox(),
      'confirma'   => new sfWidgetFormInputCheckbox(),
      'desconfima' => new sfWidgetFormInputCheckbox(),
      'stock_neg'  => new sfWidgetFormInputCheckbox(),
      'pstock_neg' => new sfWidgetFormInputCheckbox(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'p_lotefec'  => new sfWidgetFormInputCheckbox(),
      'dev_num'    => new sfWidgetFormInputCheckbox(),
      'devolver'   => new sfWidgetFormInputCheckbox(),
      'odp_num'    => new sfWidgetFormInputCheckbox(),
      'rowguid'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'amb_usua'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'almaori'    => new sfValidatorBoolean(array('required' => false)),
      'almorid'    => new sfValidatorBoolean(array('required' => false)),
      'alma_ori'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'almades'    => new sfValidatorBoolean(array('required' => false)),
      'almdesd'    => new sfValidatorBoolean(array('required' => false)),
      'alma_des'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fecha'      => new sfValidatorBoolean(array('required' => false)),
      'motivo'     => new sfValidatorBoolean(array('required' => false)),
      'bt_ser'     => new sfValidatorBoolean(array('required' => false)),
      'bt_anula'   => new sfValidatorBoolean(array('required' => false)),
      'bt_reversa' => new sfValidatorBoolean(array('required' => false)),
      'confirma'   => new sfValidatorBoolean(array('required' => false)),
      'desconfima' => new sfValidatorBoolean(array('required' => false)),
      'stock_neg'  => new sfValidatorBoolean(array('required' => false)),
      'pstock_neg' => new sfValidatorBoolean(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'p_lotefec'  => new sfValidatorBoolean(array('required' => false)),
      'dev_num'    => new sfValidatorBoolean(array('required' => false)),
      'devolver'   => new sfValidatorBoolean(array('required' => false)),
      'odp_num'    => new sfValidatorBoolean(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambdev[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambdev';
  }

}
