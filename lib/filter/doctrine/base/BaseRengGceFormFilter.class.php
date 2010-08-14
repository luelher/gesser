<?php

/**
 * RengGce filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengGceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_gas'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spgasfab'), 'add_empty' => true)),
      'cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_gas'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spgasfab'), 'column' => 'co_gas')),
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_gce_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengGce';
  }

  public function getFields()
  {
    return array(
      'co_ced'   => 'Number',
      'reng_num' => 'Number',
      'co_gas'   => 'ForeignKey',
      'cantidad' => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
