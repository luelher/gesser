<?php

/**
 * StAlmac form base class.
 *
 * @method StAlmac getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStAlmacForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_alma'    => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputHidden(),
      'stock_act'  => new sfWidgetFormInputText(),
      'sstock_act' => new sfWidgetFormInputText(),
      'stock_com'  => new sfWidgetFormInputText(),
      'sstock_com' => new sfWidgetFormInputText(),
      'stock_lle'  => new sfWidgetFormInputText(),
      'sstock_lle' => new sfWidgetFormInputText(),
      'stock_des'  => new sfWidgetFormInputText(),
      'sstock_des' => new sfWidgetFormInputText(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_alma'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_alma')), 'empty_value' => $this->getObject()->get('co_alma'), 'required' => false)),
      'co_art'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'stock_act'  => new sfValidatorNumber(array('required' => false)),
      'sstock_act' => new sfValidatorNumber(array('required' => false)),
      'stock_com'  => new sfValidatorNumber(array('required' => false)),
      'sstock_com' => new sfValidatorNumber(array('required' => false)),
      'stock_lle'  => new sfValidatorNumber(array('required' => false)),
      'sstock_lle' => new sfValidatorNumber(array('required' => false)),
      'stock_des'  => new sfValidatorNumber(array('required' => false)),
      'sstock_des' => new sfValidatorNumber(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('st_almac[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StAlmac';
  }

}
