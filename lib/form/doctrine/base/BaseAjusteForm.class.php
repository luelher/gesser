<?php

/**
 * Ajuste form base class.
 *
 * @method Ajuste getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAjusteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ajue_num'   => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDateTime(),
      'motivo'     => new sfWidgetFormInputText(),
      'total'      => new sfWidgetFormInputText(),
      'seriales'   => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'tasa'       => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'dis_cen'    => new sfWidgetFormTextarea(),
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
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'produccion' => new sfWidgetFormInputCheckbox(),
      'imp_num'    => new sfWidgetFormInputText(),
      'fact_num'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ajue_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ajue_num')), 'empty_value' => $this->getObject()->get('ajue_num'), 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'motivo'     => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'total'      => new sfValidatorNumber(array('required' => false)),
      'seriales'   => new sfValidatorInteger(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
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
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'produccion' => new sfValidatorBoolean(array('required' => false)),
      'imp_num'    => new sfValidatorInteger(array('required' => false)),
      'fact_num'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ajuste[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ajuste';
  }

}
