<?php

/**
 * Spodp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpodpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ced'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spced'), 'add_empty' => true)),
      'ca_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_inic'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_fin'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prioridad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'edo_odp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_maqblo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ct_estim'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_emis'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mp_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mo_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gf_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'men_cant'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mem_cant'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'oi_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codpcom'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nodpcom'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_ori'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'co_ced'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spced'), 'column' => 'co_ced')),
      'ca_art'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fe_inic'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_fin'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prioridad'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'edo_odp'    => new sfValidatorPass(array('required' => false)),
      'num_maqblo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ct_estim'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'fe_emis'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'mp_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mo_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gf_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'men_cant'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mem_cant'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'oi_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'codpcom'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nodpcom'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'doc_ori'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('spodp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spodp';
  }

  public function getFields()
  {
    return array(
      'odp_num'    => 'Number',
      'co_art'     => 'Text',
      'co_ced'     => 'ForeignKey',
      'ca_art'     => 'Number',
      'fe_inic'    => 'Date',
      'fe_fin'     => 'Date',
      'prioridad'  => 'Number',
      'edo_odp'    => 'Text',
      'num_maqblo' => 'Number',
      'ct_estim'   => 'Number',
      'co_us_in'   => 'Text',
      'co_us_mo'   => 'Text',
      'co_us_el'   => 'Text',
      'fe_us_in'   => 'Date',
      'fe_us_mo'   => 'Date',
      'fe_us_el'   => 'Date',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'rowguid'    => 'Text',
      'fe_emis'    => 'Date',
      'descrip'    => 'Text',
      'comentario' => 'Text',
      'co_sucu'    => 'Text',
      'anulado'    => 'Boolean',
      'dis_cen'    => 'Text',
      'mp_cant'    => 'Number',
      'mo_cant'    => 'Number',
      'gf_cant'    => 'Number',
      'men_cant'   => 'Number',
      'mem_cant'   => 'Number',
      'oi_cant'    => 'Number',
      'trasnfe'    => 'Text',
      'total_uni'  => 'Number',
      'uni_venta'  => 'Text',
      'codpcom'    => 'Number',
      'nodpcom'    => 'Number',
      'doc_ori'    => 'Number',
    );
  }
}
