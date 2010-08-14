<?php

/**
 * RengCos filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengCosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mp_cant'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mo_cant'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gf_cant'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mp_cant_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mo_cant_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gf_cant_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_om'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mp'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_gf'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mp_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mo_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_gf_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'men_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mem_cant'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'oi_cant'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'men_cant_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mem_cant_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'oi_cant_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_men'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mem'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_oi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_men_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_mem_om'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_oi_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_uni'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'      => new sfValidatorPass(array('required' => false)),
      'mp_cant'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mo_cant'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gf_cant'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mp_cant_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mo_cant_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gf_cant_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_om'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
      'por_mp'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_mo'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_gf'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_mp_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_mo_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_gf_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'men_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mem_cant'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'oi_cant'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'men_cant_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mem_cant_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'oi_cant_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_men'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_mem'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_oi'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_men_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_mem_om'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_oi_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_uni'      => new sfValidatorPass(array('required' => false)),
      'total_uni'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_cos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCos';
  }

  public function getFields()
  {
    return array(
      'cost_num'    => 'Number',
      'reng_num'    => 'Number',
      'co_art'      => 'Text',
      'mp_cant'     => 'Number',
      'mo_cant'     => 'Number',
      'gf_cant'     => 'Number',
      'total'       => 'Number',
      'mp_cant_om'  => 'Number',
      'mo_cant_om'  => 'Number',
      'gf_cant_om'  => 'Number',
      'total_om'    => 'Number',
      'rowguid'     => 'Text',
      'por_mp'      => 'Number',
      'por_mo'      => 'Number',
      'por_gf'      => 'Number',
      'por_mp_om'   => 'Number',
      'por_mo_om'   => 'Number',
      'por_gf_om'   => 'Number',
      'men_cant'    => 'Number',
      'mem_cant'    => 'Number',
      'oi_cant'     => 'Number',
      'men_cant_om' => 'Number',
      'mem_cant_om' => 'Number',
      'oi_cant_om'  => 'Number',
      'por_men'     => 'Number',
      'por_mem'     => 'Number',
      'por_oi'      => 'Number',
      'por_men_om'  => 'Number',
      'por_mem_om'  => 'Number',
      'por_oi_om'   => 'Number',
      'co_uni'      => 'Text',
      'total_uni'   => 'Number',
    );
  }
}
