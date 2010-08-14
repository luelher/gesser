<?php

/**
 * RengGen filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengGenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'neto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aju_sal'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'pendiente2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'suni_venta' => new sfValidatorPass(array('required' => false)),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'neto'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aju_sal'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_gen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengGen';
  }

  public function getFields()
  {
    return array(
      'gene_num'   => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'ForeignKey',
      'dis_cen'    => 'Text',
      'uni_venta'  => 'Text',
      'total_art'  => 'Number',
      'suni_venta' => 'Text',
      'stotal_art' => 'Number',
      'costo_uni'  => 'Number',
      'co_alma'    => 'ForeignKey',
      'neto'       => 'Number',
      'aju_sal'    => 'Number',
      'cos_pro_un' => 'Number',
      'ult_cos_om' => 'Number',
      'cos_pro_om' => 'Number',
      'rowguid'    => 'Text',
      'total_uni'  => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
