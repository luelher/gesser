<?php

/**
 * MovCaj form base class.
 *
 * @method MovCaj getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMovCajForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mov_num'    => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cajas'), 'add_empty' => false)),
      'dep_num'    => new sfWidgetFormInputText(),
      'reng_num'   => new sfWidgetFormInputText(),
      'mov_afec'   => new sfWidgetFormInputText(),
      'mon_dep'    => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'tipo_op'    => new sfWidgetFormInputText(),
      'forma_pag'  => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDateTime(),
      'doc_num'    => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'monto_d'    => new sfWidgetFormInputText(),
      'monto_h'    => new sfWidgetFormInputText(),
      'cta_egre'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => false)),
      'cob_pag'    => new sfWidgetFormInputText(),
      'ori_dep'    => new sfWidgetFormInputCheckbox(),
      'dep_con'    => new sfWidgetFormInputText(),
      'banc_tarj'  => new sfWidgetFormInputText(),
      'cod_ingben' => new sfWidgetFormInputText(),
      'fecha_che'  => new sfWidgetFormDateTime(),
      'feccom'     => new sfWidgetFormDateTime(),
      'numcom'     => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => false)),
      'tasa'       => new sfWidgetFormInputText(),
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
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'num_turno'  => new sfWidgetFormInputText(),
      'movt_ori'   => new sfWidgetFormInputText(),
      'movt_gen'   => new sfWidgetFormInputText(),
      'tracaja'    => new sfWidgetFormInputCheckbox(),
      'operador'   => new sfWidgetFormInputText(),
      'clave'      => new sfWidgetFormInputText(),
      'moneda2'    => new sfWidgetFormInputText(),
      'tasa2'      => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'doc_sel'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'mov_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mov_num')), 'empty_value' => $this->getObject()->get('mov_num'), 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cajas'), 'required' => false)),
      'dep_num'    => new sfValidatorInteger(array('required' => false)),
      'reng_num'   => new sfValidatorInteger(array('required' => false)),
      'mov_afec'   => new sfValidatorInteger(array('required' => false)),
      'mon_dep'    => new sfValidatorNumber(array('required' => false)),
      'origen'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'tipo_op'    => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'forma_pag'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'doc_num'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'monto_d'    => new sfValidatorNumber(array('required' => false)),
      'monto_h'    => new sfValidatorNumber(array('required' => false)),
      'cta_egre'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'required' => false)),
      'cob_pag'    => new sfValidatorInteger(array('required' => false)),
      'ori_dep'    => new sfValidatorBoolean(array('required' => false)),
      'dep_con'    => new sfValidatorInteger(array('required' => false)),
      'banc_tarj'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cod_ingben' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fecha_che'  => new sfValidatorDateTime(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
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
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'num_turno'  => new sfValidatorInteger(array('required' => false)),
      'movt_ori'   => new sfValidatorInteger(array('required' => false)),
      'movt_gen'   => new sfValidatorInteger(array('required' => false)),
      'tracaja'    => new sfValidatorBoolean(array('required' => false)),
      'operador'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'clave'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'moneda2'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tasa2'      => new sfValidatorNumber(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'doc_sel'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mov_caj[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovCaj';
  }

}
