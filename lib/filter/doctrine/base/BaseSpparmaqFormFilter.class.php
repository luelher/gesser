<?php

/**
 * Spparmaq filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpparmaqFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'par_des'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_inic' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fec_fin'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_maq'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spmaq'), 'add_empty' => true)),
      'co_falla' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spfalla'), 'add_empty' => true)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_emis' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'par_des'  => new sfValidatorPass(array('required' => false)),
      'fec_inic' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fec_fin'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_maq'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spmaq'), 'column' => 'co_maq')),
      'co_falla' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spfalla'), 'column' => 'co_falla')),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'campo5'   => new sfValidatorPass(array('required' => false)),
      'campo6'   => new sfValidatorPass(array('required' => false)),
      'campo7'   => new sfValidatorPass(array('required' => false)),
      'campo8'   => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'fec_emis' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spparmaq_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spparmaq';
  }

  public function getFields()
  {
    return array(
      'par_num'  => 'Number',
      'par_des'  => 'Text',
      'fec_inic' => 'Date',
      'fec_fin'  => 'Date',
      'co_maq'   => 'ForeignKey',
      'co_falla' => 'ForeignKey',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'campo5'   => 'Text',
      'campo6'   => 'Text',
      'campo7'   => 'Text',
      'campo8'   => 'Text',
      'co_us_in' => 'Text',
      'co_us_mo' => 'Text',
      'co_us_el' => 'Text',
      'fe_us_in' => 'Date',
      'fe_us_mo' => 'Date',
      'fe_us_el' => 'Date',
      'rowguid'  => 'Text',
      'fec_emis' => 'Date',
      'trasnfe'  => 'Text',
      'co_sucu'  => 'Text',
    );
  }
}
