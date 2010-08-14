<?php

/**
 * Spodp form base class.
 *
 * @method Spodp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpodpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'odp_num'    => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputText(),
      'co_ced'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spced'), 'add_empty' => false)),
      'ca_art'     => new sfWidgetFormInputText(),
      'fe_inic'    => new sfWidgetFormDateTime(),
      'fe_fin'     => new sfWidgetFormDateTime(),
      'prioridad'  => new sfWidgetFormInputText(),
      'edo_odp'    => new sfWidgetFormInputText(),
      'num_maqblo' => new sfWidgetFormInputText(),
      'ct_estim'   => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'fe_emis'    => new sfWidgetFormDateTime(),
      'descrip'    => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'mp_cant'    => new sfWidgetFormInputText(),
      'mo_cant'    => new sfWidgetFormInputText(),
      'gf_cant'    => new sfWidgetFormInputText(),
      'men_cant'   => new sfWidgetFormInputText(),
      'mem_cant'   => new sfWidgetFormInputText(),
      'oi_cant'    => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'codpcom'    => new sfWidgetFormInputText(),
      'nodpcom'    => new sfWidgetFormInputText(),
      'doc_ori'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'odp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('odp_num')), 'empty_value' => $this->getObject()->get('odp_num'), 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_ced'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spced'), 'required' => false)),
      'ca_art'     => new sfValidatorNumber(array('required' => false)),
      'fe_inic'    => new sfValidatorDateTime(array('required' => false)),
      'fe_fin'     => new sfValidatorDateTime(array('required' => false)),
      'prioridad'  => new sfValidatorInteger(array('required' => false)),
      'edo_odp'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'num_maqblo' => new sfValidatorInteger(array('required' => false)),
      'ct_estim'   => new sfValidatorNumber(array('required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'fe_emis'    => new sfValidatorDateTime(array('required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'mp_cant'    => new sfValidatorNumber(array('required' => false)),
      'mo_cant'    => new sfValidatorNumber(array('required' => false)),
      'gf_cant'    => new sfValidatorNumber(array('required' => false)),
      'men_cant'   => new sfValidatorNumber(array('required' => false)),
      'mem_cant'   => new sfValidatorNumber(array('required' => false)),
      'oi_cant'    => new sfValidatorNumber(array('required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'codpcom'    => new sfValidatorInteger(array('required' => false)),
      'nodpcom'    => new sfValidatorInteger(array('required' => false)),
      'doc_ori'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spodp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spodp';
  }

}
