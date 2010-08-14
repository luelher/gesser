<?php

/**
 * RengAce filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengAceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => true)),
      'cant'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_uni'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feccom'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numcom'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_cos'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subced'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_uni' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cant_prod' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'co_art'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Art'), 'column' => 'co_art')),
      'cant'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_uni'    => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'feccom'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'numcom'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'por_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subced'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_uni' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cant_prod' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_ace_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengAce';
  }

  public function getFields()
  {
    return array(
      'co_ced'    => 'Number',
      'reng_num'  => 'Number',
      'co_art'    => 'ForeignKey',
      'cant'      => 'Number',
      'co_uni'    => 'Text',
      'rowguid'   => 'Text',
      'dis_cen'   => 'Text',
      'feccom'    => 'Date',
      'numcom'    => 'Number',
      'por_cos'   => 'Number',
      'subced'    => 'Number',
      'total_uni' => 'Number',
      'cant_prod' => 'Number',
    );
  }
}
