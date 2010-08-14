<?php

/**
 * RengDoc form base class.
 *
 * @method RengDoc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengDocForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exp_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'tipo_doc' => new sfWidgetFormInputText(),
      'num_doc'  => new sfWidgetFormInputText(),
      'fecha'    => new sfWidgetFormDateTime(),
      'doc_cop'  => new sfWidgetFormInputCheckbox(),
      'doc_com'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'exp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exp_num')), 'empty_value' => $this->getObject()->get('exp_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tipo_doc' => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'num_doc'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fecha'    => new sfValidatorDateTime(array('required' => false)),
      'doc_cop'  => new sfValidatorBoolean(array('required' => false)),
      'doc_com'  => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_doc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDoc';
  }

}
