<?php

/**
 * CobTmp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCobTmpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_num'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tip_cob'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banco'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_caja'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_caja'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cheq'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_ban' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sino_pago'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sino_reten' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_dppa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_rete' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_cobro' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'neto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'giro'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_ven'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'cob_num'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reng_num'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tip_cob'    => new sfValidatorPass(array('required' => false)),
      'num_doc'    => new sfValidatorPass(array('required' => false)),
      'mont_doc'   => new sfValidatorPass(array('required' => false)),
      'banco'      => new sfValidatorPass(array('required' => false)),
      'cod_caja'   => new sfValidatorPass(array('required' => false)),
      'des_caja'   => new sfValidatorPass(array('required' => false)),
      'fec_cheq'   => new sfValidatorPass(array('required' => false)),
      'nombre_ban' => new sfValidatorPass(array('required' => false)),
      'numero'     => new sfValidatorPass(array('required' => false)),
      'sino_pago'  => new sfValidatorPass(array('required' => false)),
      'sino_reten' => new sfValidatorPass(array('required' => false)),
      'monto_dppa' => new sfValidatorPass(array('required' => false)),
      'monto_rete' => new sfValidatorPass(array('required' => false)),
      'mont_cobro' => new sfValidatorPass(array('required' => false)),
      'saldo'      => new sfValidatorPass(array('required' => false)),
      'neto'       => new sfValidatorPass(array('required' => false)),
      'giro'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'fecha_ven'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cob_tmp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CobTmp';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'cob_num'    => 'Number',
      'reng_num'   => 'Number',
      'tip_cob'    => 'Text',
      'num_doc'    => 'Text',
      'mont_doc'   => 'Text',
      'banco'      => 'Text',
      'cod_caja'   => 'Text',
      'des_caja'   => 'Text',
      'fec_cheq'   => 'Text',
      'nombre_ban' => 'Text',
      'numero'     => 'Text',
      'sino_pago'  => 'Text',
      'sino_reten' => 'Text',
      'monto_dppa' => 'Text',
      'monto_rete' => 'Text',
      'mont_cobro' => 'Text',
      'saldo'      => 'Text',
      'neto'       => 'Text',
      'giro'       => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
      'fecha_ven'  => 'Date',
    );
  }
}
