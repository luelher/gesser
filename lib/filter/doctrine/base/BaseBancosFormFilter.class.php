<?php

/**
 * Bancos filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBancosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'des_ban'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefonos' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plazo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plazo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plazo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plazo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'row_id'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'des_ban'   => new sfValidatorPass(array('required' => false)),
      'telefonos' => new sfValidatorPass(array('required' => false)),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'plazo1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'plazo2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'plazo3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'plazo4'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'row_id'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('bancos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bancos';
  }

  public function getFields()
  {
    return array(
      'co_ban'    => 'Text',
      'des_ban'   => 'Text',
      'telefonos' => 'Text',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Date',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Date',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Date',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_sucu'   => 'Text',
      'rowguid'   => 'Text',
      'plazo1'    => 'Number',
      'plazo2'    => 'Number',
      'plazo3'    => 'Number',
      'plazo4'    => 'Number',
      'row_id'    => 'Date',
    );
  }
}
