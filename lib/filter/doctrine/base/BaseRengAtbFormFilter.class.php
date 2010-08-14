<?php

/**
 * RengAtb filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengAtbFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_atriv' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spatriv'), 'add_empty' => true)),
      'valor'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_atriv' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spatriv'), 'column' => 'co_atriv')),
      'valor'    => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_atb_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAtb';
  }

  public function getFields()
  {
    return array(
      'co_atriv' => 'ForeignKey',
      'co_tar'   => 'Text',
      'reng_num' => 'Number',
      'valor'    => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
