<?php

/**
 * DepCaj form base class.
 *
 * @method DepCaj getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDepCajForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dep_num'    => new sfWidgetFormInputHidden(),
      'deposito'   => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDateTime(),
      'movi'       => new sfWidgetFormInputText(),
      'cod_cta'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'add_empty' => false)),
      'cod_caja'   => new sfWidgetFormInputText(),
      'movie'      => new sfWidgetFormInputText(),
      'total_efec' => new sfWidgetFormInputText(),
      'total_cheq' => new sfWidgetFormInputText(),
      'total_tarj' => new sfWidgetFormInputText(),
      'che_dev'    => new sfWidgetFormInputText(),
      'cta_egre'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => false)),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'cta_cont01' => new sfWidgetFormInputText(),
      'cta_cont02' => new sfWidgetFormInputText(),
      'cta_cont03' => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'tasa'       => new sfWidgetFormInputText(),
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
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'dep_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dep_num')), 'empty_value' => $this->getObject()->get('dep_num'), 'required' => false)),
      'deposito'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'movi'       => new sfValidatorInteger(array('required' => false)),
      'cod_cta'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'required' => false)),
      'cod_caja'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'movie'      => new sfValidatorInteger(array('required' => false)),
      'total_efec' => new sfValidatorNumber(array('required' => false)),
      'total_cheq' => new sfValidatorNumber(array('required' => false)),
      'total_tarj' => new sfValidatorNumber(array('required' => false)),
      'che_dev'    => new sfValidatorInteger(array('required' => false)),
      'cta_egre'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'cta_cont01' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cta_cont02' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cta_cont03' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
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
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dep_caj[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepCaj';
  }

}
