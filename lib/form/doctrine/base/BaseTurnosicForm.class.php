<?php

/**
 * Turnosic form base class.
 *
 * @method Turnosic getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTurnosicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_turno'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Turnos'), 'add_empty' => false)),
      'cod_caja'  => new sfWidgetFormInputText(),
      'saldo'     => new sfWidgetFormInputText(),
      'num_turno' => new sfWidgetFormInputHidden(),
      'user_caj'  => new sfWidgetFormInputText(),
      'user_sup'  => new sfWidgetFormInputText(),
      'fecha'     => new sfWidgetFormDateTime(),
      'inicio'    => new sfWidgetFormDateTime(),
      'finaliza'  => new sfWidgetFormDateTime(),
      'status'    => new sfWidgetFormInputText(),
      'restringe' => new sfWidgetFormInputCheckbox(),
      'hora_ini'  => new sfWidgetFormInputText(),
      'minu_ini'  => new sfWidgetFormInputText(),
      'ampm_ini'  => new sfWidgetFormInputText(),
      'hora_fin'  => new sfWidgetFormInputText(),
      'minu_fin'  => new sfWidgetFormInputText(),
      'ampm_fin'  => new sfWidgetFormInputText(),
      'co_us_in'  => new sfWidgetFormInputText(),
      'fe_us_in'  => new sfWidgetFormDateTime(),
      'co_us_mo'  => new sfWidgetFormInputText(),
      'fe_us_mo'  => new sfWidgetFormDateTime(),
      'co_us_el'  => new sfWidgetFormInputText(),
      'fe_us_el'  => new sfWidgetFormDateTime(),
      'revisado'  => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'co_sucu'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => false)),
      'rowguid'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_turno'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Turnos'), 'required' => false)),
      'cod_caja'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'saldo'     => new sfValidatorNumber(array('required' => false)),
      'num_turno' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('num_turno')), 'empty_value' => $this->getObject()->get('num_turno'), 'required' => false)),
      'user_caj'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'user_sup'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fecha'     => new sfValidatorDateTime(array('required' => false)),
      'inicio'    => new sfValidatorDateTime(array('required' => false)),
      'finaliza'  => new sfValidatorDateTime(array('required' => false)),
      'status'    => new sfValidatorNumber(array('required' => false)),
      'restringe' => new sfValidatorBoolean(array('required' => false)),
      'hora_ini'  => new sfValidatorNumber(array('required' => false)),
      'minu_ini'  => new sfValidatorNumber(array('required' => false)),
      'ampm_ini'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'hora_fin'  => new sfValidatorNumber(array('required' => false)),
      'minu_fin'  => new sfValidatorNumber(array('required' => false)),
      'ampm_fin'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'  => new sfValidatorDateTime(array('required' => false)),
      'revisado'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('turnosic[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turnosic';
  }

}
