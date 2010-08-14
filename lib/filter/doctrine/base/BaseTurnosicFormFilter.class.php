<?php

/**
 * Turnosic filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTurnosicFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_turno'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Turnos'), 'add_empty' => true)),
      'cod_caja'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_caj'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_sup'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'inicio'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'finaliza'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'status'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'restringe' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'hora_ini'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minu_ini'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ampm_ini'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hora_fin'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minu_fin'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ampm_fin'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => true)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_turno'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Turnos'), 'column' => 'co_turno')),
      'cod_caja'  => new sfValidatorPass(array('required' => false)),
      'saldo'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'user_caj'  => new sfValidatorPass(array('required' => false)),
      'user_sup'  => new sfValidatorPass(array('required' => false)),
      'fecha'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'inicio'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'finaliza'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'status'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'restringe' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'hora_ini'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'minu_ini'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ampm_ini'  => new sfValidatorPass(array('required' => false)),
      'hora_fin'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'minu_fin'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ampm_fin'  => new sfValidatorPass(array('required' => false)),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacen'), 'column' => 'co_alma')),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('turnosic_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turnosic';
  }

  public function getFields()
  {
    return array(
      'co_turno'  => 'ForeignKey',
      'cod_caja'  => 'Text',
      'saldo'     => 'Number',
      'num_turno' => 'Number',
      'user_caj'  => 'Text',
      'user_sup'  => 'Text',
      'fecha'     => 'Date',
      'inicio'    => 'Date',
      'finaliza'  => 'Date',
      'status'    => 'Number',
      'restringe' => 'Boolean',
      'hora_ini'  => 'Number',
      'minu_ini'  => 'Number',
      'ampm_ini'  => 'Text',
      'hora_fin'  => 'Number',
      'minu_fin'  => 'Number',
      'ampm_fin'  => 'Text',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Date',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Date',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Date',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_sucu'   => 'ForeignKey',
      'rowguid'   => 'Text',
    );
  }
}
