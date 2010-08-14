<?php

/**
 * Spimplosion form base class.
 *
 * @method Spimplosion getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpimplosionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inp_num'    => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDateTime(),
      'alm_orig'   => new sfWidgetFormInputText(),
      'motivo_glo' => new sfWidgetFormInputText(),
      'co_art'     => new sfWidgetFormInputText(),
      'art_des'    => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'revisado'   => new sfWidgetFormInputText(),
      'impnfe'     => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'maxima'     => new sfWidgetFormInputText(),
      'unidad'     => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'cod_ced'    => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('inp_num')), 'empty_value' => $this->getObject()->get('inp_num'), 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'alm_orig'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'motivo_glo' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'art_des'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'impnfe'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'maxima'     => new sfValidatorNumber(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
      'cod_ced'    => new sfValidatorInteger(),
      'co_alma'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spimplosion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spimplosion';
  }

}
