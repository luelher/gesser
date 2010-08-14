<?php

/**
 * RengIsl form base class.
 *
 * @method RengIsl getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengIslForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc'    => new sfWidgetFormInputHidden(),
      'doc_num'     => new sfWidgetFormInputHidden(),
      'reng_num'    => new sfWidgetFormInputHidden(),
      'fact_num'    => new sfWidgetFormInputHidden(),
      'co_islr'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'add_empty' => false)),
      'monto_obj'   => new sfWidgetFormInputText(),
      'monto_reten' => new sfWidgetFormInputText(),
      'sustraen'    => new sfWidgetFormInputText(),
      'porc_retn'   => new sfWidgetFormInputText(),
      'rowguid'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipo_doc'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_doc')), 'empty_value' => $this->getObject()->get('tipo_doc'), 'required' => false)),
      'doc_num'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('doc_num')), 'empty_value' => $this->getObject()->get('doc_num'), 'required' => false)),
      'reng_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'fact_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_num')), 'empty_value' => $this->getObject()->get('fact_num'), 'required' => false)),
      'co_islr'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'required' => false)),
      'monto_obj'   => new sfValidatorNumber(array('required' => false)),
      'monto_reten' => new sfValidatorNumber(array('required' => false)),
      'sustraen'    => new sfValidatorNumber(array('required' => false)),
      'porc_retn'   => new sfValidatorNumber(),
      'rowguid'     => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_isl[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengIsl';
  }

}
