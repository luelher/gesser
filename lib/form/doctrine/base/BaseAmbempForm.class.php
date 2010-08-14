<?php

/**
 * Ambemp form base class.
 *
 * @method Ambemp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbempForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'  => new sfWidgetFormInputHidden(),
      'num_emp'   => new sfWidgetFormInputCheckbox(),
      'fecha'     => new sfWidgetFormInputCheckbox(),
      'tipo_doc'  => new sfWidgetFormInputCheckbox(),
      'nro_orig'  => new sfWidgetFormInputCheckbox(),
      'descrip'   => new sfWidgetFormInputCheckbox(),
      'camp_adi'  => new sfWidgetFormInputCheckbox(),
      'unid'      => new sfWidgetFormInputCheckbox(),
      'bulto'     => new sfWidgetFormInputCheckbox(),
      'agrupar'   => new sfWidgetFormInputCheckbox(),
      'reempaq'   => new sfWidgetFormInputCheckbox(),
      'factura'   => new sfWidgetFormInputCheckbox(),
      'canti'     => new sfWidgetFormInputCheckbox(),
      'canti_d'   => new sfWidgetFormInputCheckbox(),
      'co_us_in'  => new sfWidgetFormInputText(),
      'fe_us_in'  => new sfWidgetFormDateTime(),
      'co_us_mo'  => new sfWidgetFormInputText(),
      'fe_us_mo'  => new sfWidgetFormDateTime(),
      'co_us_el'  => new sfWidgetFormInputText(),
      'fe_us_el'  => new sfWidgetFormDateTime(),
      'co_sucu'   => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'campo1'    => new sfWidgetFormInputText(),
      'campo2'    => new sfWidgetFormInputText(),
      'campo3'    => new sfWidgetFormInputText(),
      'campo4'    => new sfWidgetFormInputText(),
      'campo5'    => new sfWidgetFormInputText(),
      'campo6'    => new sfWidgetFormInputText(),
      'campo7'    => new sfWidgetFormInputText(),
      'campo8'    => new sfWidgetFormInputText(),
      'tipo_d'    => new sfWidgetFormInputCheckbox(),
      'anular'    => new sfWidgetFormInputCheckbox(),
      'dtipodoc'  => new sfWidgetFormInputText(),
      'dcanti'    => new sfWidgetFormInputText(),
      'reng_s'    => new sfWidgetFormInputCheckbox(),
      'revisado'  => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'reng_c'    => new sfWidgetFormInputCheckbox(),
      'coincide'  => new sfWidgetFormInputCheckbox(),
      'envio'     => new sfWidgetFormInputCheckbox(),
      'recibido'  => new sfWidgetFormInputCheckbox(),
      'empacado'  => new sfWidgetFormInputCheckbox(),
      'alma_d'    => new sfWidgetFormInputCheckbox(),
      'alma'      => new sfWidgetFormInputCheckbox(),
      'dalma'     => new sfWidgetFormInputText(),
      'empr'      => new sfWidgetFormInputCheckbox(),
      'finalizar' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'amb_usua'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'num_emp'   => new sfValidatorBoolean(array('required' => false)),
      'fecha'     => new sfValidatorBoolean(array('required' => false)),
      'tipo_doc'  => new sfValidatorBoolean(array('required' => false)),
      'nro_orig'  => new sfValidatorBoolean(array('required' => false)),
      'descrip'   => new sfValidatorBoolean(array('required' => false)),
      'camp_adi'  => new sfValidatorBoolean(array('required' => false)),
      'unid'      => new sfValidatorBoolean(array('required' => false)),
      'bulto'     => new sfValidatorBoolean(array('required' => false)),
      'agrupar'   => new sfValidatorBoolean(array('required' => false)),
      'reempaq'   => new sfValidatorBoolean(array('required' => false)),
      'factura'   => new sfValidatorBoolean(array('required' => false)),
      'canti'     => new sfValidatorBoolean(array('required' => false)),
      'canti_d'   => new sfValidatorBoolean(array('required' => false)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'  => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tipo_d'    => new sfValidatorBoolean(array('required' => false)),
      'anular'    => new sfValidatorBoolean(array('required' => false)),
      'dtipodoc'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'dcanti'    => new sfValidatorNumber(array('required' => false)),
      'reng_s'    => new sfValidatorBoolean(array('required' => false)),
      'revisado'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_c'    => new sfValidatorBoolean(array('required' => false)),
      'coincide'  => new sfValidatorBoolean(array('required' => false)),
      'envio'     => new sfValidatorBoolean(array('required' => false)),
      'recibido'  => new sfValidatorBoolean(array('required' => false)),
      'empacado'  => new sfValidatorBoolean(array('required' => false)),
      'alma_d'    => new sfValidatorBoolean(array('required' => false)),
      'alma'      => new sfValidatorBoolean(array('required' => false)),
      'dalma'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'empr'      => new sfValidatorBoolean(array('required' => false)),
      'finalizar' => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambemp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambemp';
  }

}
