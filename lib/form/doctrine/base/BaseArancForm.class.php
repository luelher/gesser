<?php

/**
 * Aranc form base class.
 *
 * @method Aranc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArancForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'   => new sfWidgetFormInputHidden(),
      'co_ara'   => new sfWidgetFormInputText(),
      'des_ara'  => new sfWidgetFormInputText(),
      'porc_ara' => new sfWidgetFormInputText(),
      'calidad'  => new sfWidgetFormInputText(),
      'nivel'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'co_ara'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'des_ara'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'porc_ara' => new sfValidatorNumber(array('required' => false)),
      'calidad'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nivel'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aranc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aranc';
  }

}
