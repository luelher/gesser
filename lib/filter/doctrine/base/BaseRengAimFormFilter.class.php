<?php

/**
 * RengAim filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengAimFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom'), 'add_empty' => true)),
      'co_art'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'neto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_d'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nuevo_co' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'margen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_ara' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pie_cub'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'tasa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RengCom_5'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fact_num' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RengCom'), 'column' => 'fact_num')),
      'co_art'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'neto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'costo_d'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nuevo_co' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_ara' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pie_cub'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'peso'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'tasa'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reng_doc' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RengCom_5'), 'column' => 'fact_num')),
    ));

    $this->widgetSchema->setNameFormat('reng_aim_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAim';
  }

  public function getFields()
  {
    return array(
      'imp_num'  => 'Number',
      'reng_num' => 'Number',
      'fact_num' => 'ForeignKey',
      'co_art'   => 'ForeignKey',
      'cantidad' => 'Number',
      'neto'     => 'Number',
      'rowguid'  => 'Text',
      'costo_d'  => 'Number',
      'nuevo_co' => 'Number',
      'margen'   => 'Number',
      'porc_ara' => 'Number',
      'pie_cub'  => 'Number',
      'peso'     => 'Number',
      'moneda'   => 'ForeignKey',
      'tasa'     => 'Number',
      'reng_doc' => 'ForeignKey',
    );
  }
}
