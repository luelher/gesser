<?php

/**
 * RengFis filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengFisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'co_lin'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_teor'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_real'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_teo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_uni'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aju_num'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saju_num'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cerrado'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'uni_venta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_venta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      't_costo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'costo_uni_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pendiente2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'co_lin'       => new sfValidatorPass(array('required' => false)),
      'co_alma'      => new sfValidatorPass(array('required' => false)),
      'stock_teor'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_real'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_teo'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo_uni'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aju_num'      => new sfValidatorPass(array('required' => false)),
      'saju_num'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cerrado'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'uni_venta'    => new sfValidatorPass(array('required' => false)),
      'suni_venta'   => new sfValidatorPass(array('required' => false)),
      't_costo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'      => new sfValidatorPass(array('required' => false)),
      'total_uni'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'     => new sfValidatorPass(array('required' => false)),
      'fec_lote'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'costo_uni_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pendiente2'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'    => new sfValidatorPass(array('required' => false)),
      'reng_doc2'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aux01'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_fis_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFis';
  }

  public function getFields()
  {
    return array(
      'num_fis'      => 'Number',
      'reng_num'     => 'Number',
      'co_art'       => 'ForeignKey',
      'co_lin'       => 'Text',
      'co_alma'      => 'Text',
      'stock_teor'   => 'Number',
      'stock_real'   => 'Number',
      'sstock_teo'   => 'Number',
      'stotal_art'   => 'Number',
      'costo_uni'    => 'Number',
      'aju_num'      => 'Text',
      'saju_num'     => 'Number',
      'cerrado'      => 'Boolean',
      'uni_venta'    => 'Text',
      'suni_venta'   => 'Text',
      't_costo'      => 'Number',
      'rowguid'      => 'Text',
      'total_uni'    => 'Number',
      'nro_lote'     => 'Text',
      'fec_lote'     => 'Date',
      'costo_uni_om' => 'Number',
      'pendiente2'   => 'Number',
      'tipo_doc2'    => 'Text',
      'reng_doc2'    => 'Number',
      'num_doc2'     => 'Number',
      'aux01'        => 'Number',
      'aux02'        => 'Text',
    );
  }
}
