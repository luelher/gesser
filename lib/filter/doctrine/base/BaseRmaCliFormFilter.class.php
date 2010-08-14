<?php

/**
 * RmaCli filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRmaCliFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fec_emis'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rif'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nit'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fec_emis'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'status'     => new sfValidatorPass(array('required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'co_cli')),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'rif'        => new sfValidatorPass(array('required' => false)),
      'nit'        => new sfValidatorPass(array('required' => false)),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'transfe'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rma_cli_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RmaCli';
  }

  public function getFields()
  {
    return array(
      'rma_num'    => 'Number',
      'fec_emis'   => 'Date',
      'status'     => 'Text',
      'co_cli'     => 'ForeignKey',
      'nombre'     => 'Text',
      'rif'        => 'Text',
      'nit'        => 'Text',
      'comentario' => 'Text',
      'descrip'    => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'co_sucu'    => 'Text',
      'rowguid'    => 'Text',
      'transfe'    => 'Text',
    );
  }
}
