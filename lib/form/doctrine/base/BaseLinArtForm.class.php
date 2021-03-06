<?php

/**
 * LinArt form base class.
 *
 * @method LinArt getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinArtForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_lin'    => new sfWidgetFormInputHidden(),
      'lin_des'   => new sfWidgetFormInputText(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'campo1'    => new sfWidgetFormInputText(),
      'campo2'    => new sfWidgetFormInputText(),
      'campo3'    => new sfWidgetFormInputText(),
      'campo4'    => new sfWidgetFormInputText(),
      'co_us_in'  => new sfWidgetFormInputText(),
      'fe_us_in'  => new sfWidgetFormDateTime(),
      'co_us_mo'  => new sfWidgetFormInputText(),
      'fe_us_mo'  => new sfWidgetFormDateTime(),
      'co_us_el'  => new sfWidgetFormInputText(),
      'fe_us_el'  => new sfWidgetFormDateTime(),
      'revisado'  => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'co_sucu'   => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'co_imun'   => new sfWidgetFormInputText(),
      'co_reten'  => new sfWidgetFormInputText(),
      'comi_lin'  => new sfWidgetFormInputText(),
      'comi_lin2' => new sfWidgetFormInputText(),
      'row_id'    => new sfWidgetFormDateTime(),
      'va'        => new sfWidgetFormInputCheckbox(),
      'i_lin_des' => new sfWidgetFormInputText(),
      'movil'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'co_lin'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_lin')), 'empty_value' => $this->getObject()->get('co_lin'), 'required' => false)),
      'lin_des'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'  => new sfValidatorDateTime(array('required' => false)),
      'revisado'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_imun'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_reten'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'comi_lin'  => new sfValidatorNumber(array('required' => false)),
      'comi_lin2' => new sfValidatorNumber(array('required' => false)),
      'row_id'    => new sfValidatorDateTime(),
      'va'        => new sfValidatorBoolean(array('required' => false)),
      'i_lin_des' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'movil'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lin_art[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinArt';
  }

}
