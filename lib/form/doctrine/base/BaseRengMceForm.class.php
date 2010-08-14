<?php

/**
 * RengMce form base class.
 *
 * @method RengMce getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengMceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ced'     => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputText(),
      'co_tar'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sptar'), 'add_empty' => false)),
      'cantidad'   => new sfWidgetFormInputText(),
      'co_uni'     => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'cant_max'   => new sfWidgetFormInputText(),
      'numcom'     => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'total_uni'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_ced'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ced')), 'empty_value' => $this->getObject()->get('co_ced'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_tar'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sptar'), 'required' => false)),
      'cantidad'   => new sfValidatorNumber(array('required' => false)),
      'co_uni'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'cant_max'   => new sfValidatorNumber(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_mce[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengMce';
  }

}
