<?php

/**
 * Lote form base class.
 *
 * @method Lote getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLoteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormInputHidden(),
      'nro_lote'   => new sfWidgetFormInputHidden(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'prec_vta1'  => new sfWidgetFormInputText(),
      'prec_vta2'  => new sfWidgetFormInputText(),
      'prec_vta3'  => new sfWidgetFormInputText(),
      'prec_vta4'  => new sfWidgetFormInputText(),
      'prec_vta5'  => new sfWidgetFormInputText(),
      'ult_cos_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'nro_lote'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nro_lote')), 'empty_value' => $this->getObject()->get('nro_lote'), 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'prec_vta1'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta2'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta3'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta4'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta5'  => new sfValidatorNumber(array('required' => false)),
      'ult_cos_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lote[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lote';
  }

}
