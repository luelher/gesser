<?php

/**
 * Formatos form base class.
 *
 * @method Formatos getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormatosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_for'   => new sfWidgetFormInputText(),
      'co_for'     => new sfWidgetFormInputHidden(),
      'descrip'    => new sfWidgetFormInputText(),
      'guardo_en'  => new sfWidgetFormInputText(),
      'nro_lin'    => new sfWidgetFormInputText(),
      'lin_encab'  => new sfWidgetFormInputText(),
      'lin_cuerpo' => new sfWidgetFormInputText(),
      'tipo_letra' => new sfWidgetFormInputText(),
      'colu_obse'  => new sfWidgetFormInputText(),
      'cant_obse'  => new sfWidgetFormInputText(),
      'letr_obse'  => new sfWidgetFormInputText(),
      'cant_reng'  => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipo_for'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_for'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_for')), 'empty_value' => $this->getObject()->get('co_for'), 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'guardo_en'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'nro_lin'    => new sfValidatorInteger(array('required' => false)),
      'lin_encab'  => new sfValidatorInteger(array('required' => false)),
      'lin_cuerpo' => new sfValidatorInteger(array('required' => false)),
      'tipo_letra' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'colu_obse'  => new sfValidatorInteger(array('required' => false)),
      'cant_obse'  => new sfValidatorInteger(array('required' => false)),
      'letr_obse'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cant_reng'  => new sfValidatorInteger(array('required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formatos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formatos';
  }

}
