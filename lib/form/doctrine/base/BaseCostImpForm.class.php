<?php

/**
 * CostImp form base class.
 *
 * @method CostImp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCostImpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'   => new sfWidgetFormInputHidden(),
      'nivel'    => new sfWidgetFormInputHidden(),
      'monto'    => new sfWidgetFormInputText(),
      'nro_doc'  => new sfWidgetFormInputHidden(),
      'reng_doc' => new sfWidgetFormInputHidden(),
      'tipo_doc' => new sfWidgetFormInputHidden(),
      'fecha'    => new sfWidgetFormDateTime(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'nivel'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nivel')), 'empty_value' => $this->getObject()->get('nivel'), 'required' => false)),
      'monto'    => new sfValidatorNumber(array('required' => false)),
      'nro_doc'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nro_doc')), 'empty_value' => $this->getObject()->get('nro_doc'), 'required' => false)),
      'reng_doc' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_doc')), 'empty_value' => $this->getObject()->get('reng_doc'), 'required' => false)),
      'tipo_doc' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_doc')), 'empty_value' => $this->getObject()->get('tipo_doc'), 'required' => false)),
      'fecha'    => new sfValidatorDateTime(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cost_imp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CostImp';
  }

}
