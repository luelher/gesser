<?php

/**
 * RengTax form base class.
 *
 * @method RengTax getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengTaxForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tax_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'tax_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tax'), 'add_empty' => false)),
      'tasa1'    => new sfWidgetFormInputText(),
      'tasa2'    => new sfWidgetFormInputText(),
      'tasa3'    => new sfWidgetFormInputText(),
      'formula'  => new sfWidgetFormInputCheckbox(),
      'limite'   => new sfWidgetFormInputText(),
      'porc1'    => new sfWidgetFormInputText(),
      'porc2'    => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tax_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tax_num')), 'empty_value' => $this->getObject()->get('tax_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tax_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tax'), 'required' => false)),
      'tasa1'    => new sfValidatorNumber(array('required' => false)),
      'tasa2'    => new sfValidatorNumber(array('required' => false)),
      'tasa3'    => new sfValidatorNumber(array('required' => false)),
      'formula'  => new sfValidatorBoolean(array('required' => false)),
      'limite'   => new sfValidatorNumber(array('required' => false)),
      'porc1'    => new sfValidatorNumber(array('required' => false)),
      'porc2'    => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tax[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTax';
  }

}
