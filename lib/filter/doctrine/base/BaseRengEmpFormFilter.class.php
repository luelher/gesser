<?php

/**
 * RengEmp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengEmpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unid'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_blto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_orgt'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_orgs'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agrupar'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unid_r'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_reng'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unid'       => new sfValidatorPass(array('required' => false)),
      'num_blto'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'co_alma'    => new sfValidatorPass(array('required' => false)),
      'cant_orgt'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_orgs'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'agrupar'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unid_r'     => new sfValidatorPass(array('required' => false)),
      'nro_reng'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_emp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEmp';
  }

  public function getFields()
  {
    return array(
      'emp_num'    => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'Text',
      'total_art'  => 'Number',
      'stotal_art' => 'Number',
      'prec_vta'   => 'Number',
      'unid'       => 'Text',
      'num_blto'   => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'rowguid'    => 'Text',
      'co_alma'    => 'Text',
      'cant_orgt'  => 'Number',
      'cant_orgs'  => 'Number',
      'agrupar'    => 'Number',
      'unid_r'     => 'Text',
      'nro_reng'   => 'Number',
    );
  }
}
