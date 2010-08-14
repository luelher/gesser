<?php

/**
 * Ambmov filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbmovFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mov_numv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'codigov'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'codigod'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'codigo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_opv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_opd'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_op'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_pagv' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'forma_pagd' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'forma_pag'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechav'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'doc_numv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'descripv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'montov'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egrev'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egred'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarjv' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'banc_tarjd' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'banc_tarj'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bt_reverv'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_anulav'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tasav'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'mov_numv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'codigov'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'codigod'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'tipo_opv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_opd'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_op'    => new sfValidatorPass(array('required' => false)),
      'forma_pagv' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'forma_pagd' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'forma_pag'  => new sfValidatorPass(array('required' => false)),
      'fechav'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'doc_numv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'descripv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'montov'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egrev'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egred'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egre'   => new sfValidatorPass(array('required' => false)),
      'banc_tarjv' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'banc_tarjd' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'banc_tarj'  => new sfValidatorPass(array('required' => false)),
      'bt_reverv'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_anulav'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tasav'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ambmov_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambmov';
  }

  public function getFields()
  {
    return array(
      'amb_usua'   => 'Text',
      'tipo_movi'  => 'Text',
      'mov_numv'   => 'Boolean',
      'codigov'    => 'Boolean',
      'codigod'    => 'Boolean',
      'codigo'     => 'Text',
      'tipo_opv'   => 'Boolean',
      'tipo_opd'   => 'Boolean',
      'tipo_op'    => 'Text',
      'forma_pagv' => 'Boolean',
      'forma_pagd' => 'Boolean',
      'forma_pag'  => 'Text',
      'fechav'     => 'Boolean',
      'doc_numv'   => 'Boolean',
      'descripv'   => 'Boolean',
      'montov'     => 'Boolean',
      'cta_egrev'  => 'Boolean',
      'cta_egred'  => 'Boolean',
      'cta_egre'   => 'Text',
      'banc_tarjv' => 'Boolean',
      'banc_tarjd' => 'Boolean',
      'banc_tarj'  => 'Text',
      'bt_reverv'  => 'Boolean',
      'bt_anulav'  => 'Boolean',
      'tasav'      => 'Boolean',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'Text',
      'rowguid'    => 'Text',
    );
  }
}
