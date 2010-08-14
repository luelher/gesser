<?php

/**
 * Dmc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDmcFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_dmc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_emis' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_ag_im' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ag_ex' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ent_a' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sal_d' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_trans' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'guia_emb' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fact_num' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_fact' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_trasb' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reg_num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pais'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pa_od' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pt_od' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pt_tr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pt_en' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pt_sa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_dest'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_dr_de' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_em'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_dr_em' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_fob'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_flet' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_seg'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_gast' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_cif'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'itbms'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_rec'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulada'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'impresa'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_doc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_dmc' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_emis' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_ag_im' => new sfValidatorPass(array('required' => false)),
      'co_ag_ex' => new sfValidatorPass(array('required' => false)),
      'co_ent_a' => new sfValidatorPass(array('required' => false)),
      'co_sal_d' => new sfValidatorPass(array('required' => false)),
      'co_trans' => new sfValidatorPass(array('required' => false)),
      'guia_emb' => new sfValidatorPass(array('required' => false)),
      'fact_num' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_fact' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_trasb' => new sfValidatorPass(array('required' => false)),
      'reg_num'  => new sfValidatorPass(array('required' => false)),
      'co_pais'  => new sfValidatorPass(array('required' => false)),
      'co_pto'   => new sfValidatorPass(array('required' => false)),
      'co_pa_od' => new sfValidatorPass(array('required' => false)),
      'co_pt_od' => new sfValidatorPass(array('required' => false)),
      'co_pt_tr' => new sfValidatorPass(array('required' => false)),
      'co_pt_en' => new sfValidatorPass(array('required' => false)),
      'co_pt_sa' => new sfValidatorPass(array('required' => false)),
      'co_dest'  => new sfValidatorPass(array('required' => false)),
      'co_dr_de' => new sfValidatorPass(array('required' => false)),
      'co_em'    => new sfValidatorPass(array('required' => false)),
      'co_dr_em' => new sfValidatorPass(array('required' => false)),
      'tot_fob'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_flet' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_seg'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_gast' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_cif'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'itbms'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'des_rec'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'   => new sfValidatorPass(array('required' => false)),
      'anulada'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'impresa'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_doc' => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'campo5'   => new sfValidatorPass(array('required' => false)),
      'campo6'   => new sfValidatorPass(array('required' => false)),
      'campo7'   => new sfValidatorPass(array('required' => false)),
      'campo8'   => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dmc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dmc';
  }

  public function getFields()
  {
    return array(
      'dmc_num'  => 'Number',
      'tipo_dmc' => 'Number',
      'fec_emis' => 'Date',
      'co_ag_im' => 'Text',
      'co_ag_ex' => 'Text',
      'co_ent_a' => 'Text',
      'co_sal_d' => 'Text',
      'co_trans' => 'Text',
      'guia_emb' => 'Text',
      'fact_num' => 'Number',
      'fec_fact' => 'Date',
      'co_trasb' => 'Text',
      'reg_num'  => 'Text',
      'co_pais'  => 'Text',
      'co_pto'   => 'Text',
      'co_pa_od' => 'Text',
      'co_pt_od' => 'Text',
      'co_pt_tr' => 'Text',
      'co_pt_en' => 'Text',
      'co_pt_sa' => 'Text',
      'co_dest'  => 'Text',
      'co_dr_de' => 'Text',
      'co_em'    => 'Text',
      'co_dr_em' => 'Text',
      'tot_fob'  => 'Number',
      'tot_flet' => 'Number',
      'tot_seg'  => 'Number',
      'tot_gast' => 'Number',
      'tot_cif'  => 'Number',
      'itbms'    => 'Number',
      'des_rec'  => 'Number',
      'status'   => 'Text',
      'anulada'  => 'Boolean',
      'impresa'  => 'Boolean',
      'tipo_doc' => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'co_sucu'  => 'Text',
      'trasnfe'  => 'Text',
      'revisado' => 'Text',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'campo5'   => 'Text',
      'campo6'   => 'Text',
      'campo7'   => 'Text',
      'campo8'   => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
