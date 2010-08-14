<?php

/**
 * RengAim form base class.
 *
 * @method RengAim getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengAimForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imp_num'  => new sfWidgetFormInputHidden(),
      'reng_num' => new sfWidgetFormInputHidden(),
      'fact_num' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom'), 'add_empty' => false)),
      'co_art'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'cantidad' => new sfWidgetFormInputText(),
      'neto'     => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'costo_d'  => new sfWidgetFormInputText(),
      'nuevo_co' => new sfWidgetFormInputText(),
      'margen'   => new sfWidgetFormInputText(),
      'porc_ara' => new sfWidgetFormInputText(),
      'pie_cub'  => new sfWidgetFormInputText(),
      'peso'     => new sfWidgetFormInputText(),
      'moneda'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'tasa'     => new sfWidgetFormInputText(),
      'reng_doc' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom_5'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'imp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('imp_num')), 'empty_value' => $this->getObject()->get('imp_num'), 'required' => false)),
      'reng_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'fact_num' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom'), 'required' => false)),
      'co_art'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'cantidad' => new sfValidatorNumber(array('required' => false)),
      'neto'     => new sfValidatorNumber(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'costo_d'  => new sfValidatorNumber(array('required' => false)),
      'nuevo_co' => new sfValidatorNumber(array('required' => false)),
      'margen'   => new sfValidatorNumber(array('required' => false)),
      'porc_ara' => new sfValidatorNumber(array('required' => false)),
      'pie_cub'  => new sfValidatorNumber(array('required' => false)),
      'peso'     => new sfValidatorNumber(array('required' => false)),
      'moneda'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'tasa'     => new sfValidatorNumber(array('required' => false)),
      'reng_doc' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom_5'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_aim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAim';
  }

}
