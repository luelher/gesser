<?php

/**
 * ConcBan form base class.
 *
 * @method ConcBan getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConcBanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cta'  => new sfWidgetFormInputHidden(),
      'mes'      => new sfWidgetFormInputHidden(),
      'ano'      => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'mov_num'  => new sfWidgetFormInputHidden(),
      'fec_conc' => new sfWidgetFormDateTime(),
      'con_auto' => new sfWidgetFormInputCheckbox(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_cta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_cta')), 'empty_value' => $this->getObject()->get('cod_cta'), 'required' => false)),
      'mes'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mes')), 'empty_value' => $this->getObject()->get('mes'), 'required' => false)),
      'ano'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ano')), 'empty_value' => $this->getObject()->get('ano'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'mov_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mov_num')), 'empty_value' => $this->getObject()->get('mov_num'), 'required' => false)),
      'fec_conc' => new sfValidatorDateTime(array('required' => false)),
      'con_auto' => new sfValidatorBoolean(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('conc_ban[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcBan';
  }

}
