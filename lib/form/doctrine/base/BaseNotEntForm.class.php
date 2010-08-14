<?php

/**
 * NotEnt form base class.
 *
 * @method NotEnt getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotEntForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'   => new sfWidgetFormInputHidden(),
      'contrib'    => new sfWidgetFormInputCheckbox(),
      'nombre'     => new sfWidgetFormInputText(),
      'rif'        => new sfWidgetFormInputText(),
      'nit'        => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'descrip'    => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'fec_venc'   => new sfWidgetFormDateTime(),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'co_ven'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'add_empty' => false)),
      'co_tran'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Transpor'), 'add_empty' => false)),
      'dir_ent'    => new sfWidgetFormTextarea(),
      'forma_pag'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Condicio'), 'add_empty' => false)),
      'tot_bruto'  => new sfWidgetFormInputText(),
      'tot_neto'   => new sfWidgetFormInputText(),
      'glob_desc'  => new sfWidgetFormInputText(),
      'tot_reca'   => new sfWidgetFormInputText(),
      'porc_gdesc' => new sfWidgetFormInputText(),
      'porc_reca'  => new sfWidgetFormInputText(),
      'total_uc'   => new sfWidgetFormInputText(),
      'total_cp'   => new sfWidgetFormInputText(),
      'tot_flete'  => new sfWidgetFormInputText(),
      'monto_dev'  => new sfWidgetFormInputText(),
      'totklu'     => new sfWidgetFormInputText(),
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'impresa'    => new sfWidgetFormInputCheckbox(),
      'iva'        => new sfWidgetFormInputText(),
      'iva_dev'    => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'tasa'       => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'cta_contab' => new sfWidgetFormInputText(),
      'seriales'   => new sfWidgetFormInputText(),
      'tasag'      => new sfWidgetFormInputText(),
      'tasag10'    => new sfWidgetFormInputText(),
      'tasag20'    => new sfWidgetFormInputText(),
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
      'numcon'     => new sfWidgetFormInputText(),
      'mon_ilc'    => new sfWidgetFormInputText(),
      'otros1'     => new sfWidgetFormInputText(),
      'otros2'     => new sfWidgetFormInputText(),
      'otros3'     => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'salestax'   => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'origen_d'   => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'sta_prod'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'fact_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_num')), 'empty_value' => $this->getObject()->get('fact_num'), 'required' => false)),
      'contrib'    => new sfValidatorBoolean(array('required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'rif'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'nit'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'fec_venc'   => new sfValidatorDateTime(array('required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'required' => false)),
      'co_ven'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'required' => false)),
      'co_tran'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Transpor'), 'required' => false)),
      'dir_ent'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'forma_pag'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Condicio'), 'required' => false)),
      'tot_bruto'  => new sfValidatorNumber(array('required' => false)),
      'tot_neto'   => new sfValidatorNumber(array('required' => false)),
      'glob_desc'  => new sfValidatorNumber(array('required' => false)),
      'tot_reca'   => new sfValidatorNumber(array('required' => false)),
      'porc_gdesc' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'porc_reca'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'total_uc'   => new sfValidatorNumber(array('required' => false)),
      'total_cp'   => new sfValidatorNumber(array('required' => false)),
      'tot_flete'  => new sfValidatorNumber(array('required' => false)),
      'monto_dev'  => new sfValidatorNumber(array('required' => false)),
      'totklu'     => new sfValidatorNumber(array('required' => false)),
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'impresa'    => new sfValidatorBoolean(array('required' => false)),
      'iva'        => new sfValidatorNumber(array('required' => false)),
      'iva_dev'    => new sfValidatorNumber(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'cta_contab' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'seriales'   => new sfValidatorInteger(array('required' => false)),
      'tasag'      => new sfValidatorNumber(array('required' => false)),
      'tasag10'    => new sfValidatorNumber(array('required' => false)),
      'tasag20'    => new sfValidatorNumber(array('required' => false)),
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
      'co_sucu'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'numcon'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mon_ilc'    => new sfValidatorNumber(array('required' => false)),
      'otros1'     => new sfValidatorNumber(array('required' => false)),
      'otros2'     => new sfValidatorNumber(array('required' => false)),
      'otros3'     => new sfValidatorNumber(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'salestax'   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'origen'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'sta_prod'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('not_ent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotEnt';
  }

}
