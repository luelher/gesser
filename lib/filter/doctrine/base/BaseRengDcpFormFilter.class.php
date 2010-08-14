<?php

/**
 * RengDcp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengDcpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'total_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prec_vta2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_neto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_venta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_art'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'total_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reng_neto' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_imp'  => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'uni_venta' => new sfValidatorPass(array('required' => false)),
      'total_uni' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'des_art'   => new sfValidatorPass(array('required' => false)),
      'aux01'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dcp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDcp';
  }

  public function getFields()
  {
    return array(
      'tipo_doc'  => 'Text',
      'nro_doc'   => 'Number',
      'reng_num'  => 'Number',
      'co_art'    => 'ForeignKey',
      'total_art' => 'Number',
      'prec_vta'  => 'Number',
      'prec_vta2' => 'Number',
      'reng_neto' => 'Number',
      'tipo_imp'  => 'Text',
      'rowguid'   => 'Text',
      'dis_cen'   => 'Text',
      'uni_venta' => 'Text',
      'total_uni' => 'Number',
      'des_art'   => 'Text',
      'aux01'     => 'Number',
      'aux02'     => 'Text',
    );
  }
}
