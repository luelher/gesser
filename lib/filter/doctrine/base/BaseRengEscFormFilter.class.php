<?php

/**
 * RengEsc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengEscFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_art2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_calcular' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_un'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'       => new sfValidatorPass(array('required' => false)),
      'co_art2'      => new sfValidatorPass(array('required' => false)),
      'descrip'      => new sfValidatorPass(array('required' => false)),
      'uni_venta'    => new sfValidatorPass(array('required' => false)),
      'total_art'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_calcular' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_un'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_esc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEsc';
  }

  public function getFields()
  {
    return array(
      'esc_num'      => 'Number',
      'reng_num'     => 'Number',
      'co_art'       => 'Text',
      'co_art2'      => 'Text',
      'descrip'      => 'Text',
      'uni_venta'    => 'Text',
      'total_art'    => 'Number',
      'cos_calcular' => 'Number',
      'cos_pro_un'   => 'Number',
      'cos_pro_om'   => 'Number',
      'ult_cos_un'   => 'Number',
      'ult_cos_om'   => 'Number',
      'rowguid'      => 'Text',
    );
  }
}
