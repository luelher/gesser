<?php

/**
 * RengOdp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengOdpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'co_uni'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_req'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_ent'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_ent2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_com'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_com2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_max'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_dev'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_dev2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_xde'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_xde2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subced'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tar'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'co_uni'    => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'cant_req'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_ent'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_ent2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_com'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_com2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_max'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_dev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_dev2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_xde'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_xde2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'subced'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_uni' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_tar'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_odp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengOdp';
  }

  public function getFields()
  {
    return array(
      'odp_num'   => 'Number',
      'reng_num'  => 'Number',
      'co_art'    => 'ForeignKey',
      'co_uni'    => 'Text',
      'rowguid'   => 'Text',
      'cant_req'  => 'Number',
      'cant_ent'  => 'Number',
      'cant_ent2' => 'Number',
      'cant_com'  => 'Number',
      'cant_com2' => 'Number',
      'cant_max'  => 'Number',
      'cant_dev'  => 'Number',
      'cant_dev2' => 'Number',
      'cant_xde'  => 'Number',
      'cant_xde2' => 'Number',
      'dis_cen'   => 'Text',
      'subced'    => 'Number',
      'total_uni' => 'Number',
      'co_tar'    => 'Text',
    );
  }
}
