<?php

/**
 * Vendedor filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVendedorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ven_des'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cedula'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direc1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direc2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefonos'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_reg'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'condic'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comision'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comen'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fun_cob'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fun_ven'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comisionv'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_ult_ve' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_ult_ve' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'net_ult_ve' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cli_ult_ve' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_contab' => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'login'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'psw_m'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'ven_des'    => new sfValidatorPass(array('required' => false)),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'cedula'     => new sfValidatorPass(array('required' => false)),
      'direc1'     => new sfValidatorPass(array('required' => false)),
      'direc2'     => new sfValidatorPass(array('required' => false)),
      'telefonos'  => new sfValidatorPass(array('required' => false)),
      'fecha_reg'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'condic'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comen'      => new sfValidatorPass(array('required' => false)),
      'fun_cob'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fun_ven'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comisionv'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_ult_ve' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'net_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cli_ult_ve' => new sfValidatorPass(array('required' => false)),
      'cta_contab' => new sfValidatorPass(array('required' => false)),
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
      'login'      => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'psw_m'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

  public function getFields()
  {
    return array(
      'co_ven'     => 'Text',
      'tipo'       => 'Text',
      'ven_des'    => 'Text',
      'dis_cen'    => 'Text',
      'cedula'     => 'Text',
      'direc1'     => 'Text',
      'direc2'     => 'Text',
      'telefonos'  => 'Text',
      'fecha_reg'  => 'Date',
      'condic'     => 'Boolean',
      'comision'   => 'Number',
      'comen'      => 'Text',
      'fun_cob'    => 'Boolean',
      'fun_ven'    => 'Boolean',
      'comisionv'  => 'Number',
      'fac_ult_ve' => 'Number',
      'fec_ult_ve' => 'Date',
      'net_ult_ve' => 'Number',
      'cli_ult_ve' => 'Text',
      'cta_contab' => 'Text',
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
      'login'      => 'Text',
      'password'   => 'Text',
      'email'      => 'Text',
      'psw_m'      => 'Text',
    );
  }
}
