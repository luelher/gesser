<?php

/**
 * StLote filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStLoteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'stock_act'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_act' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_com'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_com' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_lle'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_lle' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_des'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sstock_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'stock_act'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_act' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_com'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_com' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_lle'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_lle' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_des'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_des' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('st_lote_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StLote';
  }

  public function getFields()
  {
    return array(
      'co_alma'    => 'Text',
      'co_art'     => 'Text',
      'nro_lote'   => 'Text',
      'stock_act'  => 'Number',
      'sstock_act' => 'Number',
      'stock_com'  => 'Number',
      'sstock_com' => 'Number',
      'stock_lle'  => 'Number',
      'sstock_lle' => 'Number',
      'stock_des'  => 'Number',
      'sstock_des' => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
    );
  }
}
