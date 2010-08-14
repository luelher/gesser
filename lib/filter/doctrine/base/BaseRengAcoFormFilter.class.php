<?php

/**
 * RengAco filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengAcoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'monto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_ap' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'n_costo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_dis' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'tasa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_gast' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'art_gast' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fact_num' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'monto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_ap' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'n_costo'  => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'tipo_doc' => new sfValidatorPass(array('required' => false)),
      'tipo_dis' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'moneda'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'tasa'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reng_doc' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fac_gast' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'art_gast' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_aco_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAco';
  }

  public function getFields()
  {
    return array(
      'imp_num'  => 'Number',
      'reng_num' => 'Number',
      'fact_num' => 'Number',
      'co_art'   => 'ForeignKey',
      'monto'    => 'Number',
      'monto_ap' => 'Number',
      'n_costo'  => 'Text',
      'rowguid'  => 'Text',
      'tipo_doc' => 'Text',
      'tipo_dis' => 'Number',
      'moneda'   => 'ForeignKey',
      'tasa'     => 'Number',
      'reng_doc' => 'Number',
      'fac_gast' => 'Number',
      'art_gast' => 'Number',
    );
  }
}
