<?php

/**
 * Sptar form base class.
 *
 * @method Sptar getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSptarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_tar'     => new sfWidgetFormInputHidden(),
      'tar_des'    => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'atributo1'  => new sfWidgetFormInputCheckbox(),
      'vatributo1' => new sfWidgetFormInputText(),
      'atributo2'  => new sfWidgetFormInputCheckbox(),
      'vatributo2' => new sfWidgetFormInputText(),
      'atributo3'  => new sfWidgetFormInputCheckbox(),
      'vatributo3' => new sfWidgetFormInputText(),
      'atributo4'  => new sfWidgetFormInputCheckbox(),
      'vatributo4' => new sfWidgetFormInputText(),
      'atributo5'  => new sfWidgetFormInputCheckbox(),
      'vatributo5' => new sfWidgetFormInputText(),
      'atributo6'  => new sfWidgetFormInputCheckbox(),
      'vatributo6' => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'rowguid'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'man_mat'    => new sfWidgetFormInputCheckbox(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_tar'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_tar')), 'empty_value' => $this->getObject()->get('co_tar'), 'required' => false)),
      'tar_des'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'atributo1'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo1' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'atributo2'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo2' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'atributo3'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo3' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'atributo4'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo4' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'atributo5'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo5' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'atributo6'  => new sfValidatorBoolean(array('required' => false)),
      'vatributo6' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'man_mat'    => new sfValidatorBoolean(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('sptar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sptar';
  }

}
