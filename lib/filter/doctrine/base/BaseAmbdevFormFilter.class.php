<?php

/**
 * Ambdev filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbdevFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'almaori'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'almorid'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alma_ori'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'almades'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'almdesd'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alma_des'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'motivo'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_ser'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_anula'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_reversa' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'confirma'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'desconfima' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'stock_neg'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pstock_neg' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
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
      'p_lotefec'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dev_num'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'devolver'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'odp_num'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'almaori'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'almorid'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alma_ori'   => new sfValidatorPass(array('required' => false)),
      'almades'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'almdesd'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alma_des'   => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'motivo'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_ser'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_anula'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_reversa' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'confirma'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'desconfima' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'stock_neg'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pstock_neg' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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
      'p_lotefec'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dev_num'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'devolver'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'odp_num'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambdev_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambdev';
  }

  public function getFields()
  {
    return array(
      'amb_usua'   => 'Text',
      'almaori'    => 'Boolean',
      'almorid'    => 'Boolean',
      'alma_ori'   => 'Text',
      'almades'    => 'Boolean',
      'almdesd'    => 'Boolean',
      'alma_des'   => 'Text',
      'fecha'      => 'Boolean',
      'motivo'     => 'Boolean',
      'bt_ser'     => 'Boolean',
      'bt_anula'   => 'Boolean',
      'bt_reversa' => 'Boolean',
      'confirma'   => 'Boolean',
      'desconfima' => 'Boolean',
      'stock_neg'  => 'Boolean',
      'pstock_neg' => 'Boolean',
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
      'p_lotefec'  => 'Boolean',
      'dev_num'    => 'Boolean',
      'devolver'   => 'Boolean',
      'odp_num'    => 'Boolean',
      'rowguid'    => 'Text',
      'trasnfe'    => 'Text',
    );
  }
}
