<?php

/**
 * RengAce form base class.
 *
 * @method RengAce getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengAceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ced'    => new sfWidgetFormInputHidden(),
      'reng_num'  => new sfWidgetFormInputHidden(),
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'cant'      => new sfWidgetFormInputText(),
      'co_uni'    => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'feccom'    => new sfWidgetFormDateTime(),
      'numcom'    => new sfWidgetFormInputText(),
      'por_cos'   => new sfWidgetFormInputText(),
      'subced'    => new sfWidgetFormInputText(),
      'total_uni' => new sfWidgetFormInputText(),
      'cant_prod' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_ced'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ced')), 'empty_value' => $this->getObject()->get('co_ced'), 'required' => false)),
      'reng_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'cant'      => new sfValidatorNumber(array('required' => false)),
      'co_uni'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'feccom'    => new sfValidatorDateTime(array('required' => false)),
      'numcom'    => new sfValidatorInteger(array('required' => false)),
      'por_cos'   => new sfValidatorNumber(array('required' => false)),
      'subced'    => new sfValidatorInteger(array('required' => false)),
      'total_uni' => new sfValidatorNumber(array('required' => false)),
      'cant_prod' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_ace[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAce';
  }

}
