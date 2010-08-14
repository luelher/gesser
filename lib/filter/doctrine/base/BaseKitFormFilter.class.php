<?php

/**
 * Kit filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseKitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'fec_emis'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'des_kit'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costeo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'fec_emis'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'des_kit'   => new sfValidatorPass(array('required' => false)),
      'total_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'campo7'    => new sfValidatorPass(array('required' => false)),
      'campo6'    => new sfValidatorPass(array('required' => false)),
      'campo5'    => new sfValidatorPass(array('required' => false)),
      'campo8'    => new sfValidatorPass(array('required' => false)),
      'uni_venta' => new sfValidatorPass(array('required' => false)),
      'costeo'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kit';
  }

  public function getFields()
  {
    return array(
      'kit_num'   => 'Number',
      'co_art'    => 'ForeignKey',
      'fec_emis'  => 'Date',
      'des_kit'   => 'Text',
      'total_art' => 'Number',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Date',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Date',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Date',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'campo7'    => 'Text',
      'campo6'    => 'Text',
      'campo5'    => 'Text',
      'campo8'    => 'Text',
      'uni_venta' => 'Text',
      'costeo'    => 'Number',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_sucu'   => 'Text',
      'rowguid'   => 'Text',
    );
  }
}
