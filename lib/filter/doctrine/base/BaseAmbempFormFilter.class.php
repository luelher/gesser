<?php

/**
 * Ambemp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbempFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_emp'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_doc'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'nro_orig'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'descrip'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'camp_adi'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'unid'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bulto'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'agrupar'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'reempaq'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'factura'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'canti'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'canti_d'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_us_in'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_sucu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_d'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'anular'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dtipodoc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dcanti'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_s'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_c'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'coincide'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'envio'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'recibido'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'empacado'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alma_d'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'alma'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'dalma'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empr'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'finalizar' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'num_emp'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_doc'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'nro_orig'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'descrip'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'camp_adi'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'unid'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bulto'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'agrupar'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'reempaq'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'factura'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'canti'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'canti_d'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'campo5'    => new sfValidatorPass(array('required' => false)),
      'campo6'    => new sfValidatorPass(array('required' => false)),
      'campo7'    => new sfValidatorPass(array('required' => false)),
      'campo8'    => new sfValidatorPass(array('required' => false)),
      'tipo_d'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'anular'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dtipodoc'  => new sfValidatorPass(array('required' => false)),
      'dcanti'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reng_s'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'reng_c'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'coincide'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'envio'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'recibido'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'empacado'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alma_d'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'alma'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'dalma'     => new sfValidatorPass(array('required' => false)),
      'empr'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'finalizar' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('ambemp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ambemp';
  }

  public function getFields()
  {
    return array(
      'amb_usua'  => 'Text',
      'num_emp'   => 'Boolean',
      'fecha'     => 'Boolean',
      'tipo_doc'  => 'Boolean',
      'nro_orig'  => 'Boolean',
      'descrip'   => 'Boolean',
      'camp_adi'  => 'Boolean',
      'unid'      => 'Boolean',
      'bulto'     => 'Boolean',
      'agrupar'   => 'Boolean',
      'reempaq'   => 'Boolean',
      'factura'   => 'Boolean',
      'canti'     => 'Boolean',
      'canti_d'   => 'Boolean',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Date',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Date',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Date',
      'co_sucu'   => 'Text',
      'rowguid'   => 'Text',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'campo5'    => 'Text',
      'campo6'    => 'Text',
      'campo7'    => 'Text',
      'campo8'    => 'Text',
      'tipo_d'    => 'Boolean',
      'anular'    => 'Boolean',
      'dtipodoc'  => 'Text',
      'dcanti'    => 'Number',
      'reng_s'    => 'Boolean',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'reng_c'    => 'Boolean',
      'coincide'  => 'Boolean',
      'envio'     => 'Boolean',
      'recibido'  => 'Boolean',
      'empacado'  => 'Boolean',
      'alma_d'    => 'Boolean',
      'alma'      => 'Boolean',
      'dalma'     => 'Text',
      'empr'      => 'Boolean',
      'finalizar' => 'Boolean',
    );
  }
}
