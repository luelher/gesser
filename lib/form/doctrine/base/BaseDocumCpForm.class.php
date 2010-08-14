<?php

/**
 * DocumCp form base class.
 *
 * @method DocumCp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocumCpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc'   => new sfWidgetFormInputHidden(),
      'nro_doc'    => new sfWidgetFormInputHidden(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'movi'       => new sfWidgetFormInputText(),
      'aut'        => new sfWidgetFormInputCheckbox(),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => false)),
      'contrib'    => new sfWidgetFormInputCheckbox(),
      'pagar'      => new sfWidgetFormInputText(),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'fec_venc'   => new sfWidgetFormDateTime(),
      'nro_fact'   => new sfWidgetFormInputText(),
      'observa'    => new sfWidgetFormInputText(),
      'doc_orig'   => new sfWidgetFormInputText(),
      'nro_orig'   => new sfWidgetFormInputText(),
      'co_ban'     => new sfWidgetFormInputText(),
      'nro_che'    => new sfWidgetFormInputText(),
      'co_ven'     => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tabulado'), 'add_empty' => false)),
      'tasa'       => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'monto_imp'  => new sfWidgetFormInputText(),
      'monto_gen'  => new sfWidgetFormInputText(),
      'monto_a1'   => new sfWidgetFormInputText(),
      'monto_a2'   => new sfWidgetFormInputText(),
      'monto_bru'  => new sfWidgetFormInputText(),
      'descuentos' => new sfWidgetFormInputText(),
      'monto_des'  => new sfWidgetFormInputText(),
      'recargo'    => new sfWidgetFormInputText(),
      'monto_rec'  => new sfWidgetFormInputText(),
      'monto_otr'  => new sfWidgetFormInputText(),
      'monto_net'  => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'comis1'     => new sfWidgetFormInputText(),
      'comis2'     => new sfWidgetFormInputText(),
      'comis3'     => new sfWidgetFormInputText(),
      'comis4'     => new sfWidgetFormInputText(),
      'adicional'  => new sfWidgetFormInputText(),
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
      'co_sucu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => false)),
      'rowguid'    => new sfWidgetFormInputText(),
      'mon_ilc'    => new sfWidgetFormInputText(),
      'otros1'     => new sfWidgetFormInputText(),
      'otros2'     => new sfWidgetFormInputText(),
      'otros3'     => new sfWidgetFormInputText(),
      'reng_si'    => new sfWidgetFormInputCheckbox(),
      'n_control'  => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'salestax'   => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'origen_d'   => new sfWidgetFormInputText(),
      'fec_reg'    => new sfWidgetFormDateTime(),
      'prov_ter'   => new sfWidgetFormInputText(),
      'reng_ter'   => new sfWidgetFormInputText(),
      'pro_pago'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'tipo_doc'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_doc')), 'empty_value' => $this->getObject()->get('tipo_doc'), 'required' => false)),
      'nro_doc'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nro_doc')), 'empty_value' => $this->getObject()->get('nro_doc'), 'required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'movi'       => new sfValidatorInteger(array('required' => false)),
      'aut'        => new sfValidatorBoolean(array('required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'required' => false)),
      'contrib'    => new sfValidatorBoolean(array('required' => false)),
      'pagar'      => new sfValidatorInteger(array('required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'fec_venc'   => new sfValidatorDateTime(array('required' => false)),
      'nro_fact'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'observa'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'doc_orig'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'nro_orig'   => new sfValidatorInteger(array('required' => false)),
      'co_ban'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nro_che'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_ven'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tipo'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tabulado'), 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'monto_imp'  => new sfValidatorNumber(array('required' => false)),
      'monto_gen'  => new sfValidatorNumber(array('required' => false)),
      'monto_a1'   => new sfValidatorNumber(array('required' => false)),
      'monto_a2'   => new sfValidatorNumber(array('required' => false)),
      'monto_bru'  => new sfValidatorNumber(array('required' => false)),
      'descuentos' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'monto_des'  => new sfValidatorNumber(array('required' => false)),
      'recargo'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'monto_rec'  => new sfValidatorNumber(array('required' => false)),
      'monto_otr'  => new sfValidatorNumber(array('required' => false)),
      'monto_net'  => new sfValidatorNumber(array('required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'comis1'     => new sfValidatorNumber(array('required' => false)),
      'comis2'     => new sfValidatorNumber(array('required' => false)),
      'comis3'     => new sfValidatorNumber(array('required' => false)),
      'comis4'     => new sfValidatorNumber(array('required' => false)),
      'adicional'  => new sfValidatorNumber(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'mon_ilc'    => new sfValidatorNumber(array('required' => false)),
      'otros1'     => new sfValidatorNumber(array('required' => false)),
      'otros2'     => new sfValidatorNumber(array('required' => false)),
      'otros3'     => new sfValidatorNumber(array('required' => false)),
      'reng_si'    => new sfValidatorBoolean(array('required' => false)),
      'n_control'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'salestax'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'origen'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_reg'    => new sfValidatorDateTime(array('required' => false)),
      'prov_ter'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'reng_ter'   => new sfValidatorInteger(array('required' => false)),
      'pro_pago'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('docum_cp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DocumCp';
  }

}
