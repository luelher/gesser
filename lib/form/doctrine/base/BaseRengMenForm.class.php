<?php

/**
 * RengMen form base class.
 *
 * @method RengMen getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengMenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'men_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'odp_num'  => new sfWidgetFormInputText(),
      'co_art'   => new sfWidgetFormInputText(),
      'cantidad' => new sfWidgetFormInputText(),
      'pendpro'  => new sfWidgetFormInputText(),
      'stockop'  => new sfWidgetFormInputText(),
      'stockact' => new sfWidgetFormInputText(),
      'diasinv'  => new sfWidgetFormInputText(),
      'diasprod' => new sfWidgetFormInputText(),
      'holgura'  => new sfWidgetFormInputText(),
      'cantprod' => new sfWidgetFormInputText(),
      'periodo'  => new sfWidgetFormInputText(),
      'cod_ced'  => new sfWidgetFormInputText(),
      'mesprox'  => new sfWidgetFormInputText(),
      'comprom'  => new sfWidgetFormInputText(),
      'producir' => new sfWidgetFormInputCheckbox(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'men_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('men_num')), 'empty_value' => $this->getObject()->get('men_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'odp_num'  => new sfValidatorInteger(array('required' => false)),
      'co_art'   => new sfValidatorString(array('max_length' => 30)),
      'cantidad' => new sfValidatorNumber(array('required' => false)),
      'pendpro'  => new sfValidatorNumber(array('required' => false)),
      'stockop'  => new sfValidatorNumber(array('required' => false)),
      'stockact' => new sfValidatorNumber(array('required' => false)),
      'diasinv'  => new sfValidatorNumber(array('required' => false)),
      'diasprod' => new sfValidatorInteger(array('required' => false)),
      'holgura'  => new sfValidatorInteger(array('required' => false)),
      'cantprod' => new sfValidatorNumber(array('required' => false)),
      'periodo'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cod_ced'  => new sfValidatorInteger(array('required' => false)),
      'mesprox'  => new sfValidatorNumber(array('required' => false)),
      'comprom'  => new sfValidatorNumber(array('required' => false)),
      'producir' => new sfValidatorBoolean(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_men[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengMen';
  }

}
