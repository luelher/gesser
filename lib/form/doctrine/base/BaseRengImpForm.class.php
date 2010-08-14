<?php

/**
 * RengImp form base class.
 *
 * @method RengImp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengImpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inp_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputText(),
      'co_art2'    => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'existencia' => new sfWidgetFormInputText(),
      'total_art'  => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('inp_num')), 'empty_value' => $this->getObject()->get('inp_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_art2'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'existencia' => new sfValidatorNumber(array('required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_imp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengImp';
  }

}
