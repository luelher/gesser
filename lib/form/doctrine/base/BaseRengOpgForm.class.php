<?php

/**
 * RengOpg form base class.
 *
 * @method RengOpg getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengOpgForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ord_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'cta_egre' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => false)),
      'descrip'  => new sfWidgetFormTextarea(),
      'monto_a'  => new sfWidgetFormInputText(),
      'monto_co' => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'dis_cen'  => new sfWidgetFormTextarea(),
      'tipo_imp' => new sfWidgetFormInputText(),
      'aux01'    => new sfWidgetFormInputText(),
      'aux02'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ord_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ord_num')), 'empty_value' => $this->getObject()->get('ord_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'cta_egre' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'monto_a'  => new sfValidatorNumber(array('required' => false)),
      'monto_co' => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'dis_cen'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'tipo_imp' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'aux01'    => new sfValidatorNumber(array('required' => false)),
      'aux02'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_opg[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengOpg';
  }

}
