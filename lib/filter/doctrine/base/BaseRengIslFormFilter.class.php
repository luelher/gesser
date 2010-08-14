<?php

/**
 * RengIsl filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengIslFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_islr'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConIslr'), 'add_empty' => true)),
      'monto_obj'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_reten' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_retn'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_islr'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ConIslr'), 'column' => 'co_islr')),
      'monto_obj'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_reten' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sustraen'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_retn'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_isl_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengIsl';
  }

  public function getFields()
  {
    return array(
      'tipo_doc'    => 'Text',
      'doc_num'     => 'Number',
      'reng_num'    => 'Number',
      'fact_num'    => 'Number',
      'co_islr'     => 'ForeignKey',
      'monto_obj'   => 'Number',
      'monto_reten' => 'Number',
      'sustraen'    => 'Number',
      'porc_retn'   => 'Number',
      'rowguid'     => 'Text',
    );
  }
}
