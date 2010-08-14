<?php

/**
 * RengDev filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengDevFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_ent'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_com'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_xdev'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_dev'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'pendiente2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multilote'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subced'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tar'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'cant_ent'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_com'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_xdev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_dev'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'suni_venta' => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'multilote'  => new sfValidatorPass(array('required' => false)),
      'subced'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_art2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'co_tar'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dev_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDev';
  }

  public function getFields()
  {
    return array(
      'dev_num'    => 'Number',
      'reng_num'   => 'Number',
      'dis_cen'    => 'Text',
      'co_art'     => 'Text',
      'cant_ent'   => 'Number',
      'cant_com'   => 'Number',
      'cant_xdev'  => 'Number',
      'cant_dev'   => 'Number',
      'total_art'  => 'Number',
      'stotal_art' => 'Number',
      'descrip'    => 'Text',
      'uni_venta'  => 'Text',
      'suni_venta' => 'Text',
      'total_uni'  => 'Number',
      'cos_pro_un' => 'Number',
      'cos_pro_om' => 'Number',
      'ult_cos_un' => 'Number',
      'ult_cos_om' => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'multilote'  => 'Text',
      'subced'     => 'Number',
      'total_art2' => 'Number',
      'rowguid'    => 'Text',
      'co_tar'     => 'Text',
    );
  }
}
