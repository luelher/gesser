<?php

/**
 * RengCos form base class.
 *
 * @method RengCos getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengCosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cost_num'    => new sfWidgetFormInputHidden(),
      'reng_num'    => new sfWidgetFormInputHidden(),
      'co_art'      => new sfWidgetFormInputText(),
      'mp_cant'     => new sfWidgetFormInputText(),
      'mo_cant'     => new sfWidgetFormInputText(),
      'gf_cant'     => new sfWidgetFormInputText(),
      'total'       => new sfWidgetFormInputText(),
      'mp_cant_om'  => new sfWidgetFormInputText(),
      'mo_cant_om'  => new sfWidgetFormInputText(),
      'gf_cant_om'  => new sfWidgetFormInputText(),
      'total_om'    => new sfWidgetFormInputText(),
      'rowguid'     => new sfWidgetFormInputText(),
      'por_mp'      => new sfWidgetFormInputText(),
      'por_mo'      => new sfWidgetFormInputText(),
      'por_gf'      => new sfWidgetFormInputText(),
      'por_mp_om'   => new sfWidgetFormInputText(),
      'por_mo_om'   => new sfWidgetFormInputText(),
      'por_gf_om'   => new sfWidgetFormInputText(),
      'men_cant'    => new sfWidgetFormInputText(),
      'mem_cant'    => new sfWidgetFormInputText(),
      'oi_cant'     => new sfWidgetFormInputText(),
      'men_cant_om' => new sfWidgetFormInputText(),
      'mem_cant_om' => new sfWidgetFormInputText(),
      'oi_cant_om'  => new sfWidgetFormInputText(),
      'por_men'     => new sfWidgetFormInputText(),
      'por_mem'     => new sfWidgetFormInputText(),
      'por_oi'      => new sfWidgetFormInputText(),
      'por_men_om'  => new sfWidgetFormInputText(),
      'por_mem_om'  => new sfWidgetFormInputText(),
      'por_oi_om'   => new sfWidgetFormInputText(),
      'co_uni'      => new sfWidgetFormInputText(),
      'total_uni'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cost_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cost_num')), 'empty_value' => $this->getObject()->get('cost_num'), 'required' => false)),
      'reng_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'mp_cant'     => new sfValidatorNumber(array('required' => false)),
      'mo_cant'     => new sfValidatorNumber(array('required' => false)),
      'gf_cant'     => new sfValidatorNumber(array('required' => false)),
      'total'       => new sfValidatorNumber(array('required' => false)),
      'mp_cant_om'  => new sfValidatorNumber(array('required' => false)),
      'mo_cant_om'  => new sfValidatorNumber(array('required' => false)),
      'gf_cant_om'  => new sfValidatorNumber(array('required' => false)),
      'total_om'    => new sfValidatorNumber(array('required' => false)),
      'rowguid'     => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'por_mp'      => new sfValidatorNumber(array('required' => false)),
      'por_mo'      => new sfValidatorNumber(array('required' => false)),
      'por_gf'      => new sfValidatorNumber(array('required' => false)),
      'por_mp_om'   => new sfValidatorNumber(array('required' => false)),
      'por_mo_om'   => new sfValidatorNumber(array('required' => false)),
      'por_gf_om'   => new sfValidatorNumber(array('required' => false)),
      'men_cant'    => new sfValidatorNumber(array('required' => false)),
      'mem_cant'    => new sfValidatorNumber(array('required' => false)),
      'oi_cant'     => new sfValidatorNumber(array('required' => false)),
      'men_cant_om' => new sfValidatorNumber(array('required' => false)),
      'mem_cant_om' => new sfValidatorNumber(array('required' => false)),
      'oi_cant_om'  => new sfValidatorNumber(array('required' => false)),
      'por_men'     => new sfValidatorNumber(array('required' => false)),
      'por_mem'     => new sfValidatorNumber(array('required' => false)),
      'por_oi'      => new sfValidatorNumber(array('required' => false)),
      'por_men_om'  => new sfValidatorNumber(array('required' => false)),
      'por_mem_om'  => new sfValidatorNumber(array('required' => false)),
      'por_oi_om'   => new sfValidatorNumber(array('required' => false)),
      'co_uni'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total_uni'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_cos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCos';
  }

}
