<?php

/**
 * RengTax filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengTaxFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tax_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tax'), 'add_empty' => true)),
      'tasa1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa3'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formula'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'limite'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc1'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc2'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tax_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tax'), 'column' => 'tax_id')),
      'tasa1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasa2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasa3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'formula'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'limite'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tax_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTax';
  }

  public function getFields()
  {
    return array(
      'tax_num'  => 'Number',
      'reng_num' => 'Number',
      'tax_id'   => 'ForeignKey',
      'tasa1'    => 'Number',
      'tasa2'    => 'Number',
      'tasa3'    => 'Number',
      'formula'  => 'Boolean',
      'limite'   => 'Number',
      'porc1'    => 'Number',
      'porc2'    => 'Number',
      'rowguid'  => 'Text',
    );
  }
}
