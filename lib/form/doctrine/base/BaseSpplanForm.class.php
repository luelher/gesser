<?php

/**
 * Spplan form base class.
 *
 * @method Spplan getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpplanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'   => new sfWidgetFormInputHidden(),
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
      'co_us_in' => new sfWidgetFormInputText(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'rowguid'  => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
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
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spplan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spplan';
  }

}
