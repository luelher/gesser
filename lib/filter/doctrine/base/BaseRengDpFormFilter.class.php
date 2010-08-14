<?php

/**
 * RengDp filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengDpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cajas'), 'add_empty' => true)),
      'mov_afec'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mov_gene'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_pag'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'doc_num'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cob_pag'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarj'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_plazo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cajas'), 'column' => 'cod_caja')),
      'mov_afec'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mov_gene'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'forma_pag'  => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'doc_num'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'origen'     => new sfValidatorPass(array('required' => false)),
      'cob_pag'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'banc_tarj'  => new sfValidatorPass(array('required' => false)),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'tipo_plazo' => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDp';
  }

  public function getFields()
  {
    return array(
      'dep_num'    => 'Number',
      'reng_num'   => 'Number',
      'codigo'     => 'ForeignKey',
      'mov_afec'   => 'Number',
      'mov_gene'   => 'Number',
      'forma_pag'  => 'Text',
      'fecha'      => 'Date',
      'doc_num'    => 'Text',
      'descrip'    => 'Text',
      'monto'      => 'Number',
      'origen'     => 'Text',
      'cob_pag'    => 'Number',
      'banc_tarj'  => 'Text',
      'comision'   => 'Number',
      'impuesto'   => 'Number',
      'rowguid'    => 'Text',
      'tipo_plazo' => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
