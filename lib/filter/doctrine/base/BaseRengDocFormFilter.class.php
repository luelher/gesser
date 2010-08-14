<?php

/**
 * RengDoc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengDocFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'doc_cop'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'doc_com'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_doc' => new sfValidatorPass(array('required' => false)),
      'num_doc'  => new sfValidatorPass(array('required' => false)),
      'fecha'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'doc_cop'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'doc_com'  => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_doc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDoc';
  }

  public function getFields()
  {
    return array(
      'exp_num'  => 'Number',
      'reng_num' => 'Number',
      'tipo_doc' => 'Text',
      'num_doc'  => 'Text',
      'fecha'    => 'Date',
      'doc_cop'  => 'Boolean',
      'doc_com'  => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
