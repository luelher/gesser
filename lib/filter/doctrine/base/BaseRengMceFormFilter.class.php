<?php

/**
 * RengMce filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengMceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tar'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sptar'), 'add_empty' => true)),
      'cantidad'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_uni'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stotal_art' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_max'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feccom'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'total_uni'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorPass(array('required' => false)),
      'co_tar'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sptar'), 'column' => 'co_tar')),
      'cantidad'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_uni'     => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'cant_max'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'feccom'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_mce_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengMce';
  }

  public function getFields()
  {
    return array(
      'co_ced'     => 'Number',
      'reng_num'   => 'Number',
      'co_art'     => 'Text',
      'co_tar'     => 'ForeignKey',
      'cantidad'   => 'Number',
      'co_uni'     => 'Text',
      'rowguid'    => 'Text',
      'stotal_art' => 'Number',
      'dis_cen'    => 'Text',
      'cant_max'   => 'Number',
      'numcom'     => 'Number',
      'feccom'     => 'Date',
      'total_uni'  => 'Number',
    );
  }
}
