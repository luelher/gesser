<?php

/**
 * Ambaju filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbajuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ajue_num'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'moneda'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monedad'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_mone'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'motivo'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_ser_in'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_ser_out'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_anulo'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_reversa'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'almacen'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'almacend'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_alma'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cantidadd'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'stock_act'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidad'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'costo'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'stock_neg'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pstock_neg'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tamcol01'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol02'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol03'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol04'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol05'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol06'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol07'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol08'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol09'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol10'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol11'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol12'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tamcol13'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol01'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol02'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol03'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol04'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol05'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol06'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol07'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol08'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol09'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol10'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol11'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol12'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'poscol13'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'co_sucu'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'p_lotefec'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'p_control_1' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'ajue_num'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'moneda'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monedad'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_mone'     => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'motivo'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_ser_in'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_ser_out'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_anulo'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_reversa'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'almacen'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'almacend'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_alma'     => new sfValidatorPass(array('required' => false)),
      'cantidad'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cantidadd'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'stock_act'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidad'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'costo'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'stock_neg'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pstock_neg'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tamcol01'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol02'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol03'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol04'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol05'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol06'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol07'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol08'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol09'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol10'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol11'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol12'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tamcol13'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol01'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol02'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol03'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol04'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol05'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol06'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol07'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol08'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol09'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol10'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol11'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol12'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poscol13'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'co_sucu'     => new sfValidatorPass(array('required' => false)),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
      'p_lotefec'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'p_control_1' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('ambaju_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambaju';
  }

  public function getFields()
  {
    return array(
      'amb_usua'    => 'Text',
      'ajue_num'    => 'Boolean',
      'moneda'      => 'Boolean',
      'monedad'     => 'Boolean',
      'co_mone'     => 'Text',
      'fecha'       => 'Boolean',
      'motivo'      => 'Boolean',
      'bt_ser_in'   => 'Boolean',
      'bt_ser_out'  => 'Boolean',
      'bt_anulo'    => 'Boolean',
      'bt_reversa'  => 'Boolean',
      'almacen'     => 'Boolean',
      'almacend'    => 'Boolean',
      'co_alma'     => 'Text',
      'cantidad'    => 'Boolean',
      'cantidadd'   => 'Boolean',
      'stock_act'   => 'Number',
      'unidad'      => 'Boolean',
      'costo'       => 'Boolean',
      'stock_neg'   => 'Boolean',
      'pstock_neg'  => 'Boolean',
      'tamcol01'    => 'Number',
      'tamcol02'    => 'Number',
      'tamcol03'    => 'Number',
      'tamcol04'    => 'Number',
      'tamcol05'    => 'Number',
      'tamcol06'    => 'Number',
      'tamcol07'    => 'Number',
      'tamcol08'    => 'Number',
      'tamcol09'    => 'Number',
      'tamcol10'    => 'Number',
      'tamcol11'    => 'Number',
      'tamcol12'    => 'Number',
      'tamcol13'    => 'Number',
      'poscol01'    => 'Number',
      'poscol02'    => 'Number',
      'poscol03'    => 'Number',
      'poscol04'    => 'Number',
      'poscol05'    => 'Number',
      'poscol06'    => 'Number',
      'poscol07'    => 'Number',
      'poscol08'    => 'Number',
      'poscol09'    => 'Number',
      'poscol10'    => 'Number',
      'poscol11'    => 'Number',
      'poscol12'    => 'Number',
      'poscol13'    => 'Number',
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
      'co_sucu'     => 'Text',
      'rowguid'     => 'Text',
      'p_lotefec'   => 'Boolean',
      'p_control_1' => 'Boolean',
    );
  }
}