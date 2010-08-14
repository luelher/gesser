<?php

/**
 * Cheques form base class.
 *
 * @method Cheques getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChequesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_cheq'  => new sfWidgetFormInputHidden(),
      'co_chra'  => new sfWidgetFormInputHidden(),
      'status'   => new sfWidgetFormInputText(),
      'monto'    => new sfWidgetFormInputText(),
      'descrip'  => new sfWidgetFormInputText(),
      'fec_emis' => new sfWidgetFormDateTime(),
      'fec_ent'  => new sfWidgetFormDateTime(),
      'entreg_a' => new sfWidgetFormInputText(),
      'coment'   => new sfWidgetFormTextarea(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'mov_num'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_cheq'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_cheq')), 'empty_value' => $this->getObject()->get('co_cheq'), 'required' => false)),
      'co_chra'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_chra')), 'empty_value' => $this->getObject()->get('co_chra'), 'required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'monto'    => new sfValidatorNumber(array('required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fec_emis' => new sfValidatorDateTime(array('required' => false)),
      'fec_ent'  => new sfValidatorDateTime(array('required' => false)),
      'entreg_a' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'coment'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'mov_num'  => new sfValidatorInteger(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cheques[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cheques';
  }

}
