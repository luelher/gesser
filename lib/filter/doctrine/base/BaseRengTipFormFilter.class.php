<?php

/**
 * RengTip filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengTipFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tip_cob'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movi'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_tmp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banco'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_caja'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_caja'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cheq'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'nombre_ban' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'devuelto'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operador'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tip_cob'    => new sfValidatorPass(array('required' => false)),
      'movi'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc'    => new sfValidatorPass(array('required' => false)),
      'mont_doc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_tmp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'banco'      => new sfValidatorPass(array('required' => false)),
      'cod_caja'   => new sfValidatorPass(array('required' => false)),
      'des_caja'   => new sfValidatorPass(array('required' => false)),
      'fec_cheq'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'nombre_ban' => new sfValidatorPass(array('required' => false)),
      'numero'     => new sfValidatorPass(array('required' => false)),
      'devuelto'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'operador'   => new sfValidatorPass(array('required' => false)),
      'clave'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tip_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTip';
  }

  public function getFields()
  {
    return array(
      'cob_num'    => 'Number',
      'reng_num'   => 'Number',
      'tip_cob'    => 'Text',
      'movi'       => 'Number',
      'num_doc'    => 'Text',
      'mont_doc'   => 'Number',
      'mont_tmp'   => 'Number',
      'moneda'     => 'Text',
      'banco'      => 'Text',
      'cod_caja'   => 'Text',
      'des_caja'   => 'Text',
      'fec_cheq'   => 'Date',
      'nombre_ban' => 'Text',
      'numero'     => 'Text',
      'devuelto'   => 'Boolean',
      'rowguid'    => 'Text',
      'operador'   => 'Text',
      'clave'      => 'Text',
    );
  }
}
