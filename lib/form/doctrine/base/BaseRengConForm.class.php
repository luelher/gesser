<?php

/**
 * RengCon form base class.
 *
 * @method RengCon getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengConForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cta'  => new sfWidgetFormInputHidden(),
      'mes'      => new sfWidgetFormInputHidden(),
      'ano'      => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'fec_mov'  => new sfWidgetFormDateTime(),
      'tipo_op'  => new sfWidgetFormInputText(),
      'doc_num'  => new sfWidgetFormInputText(),
      'descrip'  => new sfWidgetFormInputText(),
      'monto_d'  => new sfWidgetFormInputText(),
      'monto_h'  => new sfWidgetFormInputText(),
      'idb'      => new sfWidgetFormInputText(),
      'dep_con'  => new sfWidgetFormInputText(),
      'origen'   => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_cta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_cta')), 'empty_value' => $this->getObject()->get('cod_cta'), 'required' => false)),
      'mes'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mes')), 'empty_value' => $this->getObject()->get('mes'), 'required' => false)),
      'ano'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ano')), 'empty_value' => $this->getObject()->get('ano'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'fec_mov'  => new sfValidatorDateTime(array('required' => false)),
      'tipo_op'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'doc_num'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'monto_d'  => new sfValidatorNumber(array('required' => false)),
      'monto_h'  => new sfValidatorNumber(array('required' => false)),
      'idb'      => new sfValidatorNumber(array('required' => false)),
      'dep_con'  => new sfValidatorInteger(array('required' => false)),
      'origen'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_con[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCon';
  }

}
