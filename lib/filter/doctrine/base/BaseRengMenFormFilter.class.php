<?php

/**
 * RengMen filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengMenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'odp_num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pendpro'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stockop'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stockact' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diasinv'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diasprod' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'holgura'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantprod' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ced'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mesprox'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comprom'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'producir' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'odp_num'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'   => new sfValidatorPass(array('required' => false)),
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pendpro'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stockop'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stockact' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diasinv'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diasprod' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'holgura'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantprod' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'periodo'  => new sfValidatorPass(array('required' => false)),
      'cod_ced'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mesprox'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comprom'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'producir' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_men_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengMen';
  }

  public function getFields()
  {
    return array(
      'men_num'  => 'Number',
      'reng_num' => 'Number',
      'odp_num'  => 'Number',
      'co_art'   => 'Text',
      'cantidad' => 'Number',
      'pendpro'  => 'Number',
      'stockop'  => 'Number',
      'stockact' => 'Number',
      'diasinv'  => 'Number',
      'diasprod' => 'Number',
      'holgura'  => 'Number',
      'cantprod' => 'Number',
      'periodo'  => 'Text',
      'cod_ced'  => 'Number',
      'mesprox'  => 'Number',
      'comprom'  => 'Number',
      'producir' => 'Boolean',
      'rowguid'  => 'Text',
    );
  }
}
