<?php

/**
 * RengTar filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengTarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_maq'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spmaq'), 'add_empty' => true)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_maq'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Spmaq'), 'column' => 'co_maq')),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTar';
  }

  public function getFields()
  {
    return array(
      'co_tar'   => 'Text',
      'reng_num' => 'Number',
      'co_maq'   => 'ForeignKey',
      'rowguid'  => 'Text',
    );
  }
}
