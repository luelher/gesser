<?php

/**
 * RengAtb form base class.
 *
 * @method RengAtb getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengAtbForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_atriv' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spatriv'), 'add_empty' => false)),
      'co_tar'   => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'valor'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_atriv' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spatriv'))),
      'co_tar'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_tar')), 'empty_value' => $this->getObject()->get('co_tar'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'valor'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_atb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAtb';
  }

}
