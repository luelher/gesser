<?php

/**
 * RengCon filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengConFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fec_mov'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tipo_op'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_d'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_h'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idb'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dep_con'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fec_mov'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipo_op'  => new sfValidatorPass(array('required' => false)),
      'doc_num'  => new sfValidatorPass(array('required' => false)),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'monto_d'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_h'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'idb'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dep_con'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'origen'   => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_con_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCon';
  }

  public function getFields()
  {
    return array(
      'cod_cta'  => 'Text',
      'mes'      => 'Number',
      'ano'      => 'Number',
      'reng_num' => 'Number',
      'fec_mov'  => 'Date',
      'tipo_op'  => 'Text',
      'doc_num'  => 'Text',
      'descrip'  => 'Text',
      'monto_d'  => 'Number',
      'monto_h'  => 'Number',
      'idb'      => 'Number',
      'dep_con'  => 'Number',
      'origen'   => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
