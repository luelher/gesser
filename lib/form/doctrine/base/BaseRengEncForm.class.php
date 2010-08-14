<?php

/**
 * RengEnc form base class.
 *
 * @method RengEnc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengEncForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rma_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'tipo_doc'   => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'serial_dev' => new sfWidgetFormInputText(),
      'serial'     => new sfWidgetFormInputText(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'co_reem'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReem'), 'add_empty' => false)),
      'treemplazo' => new sfWidgetFormInputText(),
      'nd_num'     => new sfWidgetFormInputText(),
      'prec_vta'   => new sfWidgetFormInputText(),
      'prec_vta2'  => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'des_art'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rma_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rma_num')), 'empty_value' => $this->getObject()->get('rma_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tipo_doc'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'num_doc'    => new sfValidatorInteger(array('required' => false)),
      'serial_dev' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'serial'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'co_reem'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReem'), 'required' => false)),
      'treemplazo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nd_num'     => new sfValidatorInteger(array('required' => false)),
      'prec_vta'   => new sfValidatorNumber(array('required' => false)),
      'prec_vta2'  => new sfValidatorNumber(array('required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'des_art'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_enc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEnc';
  }

}
