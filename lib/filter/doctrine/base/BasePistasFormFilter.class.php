<?php

/**
 * Pistas filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePistasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'empresa'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tabla'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_doc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_op'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maquina'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campos'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario_id' => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'empresa'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'tabla'      => new sfValidatorPass(array('required' => false)),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo'     => new sfValidatorPass(array('required' => false)),
      'tipo_op'    => new sfValidatorPass(array('required' => false)),
      'maquina'    => new sfValidatorPass(array('required' => false)),
      'campos'     => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pistas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pistas';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'usuario_id' => 'Text',
      'usuario'    => 'Text',
      'fecha'      => 'Date',
      'empresa'    => 'Text',
      'co_sucu'    => 'Text',
      'tabla'      => 'Text',
      'num_doc'    => 'Number',
      'codigo'     => 'Text',
      'tipo_op'    => 'Text',
      'maquina'    => 'Text',
      'campos'     => 'Text',
      'rowguid'    => 'Text',
      'trasnfe'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
