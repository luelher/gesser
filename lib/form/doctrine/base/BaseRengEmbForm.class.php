<?php

/**
 * RengEmb form base class.
 *
 * @method RengEmb getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengEmbForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exp_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'tipo_tra' => new sfWidgetFormInputText(),
      'fact_num' => new sfWidgetFormInputText(),
      'num_doc'  => new sfWidgetFormInputText(),
      'emp_tra'  => new sfWidgetFormInputText(),
      'veh_nom'  => new sfWidgetFormInputText(),
      'fec_etd'  => new sfWidgetFormDateTime(),
      'lug_emb'  => new sfWidgetFormInputText(),
      'fec_eta'  => new sfWidgetFormDateTime(),
      'cant_con' => new sfWidgetFormInputText(),
      'peso_vo'  => new sfWidgetFormInputText(),
      'peso_to'  => new sfWidgetFormInputText(),
      'vol_tot'  => new sfWidgetFormInputText(),
      'co_uni'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidades'), 'add_empty' => false)),
      'cant_emp' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'exp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exp_num')), 'empty_value' => $this->getObject()->get('exp_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tipo_tra' => new sfValidatorInteger(array('required' => false)),
      'fact_num' => new sfValidatorInteger(),
      'num_doc'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'emp_tra'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'veh_nom'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fec_etd'  => new sfValidatorDateTime(array('required' => false)),
      'lug_emb'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fec_eta'  => new sfValidatorDateTime(array('required' => false)),
      'cant_con' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'peso_vo'  => new sfValidatorNumber(array('required' => false)),
      'peso_to'  => new sfValidatorNumber(array('required' => false)),
      'vol_tot'  => new sfValidatorNumber(array('required' => false)),
      'co_uni'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unidades'), 'required' => false)),
      'cant_emp' => new sfValidatorInteger(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_emb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEmb';
  }

}
