<?php

/**
 * Importac form base class.
 *
 * @method Importac getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseImportacForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'imp_num'    => new sfWidgetFormInputHidden(),
      'num_plvc'   => new sfWidgetFormInputText(),
      'tot_plvc'   => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'otro_cos'   => new sfWidgetFormInputText(),
      'tot_fai'    => new sfWidgetFormInputText(),
      'tot_fci'    => new sfWidgetFormInputText(),
      'tipo_dis'   => new sfWidgetFormInputText(),
      'anulada'    => new sfWidgetFormInputCheckbox(),
      'impresa'    => new sfWidgetFormInputCheckbox(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
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
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'monto_base' => new sfWidgetFormInputText(),
      'iva'        => new sfWidgetFormInputText(),
      'planilla'   => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'imp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('imp_num')), 'empty_value' => $this->getObject()->get('imp_num'), 'required' => false)),
      'num_plvc'   => new sfValidatorInteger(array('required' => false)),
      'tot_plvc'   => new sfValidatorNumber(array('required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'otro_cos'   => new sfValidatorNumber(array('required' => false)),
      'tot_fai'    => new sfValidatorNumber(array('required' => false)),
      'tot_fci'    => new sfValidatorNumber(array('required' => false)),
      'tipo_dis'   => new sfValidatorInteger(array('required' => false)),
      'anulada'    => new sfValidatorBoolean(array('required' => false)),
      'impresa'    => new sfValidatorBoolean(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'monto_base' => new sfValidatorNumber(array('required' => false)),
      'iva'        => new sfValidatorNumber(array('required' => false)),
      'planilla'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('importac[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Importac';
  }

}
