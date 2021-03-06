<?php

/**
 * Descuen filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDescuenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'hasta1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hasta2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hasta3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hasta4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hasta5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc5'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc6'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'row_id'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'hasta1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hasta2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hasta3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hasta4'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'hasta5'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc1'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc2'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc3'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc4'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc5'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc6'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'campo5'    => new sfValidatorPass(array('required' => false)),
      'campo6'    => new sfValidatorPass(array('required' => false)),
      'campo7'    => new sfValidatorPass(array('required' => false)),
      'campo8'    => new sfValidatorPass(array('required' => false)),
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
      'row_id'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('descuen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Descuen';
  }

  public function getFields()
  {
    return array(
      'co_desc'   => 'Text',
      'tipo_cli'  => 'Text',
      'tipo_desc' => 'Text',
      'hasta1'    => 'Number',
      'hasta2'    => 'Number',
      'hasta3'    => 'Number',
      'hasta4'    => 'Number',
      'hasta5'    => 'Number',
      'porc1'     => 'Number',
      'porc2'     => 'Number',
      'porc3'     => 'Number',
      'porc4'     => 'Number',
      'porc5'     => 'Number',
      'porc6'     => 'Number',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'campo5'    => 'Text',
      'campo6'    => 'Text',
      'campo7'    => 'Text',
      'campo8'    => 'Text',
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
      'row_id'    => 'Date',
    );
  }
}
