<?php

/**
 * Ambordpa form base class.
 *
 * @method Ambordpa getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbordpaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'     => new sfWidgetFormInputHidden(),
      'ord_numv'     => new sfWidgetFormInputCheckbox(),
      'fechav'       => new sfWidgetFormInputCheckbox(),
      'cod_bend'     => new sfWidgetFormInputCheckbox(),
      'cod_benv'     => new sfWidgetFormInputCheckbox(),
      'cod_ben'      => new sfWidgetFormInputText(),
      'forma_pagd'   => new sfWidgetFormInputCheckbox(),
      'forma_pagv'   => new sfWidgetFormInputCheckbox(),
      'forma_pag'    => new sfWidgetFormInputText(),
      'montov'       => new sfWidgetFormInputCheckbox(),
      'tipo_impd'    => new sfWidgetFormInputCheckbox(),
      'tipo_impv'    => new sfWidgetFormInputCheckbox(),
      'tipo_imp'     => new sfWidgetFormInputText(),
      'fec_pagv'     => new sfWidgetFormInputCheckbox(),
      'cod_ctad'     => new sfWidgetFormInputCheckbox(),
      'cod_ctav'     => new sfWidgetFormInputCheckbox(),
      'cod_cta'      => new sfWidgetFormInputText(),
      'chequev'      => new sfWidgetFormInputCheckbox(),
      'cod_cajad'    => new sfWidgetFormInputCheckbox(),
      'cod_cajav'    => new sfWidgetFormInputCheckbox(),
      'cod_caja'     => new sfWidgetFormInputText(),
      'islrv'        => new sfWidgetFormInputCheckbox(),
      'cta_egred'    => new sfWidgetFormInputCheckbox(),
      'cta_egrev'    => new sfWidgetFormInputCheckbox(),
      'cta_egre'     => new sfWidgetFormInputText(),
      'tasav'        => new sfWidgetFormInputCheckbox(),
      'monedad'      => new sfWidgetFormInputCheckbox(),
      'monedav'      => new sfWidgetFormInputCheckbox(),
      'moneda'       => new sfWidgetFormInputText(),
      'campo1'       => new sfWidgetFormInputText(),
      'campo2'       => new sfWidgetFormInputText(),
      'campo3'       => new sfWidgetFormInputText(),
      'campo4'       => new sfWidgetFormInputText(),
      'campo5'       => new sfWidgetFormInputText(),
      'campo6'       => new sfWidgetFormInputText(),
      'campo7'       => new sfWidgetFormInputText(),
      'campo8'       => new sfWidgetFormInputText(),
      'co_us_in'     => new sfWidgetFormInputText(),
      'fe_us_in'     => new sfWidgetFormDateTime(),
      'co_us_mo'     => new sfWidgetFormInputText(),
      'fe_us_mo'     => new sfWidgetFormDateTime(),
      'co_us_el'     => new sfWidgetFormInputText(),
      'fe_us_el'     => new sfWidgetFormDateTime(),
      'revisado'     => new sfWidgetFormInputText(),
      'trasnfe'      => new sfWidgetFormInputText(),
      'co_sucu'      => new sfWidgetFormInputText(),
      'impriv'       => new sfWidgetFormInputCheckbox(),
      'pago1v'       => new sfWidgetFormInputCheckbox(),
      'pago2v'       => new sfWidgetFormInputCheckbox(),
      'detallev'     => new sfWidgetFormInputCheckbox(),
      'descripv'     => new sfWidgetFormInputCheckbox(),
      'rowguid'      => new sfWidgetFormInputText(),
      'bt_anular'    => new sfWidgetFormInputCheckbox(),
      'bt_reactivar' => new sfWidgetFormInputCheckbox(),
      'permodret'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'amb_usua'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'ord_numv'     => new sfValidatorBoolean(array('required' => false)),
      'fechav'       => new sfValidatorBoolean(array('required' => false)),
      'cod_bend'     => new sfValidatorBoolean(array('required' => false)),
      'cod_benv'     => new sfValidatorBoolean(array('required' => false)),
      'cod_ben'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'forma_pagd'   => new sfValidatorBoolean(array('required' => false)),
      'forma_pagv'   => new sfValidatorBoolean(array('required' => false)),
      'forma_pag'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'montov'       => new sfValidatorBoolean(array('required' => false)),
      'tipo_impd'    => new sfValidatorBoolean(array('required' => false)),
      'tipo_impv'    => new sfValidatorBoolean(array('required' => false)),
      'tipo_imp'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fec_pagv'     => new sfValidatorBoolean(array('required' => false)),
      'cod_ctad'     => new sfValidatorBoolean(array('required' => false)),
      'cod_ctav'     => new sfValidatorBoolean(array('required' => false)),
      'cod_cta'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'chequev'      => new sfValidatorBoolean(array('required' => false)),
      'cod_cajad'    => new sfValidatorBoolean(array('required' => false)),
      'cod_cajav'    => new sfValidatorBoolean(array('required' => false)),
      'cod_caja'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'islrv'        => new sfValidatorBoolean(array('required' => false)),
      'cta_egred'    => new sfValidatorBoolean(array('required' => false)),
      'cta_egrev'    => new sfValidatorBoolean(array('required' => false)),
      'cta_egre'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tasav'        => new sfValidatorBoolean(array('required' => false)),
      'monedad'      => new sfValidatorBoolean(array('required' => false)),
      'monedav'      => new sfValidatorBoolean(array('required' => false)),
      'moneda'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'campo1'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'     => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'     => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'     => new sfValidatorDateTime(array('required' => false)),
      'revisado'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'impriv'       => new sfValidatorBoolean(array('required' => false)),
      'pago1v'       => new sfValidatorBoolean(array('required' => false)),
      'pago2v'       => new sfValidatorBoolean(array('required' => false)),
      'detallev'     => new sfValidatorBoolean(array('required' => false)),
      'descripv'     => new sfValidatorBoolean(array('required' => false)),
      'rowguid'      => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'bt_anular'    => new sfValidatorBoolean(array('required' => false)),
      'bt_reactivar' => new sfValidatorBoolean(array('required' => false)),
      'permodret'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambordpa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambordpa';
  }

}
