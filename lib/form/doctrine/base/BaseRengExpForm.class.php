<?php

/**
 * RengExp form base class.
 *
 * @method RengExp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengExpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exp_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'suni_venta' => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'total_art'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'cos_pro_un' => new sfWidgetFormInputText(),
      'cos_pro_om' => new sfWidgetFormInputText(),
      'ult_cos_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'pendiente2' => new sfWidgetFormInputText(),
      'tipo_doc2'  => new sfWidgetFormInputText(),
      'reng_doc2'  => new sfWidgetFormInputText(),
      'num_doc2'   => new sfWidgetFormInputText(),
      'cant_sol'   => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'cod_ced'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'exp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('exp_num')), 'empty_value' => $this->getObject()->get('exp_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'suni_venta' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_un' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_om' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'pendiente2' => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'  => new sfValidatorInteger(array('required' => false)),
      'num_doc2'   => new sfValidatorInteger(array('required' => false)),
      'cant_sol'   => new sfValidatorInteger(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'cod_ced'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('reng_exp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengExp';
  }

}
