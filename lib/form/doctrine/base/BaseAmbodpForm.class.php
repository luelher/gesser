<?php

/**
 * Ambodp form base class.
 *
 * @method Ambodp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbodpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'    => new sfWidgetFormInputHidden(),
      'monum_odp'   => new sfWidgetFormInputCheckbox(),
      'mopriorid'   => new sfWidgetFormInputCheckbox(),
      'prioridad'   => new sfWidgetFormInputCheckbox(),
      'vaprioridad' => new sfWidgetFormInputText(),
      'mofe_emis'   => new sfWidgetFormInputCheckbox(),
      'mofe_inic'   => new sfWidgetFormInputCheckbox(),
      'mofe_fin'    => new sfWidgetFormInputCheckbox(),
      'moco_ced'    => new sfWidgetFormInputCheckbox(),
      'bt_anulo'    => new sfWidgetFormInputCheckbox(),
      'bt_reversa'  => new sfWidgetFormInputCheckbox(),
      'importar'    => new sfWidgetFormInputCheckbox(),
      'rowguid'     => new sfWidgetFormInputText(),
      'campo1'      => new sfWidgetFormInputText(),
      'campo2'      => new sfWidgetFormInputText(),
      'campo3'      => new sfWidgetFormInputText(),
      'campo4'      => new sfWidgetFormInputText(),
      'campo5'      => new sfWidgetFormInputText(),
      'campo6'      => new sfWidgetFormInputText(),
      'campo7'      => new sfWidgetFormInputText(),
      'campo8'      => new sfWidgetFormInputText(),
      'co_us_in'    => new sfWidgetFormInputText(),
      'co_us_mo'    => new sfWidgetFormInputText(),
      'co_us_el'    => new sfWidgetFormInputText(),
      'fe_us_in'    => new sfWidgetFormDateTime(),
      'fe_us_mo'    => new sfWidgetFormDateTime(),
      'fe_us_el'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'amb_usua'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'monum_odp'   => new sfValidatorBoolean(array('required' => false)),
      'mopriorid'   => new sfValidatorBoolean(array('required' => false)),
      'prioridad'   => new sfValidatorBoolean(array('required' => false)),
      'vaprioridad' => new sfValidatorInteger(array('required' => false)),
      'mofe_emis'   => new sfValidatorBoolean(array('required' => false)),
      'mofe_inic'   => new sfValidatorBoolean(array('required' => false)),
      'mofe_fin'    => new sfValidatorBoolean(array('required' => false)),
      'moco_ced'    => new sfValidatorBoolean(array('required' => false)),
      'bt_anulo'    => new sfValidatorBoolean(array('required' => false)),
      'bt_reversa'  => new sfValidatorBoolean(array('required' => false)),
      'importar'    => new sfValidatorBoolean(array('required' => false)),
      'rowguid'     => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'campo1'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_us_mo'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_us_el'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_us_in'    => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'    => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambodp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambodp';
  }

}
