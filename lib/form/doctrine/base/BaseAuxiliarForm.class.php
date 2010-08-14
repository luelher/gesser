<?php

/**
 * Auxiliar form base class.
 *
 * @method Auxiliar getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAuxiliarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom_aux'  => new sfWidgetFormInputHidden(),
      'val_aux'  => new sfWidgetFormInputText(),
      'tipo_aux' => new sfWidgetFormInputText(),
      'form_aux' => new sfWidgetFormInputText(),
      'cach_aux' => new sfWidgetFormInputCheckbox(),
      'grup_aux' => new sfWidgetFormInputHidden(),
      'rowguid'  => new sfWidgetFormInputText(),
      'des_aux'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nom_aux'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nom_aux')), 'empty_value' => $this->getObject()->get('nom_aux'), 'required' => false)),
      'val_aux'  => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'tipo_aux' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'form_aux' => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'cach_aux' => new sfValidatorBoolean(array('required' => false)),
      'grup_aux' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('grup_aux')), 'empty_value' => $this->getObject()->get('grup_aux'), 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'des_aux'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('auxiliar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auxiliar';
  }

}
