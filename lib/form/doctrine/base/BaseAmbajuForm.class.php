<?php

/**
 * Ambaju form base class.
 *
 * @method Ambaju getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbajuForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'    => new sfWidgetFormInputHidden(),
      'ajue_num'    => new sfWidgetFormInputCheckbox(),
      'moneda'      => new sfWidgetFormInputCheckbox(),
      'monedad'     => new sfWidgetFormInputCheckbox(),
      'co_mone'     => new sfWidgetFormInputText(),
      'fecha'       => new sfWidgetFormInputCheckbox(),
      'motivo'      => new sfWidgetFormInputCheckbox(),
      'bt_ser_in'   => new sfWidgetFormInputCheckbox(),
      'bt_ser_out'  => new sfWidgetFormInputCheckbox(),
      'bt_anulo'    => new sfWidgetFormInputCheckbox(),
      'bt_reversa'  => new sfWidgetFormInputCheckbox(),
      'almacen'     => new sfWidgetFormInputCheckbox(),
      'almacend'    => new sfWidgetFormInputCheckbox(),
      'co_alma'     => new sfWidgetFormInputText(),
      'cantidad'    => new sfWidgetFormInputCheckbox(),
      'cantidadd'   => new sfWidgetFormInputCheckbox(),
      'stock_act'   => new sfWidgetFormInputText(),
      'unidad'      => new sfWidgetFormInputCheckbox(),
      'costo'       => new sfWidgetFormInputCheckbox(),
      'stock_neg'   => new sfWidgetFormInputCheckbox(),
      'pstock_neg'  => new sfWidgetFormInputCheckbox(),
      'tamcol01'    => new sfWidgetFormInputText(),
      'tamcol02'    => new sfWidgetFormInputText(),
      'tamcol03'    => new sfWidgetFormInputText(),
      'tamcol04'    => new sfWidgetFormInputText(),
      'tamcol05'    => new sfWidgetFormInputText(),
      'tamcol06'    => new sfWidgetFormInputText(),
      'tamcol07'    => new sfWidgetFormInputText(),
      'tamcol08'    => new sfWidgetFormInputText(),
      'tamcol09'    => new sfWidgetFormInputText(),
      'tamcol10'    => new sfWidgetFormInputText(),
      'tamcol11'    => new sfWidgetFormInputText(),
      'tamcol12'    => new sfWidgetFormInputText(),
      'tamcol13'    => new sfWidgetFormInputText(),
      'poscol01'    => new sfWidgetFormInputText(),
      'poscol02'    => new sfWidgetFormInputText(),
      'poscol03'    => new sfWidgetFormInputText(),
      'poscol04'    => new sfWidgetFormInputText(),
      'poscol05'    => new sfWidgetFormInputText(),
      'poscol06'    => new sfWidgetFormInputText(),
      'poscol07'    => new sfWidgetFormInputText(),
      'poscol08'    => new sfWidgetFormInputText(),
      'poscol09'    => new sfWidgetFormInputText(),
      'poscol10'    => new sfWidgetFormInputText(),
      'poscol11'    => new sfWidgetFormInputText(),
      'poscol12'    => new sfWidgetFormInputText(),
      'poscol13'    => new sfWidgetFormInputText(),
      'campo1'      => new sfWidgetFormInputText(),
      'campo2'      => new sfWidgetFormInputText(),
      'campo3'      => new sfWidgetFormInputText(),
      'campo4'      => new sfWidgetFormInputText(),
      'campo5'      => new sfWidgetFormInputText(),
      'campo6'      => new sfWidgetFormInputText(),
      'campo7'      => new sfWidgetFormInputText(),
      'campo8'      => new sfWidgetFormInputText(),
      'co_us_in'    => new sfWidgetFormInputText(),
      'fe_us_in'    => new sfWidgetFormDateTime(),
      'co_us_mo'    => new sfWidgetFormInputText(),
      'fe_us_mo'    => new sfWidgetFormDateTime(),
      'co_us_el'    => new sfWidgetFormInputText(),
      'fe_us_el'    => new sfWidgetFormDateTime(),
      'co_sucu'     => new sfWidgetFormInputText(),
      'rowguid'     => new sfWidgetFormInputText(),
      'p_lotefec'   => new sfWidgetFormInputCheckbox(),
      'p_control_1' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'amb_usua'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'ajue_num'    => new sfValidatorBoolean(array('required' => false)),
      'moneda'      => new sfValidatorBoolean(array('required' => false)),
      'monedad'     => new sfValidatorBoolean(array('required' => false)),
      'co_mone'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fecha'       => new sfValidatorBoolean(array('required' => false)),
      'motivo'      => new sfValidatorBoolean(array('required' => false)),
      'bt_ser_in'   => new sfValidatorBoolean(array('required' => false)),
      'bt_ser_out'  => new sfValidatorBoolean(array('required' => false)),
      'bt_anulo'    => new sfValidatorBoolean(array('required' => false)),
      'bt_reversa'  => new sfValidatorBoolean(array('required' => false)),
      'almacen'     => new sfValidatorBoolean(array('required' => false)),
      'almacend'    => new sfValidatorBoolean(array('required' => false)),
      'co_alma'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cantidad'    => new sfValidatorBoolean(array('required' => false)),
      'cantidadd'   => new sfValidatorBoolean(array('required' => false)),
      'stock_act'   => new sfValidatorNumber(array('required' => false)),
      'unidad'      => new sfValidatorBoolean(array('required' => false)),
      'costo'       => new sfValidatorBoolean(array('required' => false)),
      'stock_neg'   => new sfValidatorBoolean(array('required' => false)),
      'pstock_neg'  => new sfValidatorBoolean(array('required' => false)),
      'tamcol01'    => new sfValidatorInteger(array('required' => false)),
      'tamcol02'    => new sfValidatorInteger(array('required' => false)),
      'tamcol03'    => new sfValidatorInteger(array('required' => false)),
      'tamcol04'    => new sfValidatorInteger(array('required' => false)),
      'tamcol05'    => new sfValidatorInteger(array('required' => false)),
      'tamcol06'    => new sfValidatorInteger(array('required' => false)),
      'tamcol07'    => new sfValidatorInteger(array('required' => false)),
      'tamcol08'    => new sfValidatorInteger(array('required' => false)),
      'tamcol09'    => new sfValidatorInteger(array('required' => false)),
      'tamcol10'    => new sfValidatorInteger(array('required' => false)),
      'tamcol11'    => new sfValidatorInteger(array('required' => false)),
      'tamcol12'    => new sfValidatorInteger(array('required' => false)),
      'tamcol13'    => new sfValidatorInteger(array('required' => false)),
      'poscol01'    => new sfValidatorInteger(array('required' => false)),
      'poscol02'    => new sfValidatorInteger(array('required' => false)),
      'poscol03'    => new sfValidatorInteger(array('required' => false)),
      'poscol04'    => new sfValidatorInteger(array('required' => false)),
      'poscol05'    => new sfValidatorInteger(array('required' => false)),
      'poscol06'    => new sfValidatorInteger(array('required' => false)),
      'poscol07'    => new sfValidatorInteger(array('required' => false)),
      'poscol08'    => new sfValidatorInteger(array('required' => false)),
      'poscol09'    => new sfValidatorInteger(array('required' => false)),
      'poscol10'    => new sfValidatorInteger(array('required' => false)),
      'poscol11'    => new sfValidatorInteger(array('required' => false)),
      'poscol12'    => new sfValidatorInteger(array('required' => false)),
      'poscol13'    => new sfValidatorInteger(array('required' => false)),
      'campo1'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'    => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'    => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'    => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'     => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'p_lotefec'   => new sfValidatorBoolean(array('required' => false)),
      'p_control_1' => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambaju[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambaju';
  }

}
