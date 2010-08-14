<?php

/**
 * Spdevalm form base class.
 *
 * @method Spdevalm getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpdevalmForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dev_num'    => new sfWidgetFormInputHidden(),
      'fecha'      => new sfWidgetFormDateTime(),
      'alm_orig'   => new sfWidgetFormInputText(),
      'alm_dest'   => new sfWidgetFormInputText(),
      'motivo_glo' => new sfWidgetFormInputText(),
      'confirma'   => new sfWidgetFormInputCheckbox(),
      'fec_conf'   => new sfWidgetFormDateTime(),
      'inactivo'   => new sfWidgetFormInputCheckbox(),
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
      'reqnfe'     => new sfWidgetFormInputText(),
      'seriales'   => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'odp_num'    => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'tras_num'   => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'dev_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dev_num')), 'empty_value' => $this->getObject()->get('dev_num'), 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'alm_orig'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'alm_dest'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'motivo_glo' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'confirma'   => new sfValidatorBoolean(array('required' => false)),
      'fec_conf'   => new sfValidatorDateTime(array('required' => false)),
      'inactivo'   => new sfValidatorBoolean(array('required' => false)),
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
      'reqnfe'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'seriales'   => new sfValidatorInteger(array('required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'odp_num'    => new sfValidatorInteger(array('required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'tras_num'   => new sfValidatorInteger(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('spdevalm[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spdevalm';
  }

}
