<?php

/**
 * Formatos filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormatosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_for'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'guardo_en'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lin'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lin_encab'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lin_cuerpo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_letra' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colu_obse'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_obse'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'letr_obse'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_reng'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_for'   => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'guardo_en'  => new sfValidatorPass(array('required' => false)),
      'nro_lin'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lin_encab'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lin_cuerpo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_letra' => new sfValidatorPass(array('required' => false)),
      'colu_obse'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cant_obse'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'letr_obse'  => new sfValidatorPass(array('required' => false)),
      'cant_reng'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formatos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formatos';
  }

  public function getFields()
  {
    return array(
      'tipo_for'   => 'Text',
      'co_for'     => 'Text',
      'descrip'    => 'Text',
      'guardo_en'  => 'Text',
      'nro_lin'    => 'Number',
      'lin_encab'  => 'Number',
      'lin_cuerpo' => 'Number',
      'tipo_letra' => 'Text',
      'colu_obse'  => 'Number',
      'cant_obse'  => 'Number',
      'letr_obse'  => 'Text',
      'cant_reng'  => 'Number',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
    );
  }
}
