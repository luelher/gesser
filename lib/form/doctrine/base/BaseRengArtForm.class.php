<?php

/**
 * RengArt form base class.
 *
 * @method RengArt getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengArtForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'    => new sfWidgetFormInputHidden(),
      'reng_num'  => new sfWidgetFormInputHidden(),
      'cod_relac' => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'aux01'     => new sfWidgetFormInputText(),
      'aux02'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'reng_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'cod_relac' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'     => new sfValidatorNumber(array('required' => false)),
      'aux02'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_art[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengArt';
  }

}
