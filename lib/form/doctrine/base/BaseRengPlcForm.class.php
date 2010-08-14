<?php

/**
 * RengPlc form base class.
 *
 * @method RengPlc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengPlcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'   => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'tipo_doc'   => new sfWidgetFormInputText(),
      'reng_doc'   => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'total_art'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'pendiente'  => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'prec_vta'   => new sfWidgetFormInputText(),
      'porc_desc'  => new sfWidgetFormInputText(),
      'tipo_imp'   => new sfWidgetFormInputText(),
      'reng_neto'  => new sfWidgetFormInputText(),
      'cos_pro_un' => new sfWidgetFormInputText(),
      'ult_cos_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'cos_pro_om' => new sfWidgetFormInputText(),
      'total_dev'  => new sfWidgetFormInputText(),
      'monto_dev'  => new sfWidgetFormInputText(),
      'prec_vta2'  => new sfWidgetFormInputText(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'des_art'    => new sfWidgetFormTextarea(),
      'seleccion'  => new sfWidgetFormInputCheckbox(),
      'cant_imp'   => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'rowguid'    => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'mon_ilc'    => new sfWidgetFormInputText(),
      'otros'      => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'pendiente2' => new sfWidgetFormInputText(),
      'tipo_doc2'  => new sfWidgetFormInputText(),
      'reng_doc2'  => new sfWidgetFormInputText(),
      'num_doc2'   => new sfWidgetFormInputText(),
      'co_alma2'   => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'cant_prod'  => new sfWidgetFormInputText(),
      'imp_prod'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'fact_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_num')), 'empty_value' => $this->getObject()->get('fact_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tipo_doc'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc'   => new sfValidatorInteger(array('required' => false)),
      'num_doc'    => new sfValidatorInteger(array('required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'pendiente'  => new sfValidatorNumber(array('required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'prec_vta'   => new sfValidatorNumber(array('required' => false)),
      'porc_desc'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'tipo_imp'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_neto'  => new sfValidatorNumber(array('required' => false)),
      'cos_pro_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_om' => new sfValidatorNumber(array('required' => false)),
      'total_dev'  => new sfValidatorNumber(array('required' => false)),
      'monto_dev'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta2'  => new sfValidatorNumber(array('required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'des_art'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'seleccion'  => new sfValidatorBoolean(array('required' => false)),
      'cant_imp'   => new sfValidatorNumber(array('required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'mon_ilc'    => new sfValidatorNumber(array('required' => false)),
      'otros'      => new sfValidatorNumber(array('required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'pendiente2' => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'  => new sfValidatorInteger(array('required' => false)),
      'num_doc2'   => new sfValidatorInteger(array('required' => false)),
      'co_alma2'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cant_prod'  => new sfValidatorNumber(array('required' => false)),
      'imp_prod'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_plc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengPlc';
  }

}
