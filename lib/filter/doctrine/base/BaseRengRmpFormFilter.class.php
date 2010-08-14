<?php

/**
 * RengRmp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengRmpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'serial'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_tip_e'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num_e'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'tipo_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_doc_e'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_falla'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_emis'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_reem'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReep'), 'add_empty' => true)),
      'treemplazo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seleccion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'des_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'serial'     => new sfValidatorPass(array('required' => false)),
      'doc_tip_e'  => new sfValidatorPass(array('required' => false)),
      'doc_num_e'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_doc_e'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_falla'   => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'fec_emis'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_reem'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RmaReep'), 'column' => 'co_reem')),
      'treemplazo' => new sfValidatorPass(array('required' => false)),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'seleccion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'des_art'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_rmp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengRmp';
  }

  public function getFields()
  {
    return array(
      'rma_num'    => 'Number',
      'reng_num'   => 'Number',
      'serial'     => 'Text',
      'doc_tip_e'  => 'Text',
      'doc_num_e'  => 'Number',
      'co_art'     => 'ForeignKey',
      'tipo_doc'   => 'Text',
      'num_doc'    => 'Number',
      'fec_doc_e'  => 'Date',
      'co_falla'   => 'Text',
      'status'     => 'Text',
      'fec_emis'   => 'Date',
      'co_reem'    => 'ForeignKey',
      'treemplazo' => 'Text',
      'comentario' => 'Text',
      'co_sucu'    => 'Text',
      'seleccion'  => 'Boolean',
      'co_alma'    => 'ForeignKey',
      'des_art'    => 'Text',
      'rowguid'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
