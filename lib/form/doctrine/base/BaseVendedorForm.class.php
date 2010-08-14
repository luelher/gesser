<?php

/**
 * Vendedor form base class.
 *
 * @method Vendedor getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVendedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ven'     => new sfWidgetFormInputHidden(),
      'tipo'       => new sfWidgetFormInputText(),
      'ven_des'    => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'cedula'     => new sfWidgetFormInputText(),
      'direc1'     => new sfWidgetFormInputText(),
      'direc2'     => new sfWidgetFormInputText(),
      'telefonos'  => new sfWidgetFormInputText(),
      'fecha_reg'  => new sfWidgetFormDateTime(),
      'condic'     => new sfWidgetFormInputCheckbox(),
      'comision'   => new sfWidgetFormInputText(),
      'comen'      => new sfWidgetFormTextarea(),
      'fun_cob'    => new sfWidgetFormInputCheckbox(),
      'fun_ven'    => new sfWidgetFormInputCheckbox(),
      'comisionv'  => new sfWidgetFormInputText(),
      'fac_ult_ve' => new sfWidgetFormInputText(),
      'fec_ult_ve' => new sfWidgetFormDateTime(),
      'net_ult_ve' => new sfWidgetFormInputText(),
      'cli_ult_ve' => new sfWidgetFormInputText(),
      'cta_contab' => new sfWidgetFormInputText(),
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
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'login'      => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'psw_m'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_ven'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ven')), 'empty_value' => $this->getObject()->get('co_ven'), 'required' => false)),
      'tipo'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'ven_des'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'cedula'     => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'direc1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'direc2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fecha_reg'  => new sfValidatorDateTime(array('required' => false)),
      'condic'     => new sfValidatorBoolean(array('required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
      'comen'      => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'fun_cob'    => new sfValidatorBoolean(array('required' => false)),
      'fun_ven'    => new sfValidatorBoolean(array('required' => false)),
      'comisionv'  => new sfValidatorNumber(array('required' => false)),
      'fac_ult_ve' => new sfValidatorInteger(array('required' => false)),
      'fec_ult_ve' => new sfValidatorDateTime(array('required' => false)),
      'net_ult_ve' => new sfValidatorNumber(array('required' => false)),
      'cli_ult_ve' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cta_contab' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
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
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'login'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'password'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'psw_m'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

}
