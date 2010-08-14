<?php

/**
 * RengPla filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengPlaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'xstock'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_art'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm7'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm8'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm9'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm10'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm11'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'm12'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd7'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd8'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd9'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd10'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd11'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd12'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'enero'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'xstock'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_art'   => new sfValidatorPass(array('required' => false)),
      'm1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm7'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm8'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm9'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm10'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm11'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'm12'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd7'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd8'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd9'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd10'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd11'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd12'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'enero'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_pla_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengPla';
  }

  public function getFields()
  {
    return array(
      'pla_num'  => 'Number',
      'reng_num' => 'Number',
      'xstock'   => 'Boolean',
      'co_art'   => 'Text',
      'm1'       => 'Number',
      'm2'       => 'Number',
      'm3'       => 'Number',
      'm4'       => 'Number',
      'm5'       => 'Number',
      'm6'       => 'Number',
      'm7'       => 'Number',
      'm8'       => 'Number',
      'm9'       => 'Number',
      'm10'      => 'Number',
      'm11'      => 'Number',
      'm12'      => 'Number',
      'd1'       => 'Number',
      'd2'       => 'Number',
      'd3'       => 'Number',
      'd4'       => 'Number',
      'd5'       => 'Number',
      'd6'       => 'Number',
      'd7'       => 'Number',
      'd8'       => 'Number',
      'd9'       => 'Number',
      'd10'      => 'Number',
      'd11'      => 'Number',
      'd12'      => 'Number',
      'enero'    => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
