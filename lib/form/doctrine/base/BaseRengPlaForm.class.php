<?php

/**
 * RengPla form base class.
 *
 * @method RengPla getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengPlaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pla_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'xstock'   => new sfWidgetFormInputCheckbox(),
      'co_art'   => new sfWidgetFormInputText(),
      'm1'       => new sfWidgetFormInputText(),
      'm2'       => new sfWidgetFormInputText(),
      'm3'       => new sfWidgetFormInputText(),
      'm4'       => new sfWidgetFormInputText(),
      'm5'       => new sfWidgetFormInputText(),
      'm6'       => new sfWidgetFormInputText(),
      'm7'       => new sfWidgetFormInputText(),
      'm8'       => new sfWidgetFormInputText(),
      'm9'       => new sfWidgetFormInputText(),
      'm10'      => new sfWidgetFormInputText(),
      'm11'      => new sfWidgetFormInputText(),
      'm12'      => new sfWidgetFormInputText(),
      'd1'       => new sfWidgetFormInputText(),
      'd2'       => new sfWidgetFormInputText(),
      'd3'       => new sfWidgetFormInputText(),
      'd4'       => new sfWidgetFormInputText(),
      'd5'       => new sfWidgetFormInputText(),
      'd6'       => new sfWidgetFormInputText(),
      'd7'       => new sfWidgetFormInputText(),
      'd8'       => new sfWidgetFormInputText(),
      'd9'       => new sfWidgetFormInputText(),
      'd10'      => new sfWidgetFormInputText(),
      'd11'      => new sfWidgetFormInputText(),
      'd12'      => new sfWidgetFormInputText(),
      'enero'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'pla_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pla_num')), 'empty_value' => $this->getObject()->get('pla_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'xstock'   => new sfValidatorBoolean(array('required' => false)),
      'co_art'   => new sfValidatorString(array('max_length' => 30)),
      'm1'       => new sfValidatorNumber(array('required' => false)),
      'm2'       => new sfValidatorNumber(array('required' => false)),
      'm3'       => new sfValidatorNumber(array('required' => false)),
      'm4'       => new sfValidatorNumber(array('required' => false)),
      'm5'       => new sfValidatorNumber(array('required' => false)),
      'm6'       => new sfValidatorNumber(array('required' => false)),
      'm7'       => new sfValidatorNumber(array('required' => false)),
      'm8'       => new sfValidatorNumber(array('required' => false)),
      'm9'       => new sfValidatorNumber(array('required' => false)),
      'm10'      => new sfValidatorNumber(array('required' => false)),
      'm11'      => new sfValidatorNumber(array('required' => false)),
      'm12'      => new sfValidatorNumber(array('required' => false)),
      'd1'       => new sfValidatorNumber(array('required' => false)),
      'd2'       => new sfValidatorNumber(array('required' => false)),
      'd3'       => new sfValidatorNumber(array('required' => false)),
      'd4'       => new sfValidatorNumber(array('required' => false)),
      'd5'       => new sfValidatorNumber(array('required' => false)),
      'd6'       => new sfValidatorNumber(array('required' => false)),
      'd7'       => new sfValidatorNumber(array('required' => false)),
      'd8'       => new sfValidatorNumber(array('required' => false)),
      'd9'       => new sfValidatorNumber(array('required' => false)),
      'd10'      => new sfValidatorNumber(array('required' => false)),
      'd11'      => new sfValidatorNumber(array('required' => false)),
      'd12'      => new sfValidatorNumber(array('required' => false)),
      'enero'    => new sfValidatorInteger(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_pla[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengPla';
  }

}
