<?php

/**
 * RengEce form base class.
 *
 * @method RengEce getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengEceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ced'   => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'co_emp'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spemple'), 'add_empty' => false)),
      'cantidad' => new sfWidgetFormInputText(),
      'horas'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_ced'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ced')), 'empty_value' => $this->getObject()->get('co_ced'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_emp'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spemple'), 'required' => false)),
      'cantidad' => new sfValidatorInteger(array('required' => false)),
      'horas'    => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_ece[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEce';
  }

}
