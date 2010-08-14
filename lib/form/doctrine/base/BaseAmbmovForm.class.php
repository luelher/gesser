<?php

/**
 * Ambmov form base class.
 *
 * @method Ambmov getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbmovForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'   => new sfWidgetFormInputHidden(),
      'tipo_movi'  => new sfWidgetFormInputHidden(),
      'mov_numv'   => new sfWidgetFormInputCheckbox(),
      'codigov'    => new sfWidgetFormInputCheckbox(),
      'codigod'    => new sfWidgetFormInputCheckbox(),
      'codigo'     => new sfWidgetFormInputText(),
      'tipo_opv'   => new sfWidgetFormInputCheckbox(),
      'tipo_opd'   => new sfWidgetFormInputCheckbox(),
      'tipo_op'    => new sfWidgetFormInputText(),
      'forma_pagv' => new sfWidgetFormInputCheckbox(),
      'forma_pagd' => new sfWidgetFormInputCheckbox(),
      'forma_pag'  => new sfWidgetFormInputText(),
      'fechav'     => new sfWidgetFormInputCheckbox(),
      'doc_numv'   => new sfWidgetFormInputCheckbox(),
      'descripv'   => new sfWidgetFormInputCheckbox(),
      'montov'     => new sfWidgetFormInputCheckbox(),
      'cta_egrev'  => new sfWidgetFormInputCheckbox(),
      'cta_egred'  => new sfWidgetFormInputCheckbox(),
      'cta_egre'   => new sfWidgetFormInputText(),
      'banc_tarjv' => new sfWidgetFormInputCheckbox(),
      'banc_tarjd' => new sfWidgetFormInputCheckbox(),
      'banc_tarj'  => new sfWidgetFormInputText(),
      'bt_reverv'  => new sfWidgetFormInputCheckbox(),
      'bt_anulav'  => new sfWidgetFormInputCheckbox(),
      'tasav'      => new sfWidgetFormInputCheckbox(),
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
    ));

    $this->setValidators(array(
      'amb_usua'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'tipo_movi'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_movi')), 'empty_value' => $this->getObject()->get('tipo_movi'), 'required' => false)),
      'mov_numv'   => new sfValidatorBoolean(array('required' => false)),
      'codigov'    => new sfValidatorBoolean(array('required' => false)),
      'codigod'    => new sfValidatorBoolean(array('required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tipo_opv'   => new sfValidatorBoolean(array('required' => false)),
      'tipo_opd'   => new sfValidatorBoolean(array('required' => false)),
      'tipo_op'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'forma_pagv' => new sfValidatorBoolean(array('required' => false)),
      'forma_pagd' => new sfValidatorBoolean(array('required' => false)),
      'forma_pag'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fechav'     => new sfValidatorBoolean(array('required' => false)),
      'doc_numv'   => new sfValidatorBoolean(array('required' => false)),
      'descripv'   => new sfValidatorBoolean(array('required' => false)),
      'montov'     => new sfValidatorBoolean(array('required' => false)),
      'cta_egrev'  => new sfValidatorBoolean(array('required' => false)),
      'cta_egred'  => new sfValidatorBoolean(array('required' => false)),
      'cta_egre'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'banc_tarjv' => new sfValidatorBoolean(array('required' => false)),
      'banc_tarjd' => new sfValidatorBoolean(array('required' => false)),
      'banc_tarj'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'bt_reverv'  => new sfValidatorBoolean(array('required' => false)),
      'bt_anulav'  => new sfValidatorBoolean(array('required' => false)),
      'tasav'      => new sfValidatorBoolean(array('required' => false)),
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
    ));

    $this->widgetSchema->setNameFormat('ambmov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambmov';
  }

}
