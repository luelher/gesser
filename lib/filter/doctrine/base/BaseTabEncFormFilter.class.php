<?php

/**
 * TabEnc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTabEncFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tasa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasag10'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasag20'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'compras'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'tasa'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasag10'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasag20'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_imp' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'tasa3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasa4'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasa5'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'compras'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('tab_enc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TabEnc';
  }

  public function getFields()
  {
    return array(
      'fecha'    => 'Date',
      'tasa'     => 'Number',
      'tasag10'  => 'Number',
      'tasag20'  => 'Number',
      'tipo_imp' => 'Number',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'revisado' => 'Text',
      'trasnfe'  => 'Text',
      'rowguid'  => 'Text',
      'tasa3'    => 'Number',
      'tasa4'    => 'Number',
      'tasa5'    => 'Number',
      'compras'  => 'Boolean',
    );
  }
}
