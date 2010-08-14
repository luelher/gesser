<?php

/**
 * RengFci filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengFciFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tot_neto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_dis' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fact_num'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tot_neto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descrip'   => new sfValidatorPass(array('required' => false)),
      'monto_dis' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'aux01'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_fci_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFci';
  }

  public function getFields()
  {
    return array(
      'imp_num'   => 'Number',
      'reng_num'  => 'Number',
      'fact_num'  => 'Number',
      'tot_neto'  => 'Number',
      'descrip'   => 'Text',
      'monto_dis' => 'Number',
      'rowguid'   => 'Text',
      'aux01'     => 'Number',
      'aux02'     => 'Text',
    );
  }
}
