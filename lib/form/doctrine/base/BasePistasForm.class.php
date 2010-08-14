<?php

/**
 * Pistas form base class.
 *
 * @method Pistas getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePistasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario_id' => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDateTime(),
      'empresa'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'tabla'      => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'codigo'     => new sfWidgetFormInputText(),
      'tipo_op'    => new sfWidgetFormInputText(),
      'maquina'    => new sfWidgetFormInputText(),
      'campos'     => new sfWidgetFormTextarea(),
      'rowguid'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'empresa'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tabla'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'num_doc'    => new sfValidatorInteger(array('required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'tipo_op'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'maquina'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campos'     => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pistas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pistas';
  }

}
