<?php

/**
 * Tabulado form base class.
 *
 * @method Tabulado getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTabuladoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'       => new sfWidgetFormInputHidden(),
      'descripcio' => new sfWidgetFormInputText(),
      'porc_vent'  => new sfWidgetFormInputText(),
      'porc_comp'  => new sfWidgetFormInputText(),
      'porc_cxs'   => new sfWidgetFormInputText(),
      'porc_otro'  => new sfWidgetFormInputText(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipo'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo')), 'empty_value' => $this->getObject()->get('tipo'), 'required' => false)),
      'descripcio' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'porc_vent'  => new sfValidatorNumber(array('required' => false)),
      'porc_comp'  => new sfValidatorNumber(array('required' => false)),
      'porc_cxs'   => new sfValidatorNumber(array('required' => false)),
      'porc_otro'  => new sfValidatorNumber(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tabulado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabulado';
  }

}
