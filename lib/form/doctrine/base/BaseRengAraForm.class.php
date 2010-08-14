<?php

/**
 * RengAra form base class.
 *
 * @method RengAra getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengAraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'   => new sfWidgetFormInputHidden(),
      'reng_ara' => new sfWidgetFormInputText(),
      'des_reng' => new sfWidgetFormInputText(),
      'co_conv'  => new sfWidgetFormInputHidden(),
      'porc_ara' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'reng_ara' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'des_reng' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_conv'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_conv')), 'empty_value' => $this->getObject()->get('co_conv'), 'required' => false)),
      'porc_ara' => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_ara[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAra';
  }

}
