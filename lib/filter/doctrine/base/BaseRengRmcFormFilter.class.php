<?php

/**
 * RengRmc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengRmcFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'serial'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_tip_s'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num_s'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'tipo_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_doc_s'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tiempo_gar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_venc'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_falla'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_prov'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_entreg' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rma_num_pr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_revi'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaRevi'), 'add_empty' => true)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_reem'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReem'), 'add_empty' => true)),
      'treemplazo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tec'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tecnico'), 'add_empty' => true)),
      'seleccion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'des_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'serial'     => new sfValidatorPass(array('required' => false)),
      'doc_tip_s'  => new sfValidatorPass(array('required' => false)),
      'doc_num_s'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_doc_s'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tiempo_gar' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_venc'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_falla'   => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'co_prov'    => new sfValidatorPass(array('required' => false)),
      'fec_entreg' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rma_num_pr' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_revi'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RmaRevi'), 'column' => 'co_revi')),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'co_reem'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RmaReem'), 'column' => 'co_reem')),
      'treemplazo' => new sfValidatorPass(array('required' => false)),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_tec'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tecnico'), 'column' => 'co_tec')),
      'seleccion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'des_art'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_rmc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengRmc';
  }

  public function getFields()
  {
    return array(
      'rma_num'    => 'Number',
      'reng_num'   => 'Number',
      'serial'     => 'Text',
      'doc_tip_s'  => 'Text',
      'doc_num_s'  => 'Number',
      'co_art'     => 'ForeignKey',
      'tipo_doc'   => 'Text',
      'num_doc'    => 'Number',
      'fec_doc_s'  => 'Date',
      'tiempo_gar' => 'Number',
      'fec_venc'   => 'Date',
      'co_falla'   => 'Text',
      'status'     => 'Text',
      'co_prov'    => 'Text',
      'fec_entreg' => 'Date',
      'rma_num_pr' => 'Number',
      'co_revi'    => 'ForeignKey',
      'revisado'   => 'Text',
      'co_reem'    => 'ForeignKey',
      'treemplazo' => 'Text',
      'comentario' => 'Text',
      'co_tec'     => 'ForeignKey',
      'seleccion'  => 'Boolean',
      'co_alma'    => 'ForeignKey',
      'des_art'    => 'Text',
      'rowguid'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
