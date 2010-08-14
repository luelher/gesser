<?php

/**
 * RengNde filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengNdeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pendiente'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_desc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_neto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_dev'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_dev'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'des_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seleccion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cant_imp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mon_ilc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'otros'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'pendiente2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_prod'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imp_prod'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'reng_doc'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pendiente'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'prec_vta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_desc'  => new sfValidatorPass(array('required' => false)),
      'tipo_imp'   => new sfValidatorPass(array('required' => false)),
      'reng_neto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_dev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_dev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'des_art'    => new sfValidatorPass(array('required' => false)),
      'seleccion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cant_imp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mon_ilc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'otros'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_alma2'   => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
      'cant_prod'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_prod'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_nde_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengNde';
  }

  public function getFields()
  {
    return array(
      'fact_num'   => 'Number',
      'reng_num'   => 'Number',
      'dis_cen'    => 'Text',
      'tipo_doc'   => 'Text',
      'reng_doc'   => 'Number',
      'num_doc'    => 'Number',
      'co_art'     => 'ForeignKey',
      'co_alma'    => 'ForeignKey',
      'total_art'  => 'Number',
      'stotal_art' => 'Number',
      'pendiente'  => 'Number',
      'uni_venta'  => 'Text',
      'prec_vta'   => 'Number',
      'porc_desc'  => 'Text',
      'tipo_imp'   => 'Text',
      'reng_neto'  => 'Number',
      'cos_pro_un' => 'Number',
      'ult_cos_un' => 'Number',
      'ult_cos_om' => 'Number',
      'cos_pro_om' => 'Number',
      'total_dev'  => 'Number',
      'monto_dev'  => 'Number',
      'prec_vta2'  => 'Number',
      'anulado'    => 'Boolean',
      'des_art'    => 'Text',
      'seleccion'  => 'Boolean',
      'cant_imp'   => 'Number',
      'comentario' => 'Text',
      'rowguid'    => 'Text',
      'total_uni'  => 'Number',
      'mon_ilc'    => 'Number',
      'otros'      => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'co_alma2'   => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
      'cant_prod'  => 'Number',
      'imp_prod'   => 'Number',
    );
  }
}
