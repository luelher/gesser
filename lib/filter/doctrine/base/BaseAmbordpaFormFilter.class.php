<?php

/**
 * Ambordpa filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbordpaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ord_numv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fechav'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_bend'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_benv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_ben'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_pagd'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'forma_pagv'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'forma_pag'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'montov'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_impd'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_impv'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_imp'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_pagv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_ctad'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_ctav'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_cta'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chequev'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_cajad'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_cajav'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cod_caja'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'islrv'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egred'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egrev'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cta_egre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasav'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monedad'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monedav'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'moneda'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impriv'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pago1v'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pago2v'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'detallev'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'descripv'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bt_anular'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bt_reactivar' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'permodret'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'ord_numv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fechav'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_bend'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_benv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_ben'      => new sfValidatorPass(array('required' => false)),
      'forma_pagd'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'forma_pagv'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'forma_pag'    => new sfValidatorPass(array('required' => false)),
      'montov'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_impd'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_impv'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_imp'     => new sfValidatorPass(array('required' => false)),
      'fec_pagv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_ctad'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_ctav'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_cta'      => new sfValidatorPass(array('required' => false)),
      'chequev'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_cajad'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_cajav'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cod_caja'     => new sfValidatorPass(array('required' => false)),
      'islrv'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egred'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egrev'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cta_egre'     => new sfValidatorPass(array('required' => false)),
      'tasav'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monedad'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monedav'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'moneda'       => new sfValidatorPass(array('required' => false)),
      'campo1'       => new sfValidatorPass(array('required' => false)),
      'campo2'       => new sfValidatorPass(array('required' => false)),
      'campo3'       => new sfValidatorPass(array('required' => false)),
      'campo4'       => new sfValidatorPass(array('required' => false)),
      'campo5'       => new sfValidatorPass(array('required' => false)),
      'campo6'       => new sfValidatorPass(array('required' => false)),
      'campo7'       => new sfValidatorPass(array('required' => false)),
      'campo8'       => new sfValidatorPass(array('required' => false)),
      'co_us_in'     => new sfValidatorPass(array('required' => false)),
      'fe_us_in'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'     => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'     => new sfValidatorPass(array('required' => false)),
      'fe_us_el'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'     => new sfValidatorPass(array('required' => false)),
      'trasnfe'      => new sfValidatorPass(array('required' => false)),
      'co_sucu'      => new sfValidatorPass(array('required' => false)),
      'impriv'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pago1v'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pago2v'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'detallev'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'descripv'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'      => new sfValidatorPass(array('required' => false)),
      'bt_anular'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bt_reactivar' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'permodret'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('ambordpa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambordpa';
  }

  public function getFields()
  {
    return array(
      'amb_usua'     => 'Text',
      'ord_numv'     => 'Boolean',
      'fechav'       => 'Boolean',
      'cod_bend'     => 'Boolean',
      'cod_benv'     => 'Boolean',
      'cod_ben'      => 'Text',
      'forma_pagd'   => 'Boolean',
      'forma_pagv'   => 'Boolean',
      'forma_pag'    => 'Text',
      'montov'       => 'Boolean',
      'tipo_impd'    => 'Boolean',
      'tipo_impv'    => 'Boolean',
      'tipo_imp'     => 'Text',
      'fec_pagv'     => 'Boolean',
      'cod_ctad'     => 'Boolean',
      'cod_ctav'     => 'Boolean',
      'cod_cta'      => 'Text',
      'chequev'      => 'Boolean',
      'cod_cajad'    => 'Boolean',
      'cod_cajav'    => 'Boolean',
      'cod_caja'     => 'Text',
      'islrv'        => 'Boolean',
      'cta_egred'    => 'Boolean',
      'cta_egrev'    => 'Boolean',
      'cta_egre'     => 'Text',
      'tasav'        => 'Boolean',
      'monedad'      => 'Boolean',
      'monedav'      => 'Boolean',
      'moneda'       => 'Text',
      'campo1'       => 'Text',
      'campo2'       => 'Text',
      'campo3'       => 'Text',
      'campo4'       => 'Text',
      'campo5'       => 'Text',
      'campo6'       => 'Text',
      'campo7'       => 'Text',
      'campo8'       => 'Text',
      'co_us_in'     => 'Text',
      'fe_us_in'     => 'Date',
      'co_us_mo'     => 'Text',
      'fe_us_mo'     => 'Date',
      'co_us_el'     => 'Text',
      'fe_us_el'     => 'Date',
      'revisado'     => 'Text',
      'trasnfe'      => 'Text',
      'co_sucu'      => 'Text',
      'impriv'       => 'Boolean',
      'pago1v'       => 'Boolean',
      'pago2v'       => 'Boolean',
      'detallev'     => 'Boolean',
      'descripv'     => 'Boolean',
      'rowguid'      => 'Text',
      'bt_anular'    => 'Boolean',
      'bt_reactivar' => 'Boolean',
      'permodret'    => 'Boolean',
    );
  }
}
