<?php

/**
 * Ambart filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbartFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_artv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'art_desv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha_regv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'manj_serv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_lind'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_linv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_lin'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_catd'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_catv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_cat'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_subld'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_sublv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_subl'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_colord'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_colorv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_color'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'itemv'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'refv'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'modelov'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'procedencd'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'procedencv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'procedenci'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentariv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_provd'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_provv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_prov'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ubicacionv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'relac_autd'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'relac_autv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'relac_aut'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pto_pedidv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'stock_maxv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'stock_minv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_omv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta1v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta2v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta3v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta4v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta5v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_agr1v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_agr2v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_agr3v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_agr4v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_agr5v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'can_agrv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'marg_minv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ult_cos_v'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cos_pro_v'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cos_merc_v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cos_prov_v'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ult_cosdov'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cos_unanv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ult_cosomv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cos_proomv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fec_proomv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_cosd'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_cosv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_cos'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_comiv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'punt_cliv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'punt_prov'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'anuladov'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_impd'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_impv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_imp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'licorv'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'picturev'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'campo1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pesov'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'piev'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'margen1v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'margen2v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'margen3v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'margen4v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'margen5v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipod'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipov'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lotev'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'reactivar'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'relacartv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'porc_adiv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'garantiav'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bt_preclote' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'art_desiv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'imagen1v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'imagen2v'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_aranc'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'co_artv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'art_desv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha_regv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'manj_serv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_lind'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_linv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_lin'      => new sfValidatorPass(array('required' => false)),
      'co_catd'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_catv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_cat'      => new sfValidatorPass(array('required' => false)),
      'co_subld'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_sublv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_subl'     => new sfValidatorPass(array('required' => false)),
      'co_colord'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_colorv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_color'    => new sfValidatorPass(array('required' => false)),
      'itemv'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'refv'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'modelov'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'procedencd'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'procedencv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'procedenci'  => new sfValidatorPass(array('required' => false)),
      'comentariv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_provd'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_provv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_prov'     => new sfValidatorPass(array('required' => false)),
      'ubicacionv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'relac_autd'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'relac_autv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'relac_aut'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pto_pedidv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'stock_maxv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'stock_minv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_omv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta1v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta2v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta3v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta4v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta5v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_agr1v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_agr2v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_agr3v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_agr4v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_agr5v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'can_agrv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'marg_minv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ult_cos_v'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cos_pro_v'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cos_merc_v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cos_prov_v'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ult_cosdov'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cos_unanv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ult_cosomv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cos_proomv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fec_proomv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_cosd'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_cosv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_cos'    => new sfValidatorPass(array('required' => false)),
      'mont_comiv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'punt_cliv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'punt_prov'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'anuladov'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_impd'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_impv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_imp'    => new sfValidatorPass(array('required' => false)),
      'licorv'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'picturev'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'campo1'      => new sfValidatorPass(array('required' => false)),
      'campo2'      => new sfValidatorPass(array('required' => false)),
      'campo3'      => new sfValidatorPass(array('required' => false)),
      'campo4'      => new sfValidatorPass(array('required' => false)),
      'campo5'      => new sfValidatorPass(array('required' => false)),
      'campo6'      => new sfValidatorPass(array('required' => false)),
      'campo7'      => new sfValidatorPass(array('required' => false)),
      'campo8'      => new sfValidatorPass(array('required' => false)),
      'co_us_in'    => new sfValidatorPass(array('required' => false)),
      'fe_us_in'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'    => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'    => new sfValidatorPass(array('required' => false)),
      'fe_us_el'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'    => new sfValidatorPass(array('required' => false)),
      'trasnfe'     => new sfValidatorPass(array('required' => false)),
      'co_sucu'     => new sfValidatorPass(array('required' => false)),
      'pesov'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'piev'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'margen1v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'margen2v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'margen3v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'margen4v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'margen5v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipod'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipov'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo'        => new sfValidatorPass(array('required' => false)),
      'lotev'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'reactivar'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'relacartv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'porc_adiv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'garantiav'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
      'bt_preclote' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'art_desiv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'imagen1v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'imagen2v'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_aranc'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('ambart_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambart';
  }

  public function getFields()
  {
    return array(
      'amb_usua'    => 'Text',
      'co_artv'     => 'Boolean',
      'art_desv'    => 'Boolean',
      'fecha_regv'  => 'Boolean',
      'manj_serv'   => 'Boolean',
      'co_lind'     => 'Boolean',
      'co_linv'     => 'Boolean',
      'co_lin'      => 'Text',
      'co_catd'     => 'Boolean',
      'co_catv'     => 'Boolean',
      'co_cat'      => 'Text',
      'co_subld'    => 'Boolean',
      'co_sublv'    => 'Boolean',
      'co_subl'     => 'Text',
      'co_colord'   => 'Boolean',
      'co_colorv'   => 'Boolean',
      'co_color'    => 'Text',
      'itemv'       => 'Boolean',
      'refv'        => 'Boolean',
      'modelov'     => 'Boolean',
      'procedencd'  => 'Boolean',
      'procedencv'  => 'Boolean',
      'procedenci'  => 'Text',
      'comentariv'  => 'Boolean',
      'co_provd'    => 'Boolean',
      'co_provv'    => 'Boolean',
      'co_prov'     => 'Text',
      'ubicacionv'  => 'Boolean',
      'relac_autd'  => 'Boolean',
      'relac_autv'  => 'Boolean',
      'relac_aut'   => 'Number',
      'pto_pedidv'  => 'Boolean',
      'stock_maxv'  => 'Boolean',
      'stock_minv'  => 'Boolean',
      'prec_omv'    => 'Boolean',
      'prec_vta1v'  => 'Boolean',
      'prec_vta2v'  => 'Boolean',
      'prec_vta3v'  => 'Boolean',
      'prec_vta4v'  => 'Boolean',
      'prec_vta5v'  => 'Boolean',
      'prec_agr1v'  => 'Boolean',
      'prec_agr2v'  => 'Boolean',
      'prec_agr3v'  => 'Boolean',
      'prec_agr4v'  => 'Boolean',
      'prec_agr5v'  => 'Boolean',
      'can_agrv'    => 'Boolean',
      'marg_minv'   => 'Boolean',
      'ult_cos_v'   => 'Boolean',
      'cos_pro_v'   => 'Boolean',
      'cos_merc_v'  => 'Boolean',
      'cos_prov_v'  => 'Boolean',
      'ult_cosdov'  => 'Boolean',
      'cos_unanv'   => 'Boolean',
      'ult_cosomv'  => 'Boolean',
      'cos_proomv'  => 'Boolean',
      'fec_proomv'  => 'Boolean',
      'tipo_cosd'   => 'Boolean',
      'tipo_cosv'   => 'Boolean',
      'tipo_cos'    => 'Text',
      'mont_comiv'  => 'Boolean',
      'punt_cliv'   => 'Boolean',
      'punt_prov'   => 'Boolean',
      'anuladov'    => 'Boolean',
      'tipo_impd'   => 'Boolean',
      'tipo_impv'   => 'Boolean',
      'tipo_imp'    => 'Text',
      'licorv'      => 'Boolean',
      'picturev'    => 'Boolean',
      'campo1'      => 'Text',
      'campo2'      => 'Text',
      'campo3'      => 'Text',
      'campo4'      => 'Text',
      'campo5'      => 'Text',
      'campo6'      => 'Text',
      'campo7'      => 'Text',
      'campo8'      => 'Text',
      'co_us_in'    => 'Text',
      'fe_us_in'    => 'Date',
      'co_us_mo'    => 'Text',
      'fe_us_mo'    => 'Date',
      'co_us_el'    => 'Text',
      'fe_us_el'    => 'Date',
      'revisado'    => 'Text',
      'trasnfe'     => 'Text',
      'co_sucu'     => 'Text',
      'pesov'       => 'Boolean',
      'piev'        => 'Boolean',
      'margen1v'    => 'Boolean',
      'margen2v'    => 'Boolean',
      'margen3v'    => 'Boolean',
      'margen4v'    => 'Boolean',
      'margen5v'    => 'Boolean',
      'tipod'       => 'Boolean',
      'tipov'       => 'Boolean',
      'tipo'        => 'Text',
      'lotev'       => 'Boolean',
      'reactivar'   => 'Boolean',
      'relacartv'   => 'Boolean',
      'porc_adiv'   => 'Boolean',
      'garantiav'   => 'Boolean',
      'rowguid'     => 'Text',
      'bt_preclote' => 'Boolean',
      'art_desiv'   => 'Boolean',
      'imagen1v'    => 'Boolean',
      'imagen2v'    => 'Boolean',
      'bt_aranc'    => 'Boolean',
    );
  }
}