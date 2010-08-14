<?php

/**
 * Entregas form base class.
 *
 * @method Entregas getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEntregasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'servicios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => false)),
      'observacion'  => new sfWidgetFormTextarea(),
      'fecha'        => new sfWidgetFormDateTime(),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'servicios_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'))),
      'observacion'  => new sfValidatorString(array('max_length' => 1000)),
      'fecha'        => new sfValidatorDateTime(),
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entregas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entregas';
  }

}
