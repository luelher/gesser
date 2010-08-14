<?php

/**
 * Empaques filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpaquesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'nro_orig' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_cli'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_envio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_envio' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'co_resrc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_resrc' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'co_resem' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_emp'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulada'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fact_num' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empr'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'fecha'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'nro_orig' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_doc' => new sfValidatorPass(array('required' => false)),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'co_cli'   => new sfValidatorPass(array('required' => false)),
      'status'   => new sfValidatorPass(array('required' => false)),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'campo5'   => new sfValidatorPass(array('required' => false)),
      'campo6'   => new sfValidatorPass(array('required' => false)),
      'campo7'   => new sfValidatorPass(array('required' => false)),
      'campo8'   => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_envio' => new sfValidatorPass(array('required' => false)),
      'fe_envio' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_resrc' => new sfValidatorPass(array('required' => false)),
      'fe_resrc' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_resem' => new sfValidatorPass(array('required' => false)),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'fe_emp'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'anulada'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fact_num' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'empr'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('empaques_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empaques';
  }

  public function getFields()
  {
    return array(
      'emp_num'  => 'Number',
      'fecha'    => 'Date',
      'nro_orig' => 'Number',
      'tipo_doc' => 'Text',
      'descrip'  => 'Text',
      'co_cli'   => 'Text',
      'status'   => 'Text',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'campo5'   => 'Text',
      'campo6'   => 'Text',
      'campo7'   => 'Text',
      'campo8'   => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'co_envio' => 'Text',
      'fe_envio' => 'Date',
      'co_resrc' => 'Text',
      'fe_resrc' => 'Date',
      'co_resem' => 'Text',
      'co_sucu'  => 'Text',
      'fe_emp'   => 'Date',
      'rowguid'  => 'Text',
      'revisado' => 'Text',
      'trasnfe'  => 'Text',
      'anulada'  => 'Boolean',
      'fact_num' => 'Number',
      'empr'     => 'Boolean',
    );
  }
}
