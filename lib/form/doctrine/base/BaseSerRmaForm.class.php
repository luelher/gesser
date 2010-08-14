<?php

/**
 * SerRma form base class.
 *
 * @method SerRma getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSerRmaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'contador'  => new sfWidgetFormInputText(),
      'num_gara'  => new sfWidgetFormInputText(),
      'co_art'    => new sfWidgetFormInputText(),
      'serial'    => new sfWidgetFormInputText(),
      'doc_tip_e' => new sfWidgetFormInputText(),
      'doc_num_e' => new sfWidgetFormInputText(),
      'doc_tip_s' => new sfWidgetFormInputText(),
      'doc_num_s' => new sfWidgetFormInputText(),
      'revisado'  => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'co_alma'   => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'aux01'     => new sfWidgetFormInputText(),
      'aux02'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'contador'  => new sfValidatorInteger(array('required' => false)),
      'num_gara'  => new sfValidatorInteger(array('required' => false)),
      'co_art'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'serial'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'doc_tip_e' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'doc_num_e' => new sfValidatorInteger(array('required' => false)),
      'doc_tip_s' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'doc_num_s' => new sfValidatorInteger(array('required' => false)),
      'revisado'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_alma'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'     => new sfValidatorNumber(array('required' => false)),
      'aux02'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ser_rma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SerRma';
  }

}
