<?php

/**
 * Chequeras filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseChequerasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'chra_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_cta'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'add_empty' => true)),
      'fecha_re' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'num_ch_p' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_ch_u' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'respons'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'limusore' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ch_gen'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'chra_des' => new sfValidatorPass(array('required' => false)),
      'cod_cta'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cuentas'), 'column' => 'cod_cta')),
      'fecha_re' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'num_ch_p' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_ch_u' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'respons'  => new sfValidatorPass(array('required' => false)),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'status'   => new sfValidatorPass(array('required' => false)),
      'limusore' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ch_gen'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('chequeras_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Chequeras';
  }

  public function getFields()
  {
    return array(
      'co_chra'  => 'Text',
      'chra_des' => 'Text',
      'cod_cta'  => 'ForeignKey',
      'fecha_re' => 'Date',
      'num_ch_p' => 'Number',
      'num_ch_u' => 'Number',
      'respons'  => 'Text',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'revisado' => 'Text',
      'trasnfe'  => 'Text',
      'co_sucu'  => 'Text',
      'status'   => 'Text',
      'limusore' => 'Boolean',
      'ch_gen'   => 'Boolean',
      'rowguid'  => 'Text',
    );
  }
}
