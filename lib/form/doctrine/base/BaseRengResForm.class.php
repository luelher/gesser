<?php

/**
 * RengRes form base class.
 *
 * @method RengRes getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengResForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rma_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'tipo'       => new sfWidgetFormInputText(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'total_art'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'unidad'     => new sfWidgetFormInputText(),
      'des_art'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rma_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rma_num')), 'empty_value' => $this->getObject()->get('rma_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tipo'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'des_art'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_res[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengRes';
  }

}
