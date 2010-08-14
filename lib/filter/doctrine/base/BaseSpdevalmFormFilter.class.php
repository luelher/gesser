<?php

/**
 * Spdevalm filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpdevalmFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'alm_orig'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alm_dest'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'motivo_glo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'confirma'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fec_conf'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'inactivo'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
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
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reqnfe'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seriales'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulada'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feccom'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numcom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'odp_num'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tras_num'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'alm_orig'   => new sfValidatorPass(array('required' => false)),
      'alm_dest'   => new sfValidatorPass(array('required' => false)),
      'motivo_glo' => new sfValidatorPass(array('required' => false)),
      'confirma'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fec_conf'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'inactivo'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'reqnfe'     => new sfValidatorPass(array('required' => false)),
      'seriales'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'anulada'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'feccom'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'odp_num'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'tras_num'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spdevalm_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spdevalm';
  }

  public function getFields()
  {
    return array(
      'dev_num'    => 'Number',
      'fecha'      => 'Date',
      'alm_orig'   => 'Text',
      'alm_dest'   => 'Text',
      'motivo_glo' => 'Text',
      'confirma'   => 'Boolean',
      'fec_conf'   => 'Date',
      'inactivo'   => 'Boolean',
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
      'revisado'   => 'Text',
      'reqnfe'     => 'Text',
      'seriales'   => 'Number',
      'co_sucu'    => 'Text',
      'anulada'    => 'Boolean',
      'dis_cen'    => 'Text',
      'feccom'     => 'Date',
      'numcom'     => 'Number',
      'odp_num'    => 'Number',
      'comentario' => 'Text',
      'tras_num'   => 'Number',
      'rowguid'    => 'Text',
      'trasnfe'    => 'Text',
    );
  }
}
