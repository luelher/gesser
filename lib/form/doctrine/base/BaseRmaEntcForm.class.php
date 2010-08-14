<?php

/**
 * RmaEntc form base class.
 *
 * @method RmaEntc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRmaEntcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rma_num'    => new sfWidgetFormInputHidden(),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'nombre'     => new sfWidgetFormInputText(),
      'rif'        => new sfWidgetFormInputText(),
      'nit'        => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'descrip'    => new sfWidgetFormInputText(),
      'tasa'       => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
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
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'rowguid'    => new sfWidgetFormInputText(),
      'transfe'    => new sfWidgetFormInputText(),
      'aju_adm'    => new sfWidgetFormInputText(),
      'aju_rma'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rma_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rma_num')), 'empty_value' => $this->getObject()->get('rma_num'), 'required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'rif'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'nit'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'transfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'aju_adm'    => new sfValidatorInteger(array('required' => false)),
      'aju_rma'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rma_entc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RmaEntc';
  }

}
