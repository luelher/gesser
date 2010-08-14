<?php

/**
 * RImpCo form base class.
 *
 * @method RImpCo getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRImpCoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_nu1' => new sfWidgetFormInputHidden(),
      'reng_nu1' => new sfWidgetFormInputHidden(),
      'fact_nu2' => new sfWidgetFormInputHidden(),
      'reng_nu2' => new sfWidgetFormInputHidden(),
      'monto'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'fact_nu1' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_nu1')), 'empty_value' => $this->getObject()->get('fact_nu1'), 'required' => false)),
      'reng_nu1' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_nu1')), 'empty_value' => $this->getObject()->get('reng_nu1'), 'required' => false)),
      'fact_nu2' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_nu2')), 'empty_value' => $this->getObject()->get('fact_nu2'), 'required' => false)),
      'reng_nu2' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_nu2')), 'empty_value' => $this->getObject()->get('reng_nu2'), 'required' => false)),
      'monto'    => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('r_imp_co[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RImpCo';
  }

}
