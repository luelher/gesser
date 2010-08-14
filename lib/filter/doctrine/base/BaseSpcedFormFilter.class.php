<?php

/**
 * Spced filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpcedFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ced_des'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cap_max'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estandar'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fec_emis'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'cantidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_uni'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_dep'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcom'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feccom'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dias'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horas'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_cos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ced_des'   => new sfValidatorPass(array('required' => false)),
      'cap_max'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estandar'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fec_emis'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_art'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'cantidad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_uni'    => new sfValidatorPass(array('required' => false)),
      'co_dep'    => new sfValidatorPass(array('required' => false)),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'campo5'    => new sfValidatorPass(array('required' => false)),
      'campo6'    => new sfValidatorPass(array('required' => false)),
      'campo7'    => new sfValidatorPass(array('required' => false)),
      'campo8'    => new sfValidatorPass(array('required' => false)),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'numcom'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'feccom'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dias'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'horas'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'total_uni' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('spced_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spced';
  }

  public function getFields()
  {
    return array(
      'co_ced'    => 'Number',
      'ced_des'   => 'Text',
      'cap_max'   => 'Number',
      'estandar'  => 'Boolean',
      'fec_emis'  => 'Date',
      'co_art'    => 'ForeignKey',
      'cantidad'  => 'Number',
      'co_uni'    => 'Text',
      'co_dep'    => 'Text',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'campo5'    => 'Text',
      'campo6'    => 'Text',
      'campo7'    => 'Text',
      'campo8'    => 'Text',
      'co_us_in'  => 'Text',
      'co_us_mo'  => 'Text',
      'co_us_el'  => 'Text',
      'fe_us_in'  => 'Date',
      'fe_us_mo'  => 'Date',
      'fe_us_el'  => 'Date',
      'rowguid'   => 'Text',
      'co_sucu'   => 'Text',
      'dis_cen'   => 'Text',
      'numcom'    => 'Number',
      'feccom'    => 'Date',
      'dias'      => 'Number',
      'horas'     => 'Number',
      'por_cos'   => 'Number',
      'trasnfe'   => 'Text',
      'total_uni' => 'Number',
    );
  }
}
