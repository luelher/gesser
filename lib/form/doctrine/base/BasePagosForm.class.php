<?php

/**
 * Pagos form base class.
 *
 * @method Pagos getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePagosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'    => new sfWidgetFormInputHidden(),
      'recibo'     => new sfWidgetFormInputText(),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => false)),
      'co_ven'     => new sfWidgetFormInputText(),
      'fec_cob'    => new sfWidgetFormDateTime(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'monto'      => new sfWidgetFormInputText(),
      'dppago'     => new sfWidgetFormInputText(),
      'mont_ncr'   => new sfWidgetFormInputText(),
      'ncr'        => new sfWidgetFormInputText(),
      'tcomi_porc' => new sfWidgetFormInputText(),
      'tcomi_line' => new sfWidgetFormInputText(),
      'tcomi_art'  => new sfWidgetFormInputText(),
      'tcomi_conc' => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'tasa'       => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'numcom'     => new sfWidgetFormInputText(),
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
      'adel_num'   => new sfWidgetFormInputText(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => false)),
      'rowguid'    => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'num_dev'    => new sfWidgetFormInputText(),
      'devdinero'  => new sfWidgetFormInputCheckbox(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'origen_d'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cob_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cob_num')), 'empty_value' => $this->getObject()->get('cob_num'), 'required' => false)),
      'recibo'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'required' => false)),
      'co_ven'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fec_cob'    => new sfValidatorDateTime(array('required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'dppago'     => new sfValidatorNumber(array('required' => false)),
      'mont_ncr'   => new sfValidatorNumber(array('required' => false)),
      'ncr'        => new sfValidatorInteger(array('required' => false)),
      'tcomi_porc' => new sfValidatorNumber(array('required' => false)),
      'tcomi_line' => new sfValidatorNumber(array('required' => false)),
      'tcomi_art'  => new sfValidatorNumber(array('required' => false)),
      'tcomi_conc' => new sfValidatorNumber(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
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
      'adel_num'   => new sfValidatorInteger(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'num_dev'    => new sfValidatorInteger(array('required' => false)),
      'devdinero'  => new sfValidatorBoolean(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'origen'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pagos';
  }

}
