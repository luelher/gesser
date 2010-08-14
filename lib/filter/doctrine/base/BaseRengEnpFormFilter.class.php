<?php

/**
 * RengEnp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengEnpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serial_dev' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'serial'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'co_reem'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReep'), 'add_empty' => true)),
      'treemplazo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nc_num'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'des_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'serial_dev' => new sfValidatorPass(array('required' => false)),
      'serial'     => new sfValidatorPass(array('required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'co_reem'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RmaReep'), 'column' => 'co_reem')),
      'treemplazo' => new sfValidatorPass(array('required' => false)),
      'nc_num'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'prec_vta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'des_art'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_enp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEnp';
  }

  public function getFields()
  {
    return array(
      'rma_num'    => 'Number',
      'reng_num'   => 'Number',
      'tipo_doc'   => 'Text',
      'num_doc'    => 'Number',
      'serial_dev' => 'Text',
      'serial'     => 'Text',
      'co_art'     => 'ForeignKey',
      'co_reem'    => 'ForeignKey',
      'treemplazo' => 'Text',
      'nc_num'     => 'Number',
      'prec_vta'   => 'Number',
      'prec_vta2'  => 'Number',
      'comentario' => 'Text',
      'co_alma'    => 'ForeignKey',
      'des_art'    => 'Text',
      'rowguid'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
