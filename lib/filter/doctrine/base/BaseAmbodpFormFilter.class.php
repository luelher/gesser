<?php

/**
 * Ambodp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbodpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'monum_odp'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mopriorid'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prioridad'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vaprioridad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mofe_emis'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mofe_inic'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mofe_fin'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'moco_ced'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_anulo'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_reversa'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'importar'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'monum_odp'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mopriorid'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prioridad'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vaprioridad' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mofe_emis'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mofe_inic'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mofe_fin'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'moco_ced'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_anulo'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_reversa'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'importar'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
      'campo1'      => new sfValidatorPass(array('required' => false)),
      'campo2'      => new sfValidatorPass(array('required' => false)),
      'campo3'      => new sfValidatorPass(array('required' => false)),
      'campo4'      => new sfValidatorPass(array('required' => false)),
      'campo5'      => new sfValidatorPass(array('required' => false)),
      'campo6'      => new sfValidatorPass(array('required' => false)),
      'campo7'      => new sfValidatorPass(array('required' => false)),
      'campo8'      => new sfValidatorPass(array('required' => false)),
      'co_us_in'    => new sfValidatorPass(array('required' => false)),
      'co_us_mo'    => new sfValidatorPass(array('required' => false)),
      'co_us_el'    => new sfValidatorPass(array('required' => false)),
      'fe_us_in'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ambodp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambodp';
  }

  public function getFields()
  {
    return array(
      'amb_usua'    => 'Text',
      'monum_odp'   => 'Boolean',
      'mopriorid'   => 'Boolean',
      'prioridad'   => 'Boolean',
      'vaprioridad' => 'Number',
      'mofe_emis'   => 'Boolean',
      'mofe_inic'   => 'Boolean',
      'mofe_fin'    => 'Boolean',
      'moco_ced'    => 'Boolean',
      'bt_anulo'    => 'Boolean',
      'bt_reversa'  => 'Boolean',
      'importar'    => 'Boolean',
      'rowguid'     => 'Text',
      'campo1'      => 'Text',
      'campo2'      => 'Text',
      'campo3'      => 'Text',
      'campo4'      => 'Text',
      'campo5'      => 'Text',
      'campo6'      => 'Text',
      'campo7'      => 'Text',
      'campo8'      => 'Text',
      'co_us_in'    => 'Text',
      'co_us_mo'    => 'Text',
      'co_us_el'    => 'Text',
      'fe_us_in'    => 'Date',
      'fe_us_mo'    => 'Date',
      'fe_us_el'    => 'Date',
    );
  }
}
