<?php

/**
 * OrdPago form base class.
 *
 * @method OrdPago getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrdPagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ord_num'     => new sfWidgetFormInputHidden(),
      'status'      => new sfWidgetFormInputText(),
      'fecha'       => new sfWidgetFormDateTime(),
      'cod_ben'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Benefici'), 'add_empty' => false)),
      'descrip'     => new sfWidgetFormTextarea(),
      'forma_pag'   => new sfWidgetFormInputText(),
      'monto'       => new sfWidgetFormInputText(),
      'tipo_imp'    => new sfWidgetFormInputText(),
      'fec_pag'     => new sfWidgetFormDateTime(),
      'cod_cta'     => new sfWidgetFormInputText(),
      'cheque'      => new sfWidgetFormInputText(),
      'cod_caja'    => new sfWidgetFormInputText(),
      'mov_num'     => new sfWidgetFormInputText(),
      'cta_egre'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => false)),
      'feccom'      => new sfWidgetFormDateTime(),
      'dis_cen'     => new sfWidgetFormTextarea(),
      'numcom'      => new sfWidgetFormInputText(),
      'tasa'        => new sfWidgetFormInputText(),
      'moneda'      => new sfWidgetFormInputText(),
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
      'revisado'    => new sfWidgetFormInputText(),
      'trasnfe'     => new sfWidgetFormInputText(),
      'co_sucu'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => false)),
      'rowguid'     => new sfWidgetFormInputText(),
      'mov_islr'    => new sfWidgetFormInputText(),
      'sino_reten'  => new sfWidgetFormInputCheckbox(),
      'reng_si'     => new sfWidgetFormInputCheckbox(),
      'monto_reten' => new sfWidgetFormInputText(),
      'monto_obj'   => new sfWidgetFormInputText(),
      'sustraen'    => new sfWidgetFormInputText(),
      'co_islr'     => new sfWidgetFormInputText(),
      'pagar'       => new sfWidgetFormInputText(),
      'anulada'     => new sfWidgetFormInputCheckbox(),
      'porc_retn'   => new sfWidgetFormInputText(),
      'aux01'       => new sfWidgetFormInputText(),
      'aux02'       => new sfWidgetFormInputText(),
      'salestax'    => new sfWidgetFormInputText(),
      'origen'      => new sfWidgetFormInputText(),
      'origen_d'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ord_num'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ord_num')), 'empty_value' => $this->getObject()->get('ord_num'), 'required' => false)),
      'status'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fecha'       => new sfValidatorDateTime(array('required' => false)),
      'cod_ben'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Benefici'), 'required' => false)),
      'descrip'     => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'forma_pag'   => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'monto'       => new sfValidatorNumber(array('required' => false)),
      'tipo_imp'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fec_pag'     => new sfValidatorDateTime(array('required' => false)),
      'cod_cta'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cheque'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cod_caja'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'mov_num'     => new sfValidatorInteger(array('required' => false)),
      'cta_egre'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'required' => false)),
      'feccom'      => new sfValidatorDateTime(array('required' => false)),
      'dis_cen'     => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'numcom'      => new sfValidatorInteger(array('required' => false)),
      'tasa'        => new sfValidatorNumber(array('required' => false)),
      'moneda'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
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
      'revisado'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'required' => false)),
      'rowguid'     => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'mov_islr'    => new sfValidatorInteger(array('required' => false)),
      'sino_reten'  => new sfValidatorBoolean(array('required' => false)),
      'reng_si'     => new sfValidatorBoolean(array('required' => false)),
      'monto_reten' => new sfValidatorNumber(array('required' => false)),
      'monto_obj'   => new sfValidatorNumber(array('required' => false)),
      'sustraen'    => new sfValidatorNumber(array('required' => false)),
      'co_islr'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'pagar'       => new sfValidatorInteger(array('required' => false)),
      'anulada'     => new sfValidatorBoolean(array('required' => false)),
      'porc_retn'   => new sfValidatorNumber(array('required' => false)),
      'aux01'       => new sfValidatorNumber(array('required' => false)),
      'aux02'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'salestax'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'origen'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ord_pago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdPago';
  }

}
