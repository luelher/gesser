<?php

/**
 * HistPlan form base class.
 *
 * @method HistPlan getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHistPlanForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_hist'  => new sfWidgetFormInputHidden(),
      'co_plan'  => new sfWidgetFormInputHidden(),
      'plan_num' => new sfWidgetFormInputText(),
      'des_hist' => new sfWidgetFormInputText(),
      'xml_cont' => new sfWidgetFormTextarea(),
      'gen_fec'  => new sfWidgetFormDateTime(),
      'mes_plan' => new sfWidgetFormInputText(),
      'ano_plan' => new sfWidgetFormInputText(),
      'can_fech' => new sfWidgetFormDateTime(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_hist'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_hist')), 'empty_value' => $this->getObject()->get('id_hist'), 'required' => false)),
      'co_plan'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_plan')), 'empty_value' => $this->getObject()->get('co_plan'), 'required' => false)),
      'plan_num' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'des_hist' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'xml_cont' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'gen_fec'  => new sfValidatorDateTime(array('required' => false)),
      'mes_plan' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'ano_plan' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'can_fech' => new sfValidatorDateTime(array('required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('hist_plan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HistPlan';
  }

}
