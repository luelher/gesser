<?php

/**
 * Art filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'art_des'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_reg'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'manj_ser'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_lin'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LinArt'), 'add_empty' => true)),
      'co_cat'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CatArt'), 'add_empty' => true)),
      'co_subl'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubLin_4'), 'add_empty' => true)),
      'co_color'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Colores'), 'add_empty' => true)),
      'item'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ref'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'procedenci' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proceden'), 'add_empty' => true)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_prov'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => true)),
      'ubicacion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidades'), 'add_empty' => true)),
      'uni_compra' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_relac'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relac_aut'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_act'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_com'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_com' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_lle'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_lle' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_des'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_venta' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidades_9'), 'add_empty' => true)),
      'suni_compr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_relac' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_act' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relac_comp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relac_vent' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pto_pedido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_max'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_min'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_om'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_prec_v' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fec_prec_2' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prec_vta2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_prec_3' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prec_vta3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_prec_4' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prec_vta4'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_prec_5' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prec_vta5'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_agr1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_agr2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_agr3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_agr4'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_agr5'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'can_agr'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_des_p5' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fec_has_p5' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_imp'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen_max' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_ult_co' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cos_pro_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cos_pr' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cos_merc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cos_me' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cos_prov'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cos_p2' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ult_cos_do' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cos_do' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cos_un_an'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cos_an' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_ult_om' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cos_pro_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_pro_om' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipo_cos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_comi'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_cos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_cos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_gas'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_gas'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'f_cost'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fisico'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'punt_cli'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'punt_pro'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias_repos' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alm_prin'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_imp'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tabulado'), 'add_empty' => true)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mon_ilc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capacidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_al'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_licor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'compuesto'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'picture'    => new sfWidgetFormFilterInput(),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tuni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'equi_uni1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'equi_uni2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'equi_uni3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lote'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'serialp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valido'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'atributo1'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo2'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo3'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo3' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo4'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo4' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo5'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo5' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo6'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo6' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'garantia'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pie'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'row_id'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'imagen1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'i_art_des'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_emp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rel_emp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movil'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'art_des'    => new sfValidatorPass(array('required' => false)),
      'fecha_reg'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'manj_ser'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_lin'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LinArt'), 'column' => 'co_lin')),
      'co_cat'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CatArt'), 'column' => 'co_cat')),
      'co_subl'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubLin_4'), 'column' => 'co_subl')),
      'co_color'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Colores'), 'column' => 'co_col')),
      'item'       => new sfValidatorPass(array('required' => false)),
      'ref'        => new sfValidatorPass(array('required' => false)),
      'modelo'     => new sfValidatorPass(array('required' => false)),
      'procedenci' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proceden'), 'column' => 'cod_proc')),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_prov'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Prov'), 'column' => 'co_prov')),
      'ubicacion'  => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unidades'), 'column' => 'co_uni')),
      'uni_compra' => new sfValidatorPass(array('required' => false)),
      'uni_relac'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_aut'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stock_act'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_com'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_com' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_lle'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_lle' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_des'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_des' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'suni_venta' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unidades_9'), 'column' => 'co_uni')),
      'suni_compr' => new sfValidatorPass(array('required' => false)),
      'suni_relac' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_act' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_comp' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_vent' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pto_pedido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_max'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_min'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_om'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_v' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fec_prec_2' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_3' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prec_vta3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_4' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prec_vta4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_5' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prec_vta5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'can_agr'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_des_p5' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fec_has_p5' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_imp'     => new sfValidatorPass(array('required' => false)),
      'margen_max' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_ult_co' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_pr' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cos_merc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_me' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cos_prov'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_p2' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ult_cos_do' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_do' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cos_un_an'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_an' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_ult_om' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_pro_om' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipo_cos'   => new sfValidatorPass(array('required' => false)),
      'mont_comi'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_gas'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_gas'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'f_cost'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fisico'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'punt_cli'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'punt_pro'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dias_repos' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'alm_prin'   => new sfValidatorPass(array('required' => false)),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_imp'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tabulado'), 'column' => 'tipo')),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'mon_ilc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'capacidad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'grado_al'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_licor' => new sfValidatorPass(array('required' => false)),
      'compuesto'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'picture'    => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'tuni_venta' => new sfValidatorPass(array('required' => false)),
      'equi_uni1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'equi_uni2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'equi_uni3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'lote'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'serialp'    => new sfValidatorPass(array('required' => false)),
      'valido'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'atributo1'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo1' => new sfValidatorPass(array('required' => false)),
      'atributo2'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo2' => new sfValidatorPass(array('required' => false)),
      'atributo3'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo3' => new sfValidatorPass(array('required' => false)),
      'atributo4'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo4' => new sfValidatorPass(array('required' => false)),
      'atributo5'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo5' => new sfValidatorPass(array('required' => false)),
      'atributo6'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo6' => new sfValidatorPass(array('required' => false)),
      'garantia'   => new sfValidatorPass(array('required' => false)),
      'peso'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pie'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen4'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen5'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'row_id'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'imagen1'    => new sfValidatorPass(array('required' => false)),
      'imagen2'    => new sfValidatorPass(array('required' => false)),
      'i_art_des'  => new sfValidatorPass(array('required' => false)),
      'uni_emp'    => new sfValidatorPass(array('required' => false)),
      'rel_emp'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'movil'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('art_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Art';
  }

  public function getFields()
  {
    return array(
      'co_art'     => 'Text',
      'art_des'    => 'Text',
      'fecha_reg'  => 'Date',
      'manj_ser'   => 'Boolean',
      'co_lin'     => 'ForeignKey',
      'co_cat'     => 'ForeignKey',
      'co_subl'    => 'ForeignKey',
      'co_color'   => 'ForeignKey',
      'item'       => 'Text',
      'ref'        => 'Text',
      'modelo'     => 'Text',
      'procedenci' => 'ForeignKey',
      'comentario' => 'Text',
      'co_prov'    => 'ForeignKey',
      'ubicacion'  => 'Text',
      'uni_venta'  => 'ForeignKey',
      'uni_compra' => 'Text',
      'uni_relac'  => 'Number',
      'relac_aut'  => 'Number',
      'stock_act'  => 'Number',
      'stock_com'  => 'Number',
      'sstock_com' => 'Number',
      'stock_lle'  => 'Number',
      'sstock_lle' => 'Number',
      'stock_des'  => 'Number',
      'sstock_des' => 'Number',
      'suni_venta' => 'ForeignKey',
      'suni_compr' => 'Text',
      'suni_relac' => 'Number',
      'sstock_act' => 'Number',
      'relac_comp' => 'Number',
      'relac_vent' => 'Number',
      'pto_pedido' => 'Number',
      'stock_max'  => 'Number',
      'stock_min'  => 'Number',
      'prec_om'    => 'Boolean',
      'prec_vta1'  => 'Number',
      'fec_prec_v' => 'Date',
      'fec_prec_2' => 'Date',
      'prec_vta2'  => 'Number',
      'fec_prec_3' => 'Date',
      'prec_vta3'  => 'Number',
      'fec_prec_4' => 'Date',
      'prec_vta4'  => 'Number',
      'fec_prec_5' => 'Date',
      'prec_vta5'  => 'Number',
      'prec_agr1'  => 'Number',
      'prec_agr2'  => 'Number',
      'prec_agr3'  => 'Number',
      'prec_agr4'  => 'Number',
      'prec_agr5'  => 'Number',
      'can_agr'    => 'Number',
      'fec_des_p5' => 'Date',
      'fec_has_p5' => 'Date',
      'co_imp'     => 'Text',
      'margen_max' => 'Number',
      'ult_cos_un' => 'Number',
      'fec_ult_co' => 'Date',
      'cos_pro_un' => 'Number',
      'fec_cos_pr' => 'Date',
      'cos_merc'   => 'Number',
      'fec_cos_me' => 'Date',
      'cos_prov'   => 'Number',
      'fec_cos_p2' => 'Date',
      'ult_cos_do' => 'Number',
      'fec_cos_do' => 'Date',
      'cos_un_an'  => 'Number',
      'fec_cos_an' => 'Date',
      'ult_cos_om' => 'Number',
      'fec_ult_om' => 'Date',
      'cos_pro_om' => 'Number',
      'fec_pro_om' => 'Date',
      'tipo_cos'   => 'Text',
      'mont_comi'  => 'Number',
      'porc_cos'   => 'Number',
      'mont_cos'   => 'Number',
      'porc_gas'   => 'Number',
      'mont_gas'   => 'Number',
      'f_cost'     => 'Date',
      'fisico'     => 'Boolean',
      'punt_cli'   => 'Number',
      'punt_pro'   => 'Number',
      'dias_repos' => 'Number',
      'tipo'       => 'Text',
      'alm_prin'   => 'Text',
      'anulado'    => 'Boolean',
      'tipo_imp'   => 'ForeignKey',
      'dis_cen'    => 'Text',
      'mon_ilc'    => 'Number',
      'capacidad'  => 'Number',
      'grado_al'   => 'Number',
      'tipo_licor' => 'Text',
      'compuesto'  => 'Boolean',
      'picture'    => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'Text',
      'rowguid'    => 'Text',
      'tuni_venta' => 'Text',
      'equi_uni1'  => 'Number',
      'equi_uni2'  => 'Number',
      'equi_uni3'  => 'Number',
      'lote'       => 'Boolean',
      'serialp'    => 'Text',
      'valido'     => 'Boolean',
      'atributo1'  => 'Boolean',
      'vatributo1' => 'Text',
      'atributo2'  => 'Boolean',
      'vatributo2' => 'Text',
      'atributo3'  => 'Boolean',
      'vatributo3' => 'Text',
      'atributo4'  => 'Boolean',
      'vatributo4' => 'Text',
      'atributo5'  => 'Boolean',
      'vatributo5' => 'Text',
      'atributo6'  => 'Boolean',
      'vatributo6' => 'Text',
      'garantia'   => 'Text',
      'peso'       => 'Number',
      'pie'        => 'Number',
      'margen1'    => 'Number',
      'margen2'    => 'Number',
      'margen3'    => 'Number',
      'margen4'    => 'Number',
      'margen5'    => 'Number',
      'row_id'     => 'Date',
      'imagen1'    => 'Text',
      'imagen2'    => 'Text',
      'i_art_des'  => 'Text',
      'uni_emp'    => 'Text',
      'rel_emp'    => 'Number',
      'movil'      => 'Boolean',
    );
  }
}
