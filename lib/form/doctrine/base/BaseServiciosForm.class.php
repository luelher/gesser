<?php

/**
 * Servicios form base class.
 *
 * @method Servicios getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiciosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente'     => new sfWidgetFormInputText(),
      'situacion'   => new sfWidgetFormTextarea(),
      'observacion' => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDateTime(),
      'id'          => new sfWidgetFormInputHidden(),
      'factura'     => new sfWidgetFormInputText(),
      'articulo'    => new sfWidgetFormInputText(),
      'estado'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cliente'     => new sfValidatorString(array('max_length' => 10)),
      'situacion'   => new sfValidatorString(array('max_length' => 1000)),
      'observacion' => new sfValidatorString(array('max_length' => 1000)),
      'fecha'       => new sfValidatorDateTime(),
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'factura'     => new sfValidatorInteger(),
      'articulo'    => new sfValidatorString(array('max_length' => 30)),
      'estado'      => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('servicios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicios';
  }

}
