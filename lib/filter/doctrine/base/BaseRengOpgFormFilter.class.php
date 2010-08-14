<?php

/**
 * RengOpg filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengOpgFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cta_egre' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => true)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_a'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_co' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cta_egre' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtaIngr'), 'column' => 'co_ingr')),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'monto_a'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_co' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'dis_cen'  => new sfValidatorPass(array('required' => false)),
      'tipo_imp' => new sfValidatorPass(array('required' => false)),
      'aux01'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_opg_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengOpg';
  }

  public function getFields()
  {
    return array(
      'ord_num'  => 'Number',
      'reng_num' => 'Number',
      'cta_egre' => 'ForeignKey',
      'descrip'  => 'Text',
      'monto_a'  => 'Number',
      'monto_co' => 'Number',
      'rowguid'  => 'Text',
      'dis_cen'  => 'Text',
      'tipo_imp' => 'Text',
      'aux01'    => 'Number',
      'aux02'    => 'Text',
    );
  }
}
