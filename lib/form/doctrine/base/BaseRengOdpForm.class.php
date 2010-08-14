<?php

/**
 * RengOdp form base class.
 *
 * @method RengOdp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengOdpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'odp_num'   => new sfWidgetFormInputHidden(),
      'reng_num'  => new sfWidgetFormInputHidden(),
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'co_uni'    => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'cant_req'  => new sfWidgetFormInputText(),
      'cant_ent'  => new sfWidgetFormInputText(),
      'cant_ent2' => new sfWidgetFormInputText(),
      'cant_com'  => new sfWidgetFormInputText(),
      'cant_com2' => new sfWidgetFormInputText(),
      'cant_max'  => new sfWidgetFormInputText(),
      'cant_dev'  => new sfWidgetFormInputText(),
      'cant_dev2' => new sfWidgetFormInputText(),
      'cant_xde'  => new sfWidgetFormInputText(),
      'cant_xde2' => new sfWidgetFormInputText(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'subced'    => new sfWidgetFormInputText(),
      'total_uni' => new sfWidgetFormInputText(),
      'co_tar'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'odp_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('odp_num')), 'empty_value' => $this->getObject()->get('odp_num'), 'required' => false)),
      'reng_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'co_uni'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'cant_req'  => new sfValidatorNumber(array('required' => false)),
      'cant_ent'  => new sfValidatorNumber(array('required' => false)),
      'cant_ent2' => new sfValidatorNumber(array('required' => false)),
      'cant_com'  => new sfValidatorNumber(array('required' => false)),
      'cant_com2' => new sfValidatorNumber(array('required' => false)),
      'cant_max'  => new sfValidatorNumber(array('required' => false)),
      'cant_dev'  => new sfValidatorNumber(array('required' => false)),
      'cant_dev2' => new sfValidatorNumber(array('required' => false)),
      'cant_xde'  => new sfValidatorNumber(array('required' => false)),
      'cant_xde2' => new sfValidatorNumber(array('required' => false)),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'subced'    => new sfValidatorInteger(array('required' => false)),
      'total_uni' => new sfValidatorNumber(array('required' => false)),
      'co_tar'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_odp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengOdp';
  }

}
