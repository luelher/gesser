<?php

/**
 * Cajas filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCajasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mes_ini'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'saldo_i'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_ei'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_a'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_e'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deb_ant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hab_ant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'inactivo'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'gavetaser'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cajapri'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sidisplay'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'puerto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bitdatos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bitstop'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paridad'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'velocidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'puerto2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bitdatos2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bitstop2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paridad2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gcadena'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'velocidad2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cajapvta'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mvisa'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vpostipo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impfis'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'mes_ini'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'saldo_i'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo_ei'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo_a'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldo_e'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'deb_ant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hab_ant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'inactivo'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'gavetaser'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cajapri'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sidisplay'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'puerto'     => new sfValidatorPass(array('required' => false)),
      'bitdatos'   => new sfValidatorPass(array('required' => false)),
      'bitstop'    => new sfValidatorPass(array('required' => false)),
      'paridad'    => new sfValidatorPass(array('required' => false)),
      'velocidad'  => new sfValidatorPass(array('required' => false)),
      'puerto2'    => new sfValidatorPass(array('required' => false)),
      'bitdatos2'  => new sfValidatorPass(array('required' => false)),
      'bitstop2'   => new sfValidatorPass(array('required' => false)),
      'paridad2'   => new sfValidatorPass(array('required' => false)),
      'gcadena'    => new sfValidatorPass(array('required' => false)),
      'velocidad2' => new sfValidatorPass(array('required' => false)),
      'cajapvta'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mvisa'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vpostipo'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'impfis'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cajas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cajas';
  }

  public function getFields()
  {
    return array(
      'cod_caja'   => 'Text',
      'descrip'    => 'Text',
      'mes_ini'    => 'Date',
      'saldo_i'    => 'Number',
      'saldo_ei'   => 'Number',
      'saldo_a'    => 'Number',
      'saldo_e'    => 'Number',
      'moneda'     => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'dis_cen'    => 'Text',
      'deb_ant'    => 'Number',
      'hab_ant'    => 'Number',
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
      'inactivo'   => 'Boolean',
      'gavetaser'  => 'Boolean',
      'cajapri'    => 'Boolean',
      'sidisplay'  => 'Boolean',
      'puerto'     => 'Text',
      'bitdatos'   => 'Text',
      'bitstop'    => 'Text',
      'paridad'    => 'Text',
      'velocidad'  => 'Text',
      'puerto2'    => 'Text',
      'bitdatos2'  => 'Text',
      'bitstop2'   => 'Text',
      'paridad2'   => 'Text',
      'gcadena'    => 'Text',
      'velocidad2' => 'Text',
      'cajapvta'   => 'Boolean',
      'mvisa'      => 'Boolean',
      'vpostipo'   => 'Number',
      'impfis'     => 'Text',
    );
  }
}
