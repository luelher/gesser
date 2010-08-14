<?php

/**
 * RengKit filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengKitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'fec_emis'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'des_kit'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_lote'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_lote'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'pendiente2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'fec_emis'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'des_kit'    => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_kit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengKit';
  }

  public function getFields()
  {
    return array(
      'kit_num'    => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'ForeignKey',
      'fec_emis'   => 'Date',
      'des_kit'    => 'Text',
      'uni_venta'  => 'Text',
      'total_art'  => 'Number',
      'rowguid'    => 'Text',
      'total_uni'  => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Date',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
