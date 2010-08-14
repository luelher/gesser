<?php

/**
 * RengArt filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengArtFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_relac' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_relac' => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'aux01'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_art_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengArt';
  }

  public function getFields()
  {
    return array(
      'co_art'    => 'Text',
      'reng_num'  => 'Number',
      'cod_relac' => 'Text',
      'rowguid'   => 'Text',
      'aux01'     => 'Number',
      'aux02'     => 'Text',
    );
  }
}
