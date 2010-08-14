<?php

/**
 * TodosDesmarca form base class.
 *
 * @method TodosDesmarca getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTodosDesmarcaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'tipo_docs'  => new sfWidgetFormInputText(),
      'tipo_doc'   => new sfWidgetFormInputText(),
      'nro_doc'    => new sfWidgetFormInputText(),
      'automatico' => new sfWidgetFormInputText(),
      'fecha_doc'  => new sfWidgetFormDateTime(),
      'fecha_comp' => new sfWidgetFormDateTime(),
      'num_comp'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo_docs'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'tipo_doc'   => new sfValidatorString(array('max_length' => 4)),
      'nro_doc'    => new sfValidatorInteger(),
      'automatico' => new sfValidatorInteger(),
      'fecha_doc'  => new sfValidatorDateTime(),
      'fecha_comp' => new sfValidatorDateTime(),
      'num_comp'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('todos_desmarca[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodosDesmarca';
  }

}
