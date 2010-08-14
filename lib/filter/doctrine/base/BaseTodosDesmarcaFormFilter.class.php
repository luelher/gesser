<?php

/**
 * TodosDesmarca filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTodosDesmarcaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_docs'  => new sfWidgetFormFilterInput(),
      'tipo_doc'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'automatico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_doc'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_comp' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'num_comp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_docs'  => new sfValidatorPass(array('required' => false)),
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'nro_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'automatico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_doc'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_comp' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'num_comp'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('todos_desmarca_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodosDesmarca';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'tipo_docs'  => 'Text',
      'tipo_doc'   => 'Text',
      'nro_doc'    => 'Number',
      'automatico' => 'Number',
      'fecha_doc'  => 'Date',
      'fecha_comp' => 'Date',
      'num_comp'   => 'Number',
    );
  }
}
