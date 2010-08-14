<?php

/**
 * UniTrib form base class.
 *
 * @method UniTrib getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniTribForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uni_gact' => new sfWidgetFormInputText(),
      'uni_fec'  => new sfWidgetFormInputHidden(),
      'uni_fecp' => new sfWidgetFormDateTime(),
      'valor'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'uni_gact' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'uni_fec'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_fec')), 'empty_value' => $this->getObject()->get('uni_fec'), 'required' => false)),
      'uni_fecp' => new sfValidatorDateTime(array('required' => false)),
      'valor'    => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('uni_trib[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniTrib';
  }

}
