<?php

/**
 * RengEmb filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengEmbFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_tra' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fact_num' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emp_tra'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'veh_nom'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_etd'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'lug_emb'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_eta'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cant_con' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso_vo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso_to'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vol_tot'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_uni'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unidades'), 'add_empty' => true)),
      'cant_emp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_tra' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fact_num' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc'  => new sfValidatorPass(array('required' => false)),
      'emp_tra'  => new sfValidatorPass(array('required' => false)),
      'veh_nom'  => new sfValidatorPass(array('required' => false)),
      'fec_etd'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'lug_emb'  => new sfValidatorPass(array('required' => false)),
      'fec_eta'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cant_con' => new sfValidatorPass(array('required' => false)),
      'peso_vo'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'peso_to'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vol_tot'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_uni'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unidades'), 'column' => 'co_uni')),
      'cant_emp' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_emb_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEmb';
  }

  public function getFields()
  {
    return array(
      'exp_num'  => 'Number',
      'reng_num' => 'Number',
      'tipo_tra' => 'Number',
      'fact_num' => 'Number',
      'num_doc'  => 'Text',
      'emp_tra'  => 'Text',
      'veh_nom'  => 'Text',
      'fec_etd'  => 'Date',
      'lug_emb'  => 'Text',
      'fec_eta'  => 'Date',
      'cant_con' => 'Text',
      'peso_vo'  => 'Number',
      'peso_to'  => 'Number',
      'vol_tot'  => 'Number',
      'co_uni'   => 'ForeignKey',
      'cant_emp' => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
