<?php

/**
 * MovBan filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMovBanFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'add_empty' => true)),
      'dep_num'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_num'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_op'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_pag'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'doc_num'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_d'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_h'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idb'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_egre'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => true)),
      'cob_pag'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ori_dep'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dep_con'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_con'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'banc_tarj'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ingben' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_che'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'feccom'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numcom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'tasa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comisiontv' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuestotv' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cuentas'), 'column' => 'cod_cta')),
      'dep_num'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reng_num'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'origen'     => new sfValidatorPass(array('required' => false)),
      'tipo_op'    => new sfValidatorPass(array('required' => false)),
      'forma_pag'  => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'doc_num'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'monto_d'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_h'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'idb'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cta_egre'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtaIngr'), 'column' => 'co_ingr')),
      'cob_pag'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ori_dep'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dep_con'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_con'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'banc_tarj'  => new sfValidatorPass(array('required' => false)),
      'cod_ingben' => new sfValidatorPass(array('required' => false)),
      'fecha_che'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'feccom'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comisiontv' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuestotv' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda2'    => new sfValidatorPass(array('required' => false)),
      'tasa2'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mov_ban_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovBan';
  }

  public function getFields()
  {
    return array(
      'mov_num'    => 'Number',
      'codigo'     => 'ForeignKey',
      'dep_num'    => 'Number',
      'reng_num'   => 'Number',
      'origen'     => 'Text',
      'tipo_op'    => 'Text',
      'forma_pag'  => 'Text',
      'fecha'      => 'Date',
      'doc_num'    => 'Text',
      'descrip'    => 'Text',
      'monto_d'    => 'Number',
      'monto_h'    => 'Number',
      'idb'        => 'Number',
      'cta_egre'   => 'ForeignKey',
      'cob_pag'    => 'Number',
      'ori_dep'    => 'Boolean',
      'dep_con'    => 'Number',
      'fec_con'    => 'Date',
      'banc_tarj'  => 'Text',
      'cod_ingben' => 'Text',
      'fecha_che'  => 'Date',
      'feccom'     => 'Date',
      'numcom'     => 'Number',
      'dis_cen'    => 'Text',
      'moneda'     => 'ForeignKey',
      'tasa'       => 'Number',
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
      'anulado'    => 'Boolean',
      'comisiontv' => 'Number',
      'impuestotv' => 'Number',
      'moneda2'    => 'Text',
      'tasa2'      => 'Number',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
    );
  }
}
