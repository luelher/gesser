<?php

/**
 * RengExp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengExpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cos_pro_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_un' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ult_cos_om' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pendiente2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_doc2'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_sol'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ced'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'suni_venta' => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cant_sol'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'cod_ced'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_exp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengExp';
  }

  public function getFields()
  {
    return array(
      'exp_num'    => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'Text',
      'uni_venta'  => 'Text',
      'suni_venta' => 'Text',
      'total_uni'  => 'Number',
      'descrip'    => 'Text',
      'total_art'  => 'Number',
      'stotal_art' => 'Number',
      'cos_pro_un' => 'Number',
      'cos_pro_om' => 'Number',
      'ult_cos_un' => 'Number',
      'ult_cos_om' => 'Number',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'cant_sol'   => 'Number',
      'rowguid'    => 'Text',
      'cod_ced'    => 'Number',
    );
  }
}
