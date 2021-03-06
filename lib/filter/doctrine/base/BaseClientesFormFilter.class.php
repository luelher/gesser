<?php

/**
 * Clientes filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClientesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCli'), 'add_empty' => true)),
      'cli_des'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direc1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direc2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefonos'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inactivo'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'respons'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_reg'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'puntaje'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_ini'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_ult_ve' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_ult_ve' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'net_ult_ve' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_cre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plaz_pag'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ppago' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_zon'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zona'), 'add_empty' => true)),
      'co_seg'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segmento'), 'add_empty' => true)),
      'co_ven'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vendedor'), 'add_empty' => true)),
      'desc_glob'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horar_caja' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'frecu_vist' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lunes'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'martes'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'miercoles'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'jueves'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'viernes'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sabado'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'domingo'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dir_ent2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_iva'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'iva'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rif'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contribu'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nit'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ingr'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => true)),
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
      'juridico'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_adi'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'matriz'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tab'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_per'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serialp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valido'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'row_id'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_pais'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zip'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'login'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'website'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salestax'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contribu_e' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'porc_esp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sincredito' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'tipo'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoCli'), 'column' => 'tip_cli')),
      'cli_des'    => new sfValidatorPass(array('required' => false)),
      'direc1'     => new sfValidatorPass(array('required' => false)),
      'direc2'     => new sfValidatorPass(array('required' => false)),
      'telefonos'  => new sfValidatorPass(array('required' => false)),
      'fax'        => new sfValidatorPass(array('required' => false)),
      'inactivo'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'respons'    => new sfValidatorPass(array('required' => false)),
      'fecha_reg'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'puntaje'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saldo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo_ini'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_ult_ve' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'net_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_cre'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'plaz_pag'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ppago' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_zon'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Zona'), 'column' => 'co_zon')),
      'co_seg'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Segmento'), 'column' => 'co_seg')),
      'co_ven'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vendedor'), 'column' => 'co_ven')),
      'desc_glob'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'horar_caja' => new sfValidatorPass(array('required' => false)),
      'frecu_vist' => new sfValidatorPass(array('required' => false)),
      'lunes'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'martes'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'miercoles'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'jueves'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'viernes'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sabado'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'domingo'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dir_ent2'   => new sfValidatorPass(array('required' => false)),
      'tipo_iva'   => new sfValidatorPass(array('required' => false)),
      'iva'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rif'        => new sfValidatorPass(array('required' => false)),
      'contribu'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'nit'        => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'co_ingr'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtaIngr'), 'column' => 'co_ingr')),
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
      'juridico'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_adi'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'matriz'     => new sfValidatorPass(array('required' => false)),
      'co_tab'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_per'   => new sfValidatorPass(array('required' => false)),
      'serialp'    => new sfValidatorPass(array('required' => false)),
      'valido'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'row_id'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'estado'     => new sfValidatorPass(array('required' => false)),
      'id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_pais'    => new sfValidatorPass(array('required' => false)),
      'ciudad'     => new sfValidatorPass(array('required' => false)),
      'zip'        => new sfValidatorPass(array('required' => false)),
      'login'      => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'website'    => new sfValidatorPass(array('required' => false)),
      'salestax'   => new sfValidatorPass(array('required' => false)),
      'contribu_e' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'porc_esp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sincredito' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('clientes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

  public function getFields()
  {
    return array(
      'co_cli'     => 'Text',
      'tipo'       => 'ForeignKey',
      'cli_des'    => 'Text',
      'direc1'     => 'Text',
      'direc2'     => 'Text',
      'telefonos'  => 'Text',
      'fax'        => 'Text',
      'inactivo'   => 'Boolean',
      'comentario' => 'Text',
      'respons'    => 'Text',
      'fecha_reg'  => 'Date',
      'puntaje'    => 'Number',
      'saldo'      => 'Number',
      'saldo_ini'  => 'Number',
      'fac_ult_ve' => 'Number',
      'fec_ult_ve' => 'Date',
      'net_ult_ve' => 'Number',
      'mont_cre'   => 'Number',
      'plaz_pag'   => 'Number',
      'desc_ppago' => 'Number',
      'co_zon'     => 'ForeignKey',
      'co_seg'     => 'ForeignKey',
      'co_ven'     => 'ForeignKey',
      'desc_glob'  => 'Number',
      'horar_caja' => 'Text',
      'frecu_vist' => 'Text',
      'lunes'      => 'Boolean',
      'martes'     => 'Boolean',
      'miercoles'  => 'Boolean',
      'jueves'     => 'Boolean',
      'viernes'    => 'Boolean',
      'sabado'     => 'Boolean',
      'domingo'    => 'Boolean',
      'dir_ent2'   => 'Text',
      'tipo_iva'   => 'Text',
      'iva'        => 'Number',
      'rif'        => 'Text',
      'contribu'   => 'Boolean',
      'dis_cen'    => 'Text',
      'nit'        => 'Text',
      'email'      => 'Text',
      'co_ingr'    => 'ForeignKey',
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
      'juridico'   => 'Boolean',
      'tipo_adi'   => 'Number',
      'matriz'     => 'Text',
      'co_tab'     => 'Number',
      'tipo_per'   => 'Text',
      'serialp'    => 'Text',
      'valido'     => 'Boolean',
      'row_id'     => 'Date',
      'estado'     => 'Text',
      'id'         => 'Number',
      'co_pais'    => 'Text',
      'ciudad'     => 'Text',
      'zip'        => 'Text',
      'login'      => 'Text',
      'password'   => 'Text',
      'website'    => 'Text',
      'salestax'   => 'Text',
      'contribu_e' => 'Boolean',
      'porc_esp'   => 'Number',
      'sincredito' => 'Boolean',
    );
  }
}
