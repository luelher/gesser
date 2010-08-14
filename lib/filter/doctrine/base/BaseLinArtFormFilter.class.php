<?php

/**
 * LinArt filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLinArtFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'lin_des'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_imun'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_reten'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comi_lin'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comi_lin2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'row_id'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'va'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'i_lin_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movil'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'lin_des'   => new sfValidatorPass(array('required' => false)),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'co_imun'   => new sfValidatorPass(array('required' => false)),
      'co_reten'  => new sfValidatorPass(array('required' => false)),
      'comi_lin'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comi_lin2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'row_id'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'va'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'i_lin_des' => new sfValidatorPass(array('required' => false)),
      'movil'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('lin_art_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinArt';
  }

  public function getFields()
  {
    return array(
      'co_lin'    => 'Text',
      'lin_des'   => 'Text',
      'dis_cen'   => 'Text',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Date',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Date',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Date',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_sucu'   => 'Text',
      'rowguid'   => 'Text',
      'co_imun'   => 'Text',
      'co_reten'  => 'Text',
      'comi_lin'  => 'Number',
      'comi_lin2' => 'Number',
      'row_id'    => 'Date',
      'va'        => 'Boolean',
      'i_lin_des' => 'Text',
      'movil'     => 'Boolean',
    );
  }
}
