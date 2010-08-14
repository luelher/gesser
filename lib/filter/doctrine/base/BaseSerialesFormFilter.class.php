<?php

/**
 * Seriales filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSerialesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'contador'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_gara'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serial'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_tip_e' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num_e' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_tip_s' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num_s' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'contador'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_gara'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'    => new sfValidatorPass(array('required' => false)),
      'serial'    => new sfValidatorPass(array('required' => false)),
      'doc_tip_e' => new sfValidatorPass(array('required' => false)),
      'doc_num_e' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'doc_tip_s' => new sfValidatorPass(array('required' => false)),
      'doc_num_s' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_alma'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'aux01'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seriales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Seriales';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'contador'  => 'Number',
      'num_gara'  => 'Number',
      'co_art'    => 'Text',
      'serial'    => 'Text',
      'doc_tip_e' => 'Text',
      'doc_num_e' => 'Number',
      'doc_tip_s' => 'Text',
      'doc_num_s' => 'Number',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_alma'   => 'ForeignKey',
      'rowguid'   => 'Text',
      'aux01'     => 'Number',
      'aux02'     => 'Text',
    );
  }
}
