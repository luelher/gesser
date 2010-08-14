<?php

/**
 * RengAco form base class.
 *
 * @method RengAco getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengAcoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imp_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'fact_num' => new sfWidgetFormInputText(),
      'co_art'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'monto'    => new sfWidgetFormInputText(),
      'monto_ap' => new sfWidgetFormInputText(),
      'n_costo'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'tipo_doc' => new sfWidgetFormInputText(),
      'tipo_dis' => new sfWidgetFormInputText(),
      'moneda'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'tasa'     => new sfWidgetFormInputText(),
      'reng_doc' => new sfWidgetFormInputText(),
      'fac_gast' => new sfWidgetFormInputText(),
      'art_gast' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'imp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('imp_num')), 'empty_value' => $this->getObject()->get('imp_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'fact_num' => new sfValidatorInteger(array('required' => false)),
      'co_art'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'monto'    => new sfValidatorNumber(array('required' => false)),
      'monto_ap' => new sfValidatorNumber(array('required' => false)),
      'n_costo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'tipo_doc' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'tipo_dis' => new sfValidatorInteger(array('required' => false)),
      'moneda'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'tasa'     => new sfValidatorNumber(array('required' => false)),
      'reng_doc' => new sfValidatorInteger(array('required' => false)),
      'fac_gast' => new sfValidatorInteger(array('required' => false)),
      'art_gast' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_aco[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAco';
  }

}
