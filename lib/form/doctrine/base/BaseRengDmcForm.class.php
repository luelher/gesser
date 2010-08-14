<?php

/**
 * RengDmc form base class.
 *
 * @method RengDmc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengDmcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dmc_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'can_bult' => new sfWidgetFormInputText(),
      'cla_bult' => new sfWidgetFormInputText(),
      'art_desc' => new sfWidgetFormInputText(),
      'arancel'  => new sfWidgetFormInputText(),
      'unid_tip' => new sfWidgetFormInputText(),
      'unid_ent' => new sfWidgetFormInputText(),
      'unid_frc' => new sfWidgetFormInputText(),
      'peso'     => new sfWidgetFormInputText(),
      'valor'    => new sfWidgetFormInputText(),
      'tipo_imp' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'dmc_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dmc_num')), 'empty_value' => $this->getObject()->get('dmc_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'can_bult' => new sfValidatorInteger(array('required' => false)),
      'cla_bult' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'art_desc' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'arancel'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'unid_tip' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'unid_ent' => new sfValidatorInteger(array('required' => false)),
      'unid_frc' => new sfValidatorNumber(array('required' => false)),
      'peso'     => new sfValidatorNumber(array('required' => false)),
      'valor'    => new sfValidatorNumber(array('required' => false)),
      'tipo_imp' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dmc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDmc';
  }

}
