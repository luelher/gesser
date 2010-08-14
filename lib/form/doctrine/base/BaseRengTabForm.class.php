<?php

/**
 * RengTab form base class.
 *
 * @method RengTab getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengTabForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_tab'   => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'co_islr'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'add_empty' => false)),
      'porc_ret' => new sfWidgetFormInputText(),
      'porc_imp' => new sfWidgetFormInputText(),
      'sustraen' => new sfWidgetFormInputText(),
      'islr_des' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_tab'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_tab')), 'empty_value' => $this->getObject()->get('co_tab'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_islr'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'required' => false)),
      'porc_ret' => new sfValidatorNumber(array('required' => false)),
      'porc_imp' => new sfValidatorNumber(array('required' => false)),
      'sustraen' => new sfValidatorNumber(array('required' => false)),
      'islr_des' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tab[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTab';
  }

}
