<?php

/**
 * Cheques filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseChequesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_emis' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fec_ent'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'entreg_a' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coment'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'mov_num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status'   => new sfValidatorPass(array('required' => false)),
      'monto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'fec_emis' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fec_ent'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'entreg_a' => new sfValidatorPass(array('required' => false)),
      'coment'   => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'mov_num'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cheques_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cheques';
  }

  public function getFields()
  {
    return array(
      'co_cheq'  => 'Text',
      'co_chra'  => 'Text',
      'status'   => 'Text',
      'monto'    => 'Number',
      'descrip'  => 'Text',
      'fec_emis' => 'Date',
      'fec_ent'  => 'Date',
      'entreg_a' => 'Text',
      'coment'   => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'mov_num'  => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
