<?php

/**
 * Fisico form base class.
 *
 * @method Fisico getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFisicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_fis'    => new sfWidgetFormInputHidden(),
      'fecha_fis'  => new sfWidgetFormDateTime(),
      'observac'   => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'cerrado'    => new sfWidgetFormInputCheckbox(),
      'nro_ajuste' => new sfWidgetFormInputText(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
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
      'num_fis'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('num_fis')), 'empty_value' => $this->getObject()->get('num_fis'), 'required' => false)),
      'fecha_fis'  => new sfValidatorDateTime(array('required' => false)),
      'observac'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'cerrado'    => new sfValidatorBoolean(array('required' => false)),
      'nro_ajuste' => new sfValidatorInteger(array('required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
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

    $this->widgetSchema->setNameFormat('fisico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fisico';
  }

}
