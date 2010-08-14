<?php

/**
 * RengExp2 filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengExp2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'existencia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'faltante'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_pro'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porllegar'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'co_art2'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'existencia' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'faltante'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo_pro'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porllegar'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_exp2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengExp2';
  }

  public function getFields()
  {
    return array(
      'exp_num'    => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'Text',
      'co_art2'    => 'Text',
      'descrip'    => 'Text',
      'uni_venta'  => 'Text',
      'existencia' => 'Number',
      'total_art'  => 'Number',
      'faltante'   => 'Number',
      'costo'      => 'Number',
      'costo_pro'  => 'Number',
      'porllegar'  => 'Number',
      'rowguid'    => 'Text',
    );
  }
}
