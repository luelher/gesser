<?php

/**
 * Spplan filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpplanFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'm1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm7'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm8'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm9'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm10'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm11'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm12'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd7'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd8'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd9'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd10'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd11'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd12'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'enero'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'm1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm7'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm8'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm9'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm10'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm11'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm12'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd7'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd8'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd9'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd10'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd11'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd12'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'enero'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spplan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spplan';
  }

  public function getFields()
  {
    return array(
      'co_art'   => 'Text',
      'm1'       => 'Number',
      'm2'       => 'Number',
      'm3'       => 'Number',
      'm4'       => 'Number',
      'm5'       => 'Number',
      'm6'       => 'Number',
      'm7'       => 'Number',
      'm8'       => 'Number',
      'm9'       => 'Number',
      'm10'      => 'Number',
      'm11'      => 'Number',
      'm12'      => 'Number',
      'd1'       => 'Number',
      'd2'       => 'Number',
      'd3'       => 'Number',
      'd4'       => 'Number',
      'd5'       => 'Number',
      'd6'       => 'Number',
      'd7'       => 'Number',
      'd8'       => 'Number',
      'd9'       => 'Number',
      'd10'      => 'Number',
      'd11'      => 'Number',
      'd12'      => 'Number',
      'enero'    => 'Number',
      'co_us_in' => 'Text',
      'co_us_mo' => 'Text',
      'co_us_el' => 'Text',
      'fe_us_in' => 'Date',
      'fe_us_mo' => 'Date',
      'fe_us_el' => 'Date',
      'rowguid'  => 'Text',
      'trasnfe'  => 'Text',
      'co_sucu'  => 'Text',
    );
  }
}
