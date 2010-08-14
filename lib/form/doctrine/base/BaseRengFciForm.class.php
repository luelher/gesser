<?php

/**
 * RengFci form base class.
 *
 * @method RengFci getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengFciForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imp_num'   => new sfWidgetFormInputHidden(),
      'reng_num'  => new sfWidgetFormInputHidden(),
      'fact_num'  => new sfWidgetFormInputText(),
      'tot_neto'  => new sfWidgetFormInputText(),
      'descrip'   => new sfWidgetFormInputText(),
      'monto_dis' => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'aux01'     => new sfWidgetFormInputText(),
      'aux02'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'imp_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('imp_num')), 'empty_value' => $this->getObject()->get('imp_num'), 'required' => false)),
      'reng_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'fact_num'  => new sfValidatorInteger(array('required' => false)),
      'tot_neto'  => new sfValidatorNumber(array('required' => false)),
      'descrip'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'monto_dis' => new sfValidatorNumber(array('required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'     => new sfValidatorNumber(array('required' => false)),
      'aux02'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_fci[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFci';
  }

}
