<?php

/**
 * Lote filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLoteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta1'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta4'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta5'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'prec_vta1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lote_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lote';
  }

  public function getFields()
  {
    return array(
      'co_art'     => 'Text',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
      'prec_vta1'  => 'Number',
      'prec_vta2'  => 'Number',
      'prec_vta3'  => 'Number',
      'prec_vta4'  => 'Number',
      'prec_vta5'  => 'Number',
      'ult_cos_un' => 'Number',
      'ult_cos_om' => 'Number',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
