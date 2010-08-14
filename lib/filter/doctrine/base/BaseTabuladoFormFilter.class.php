<?php

/**
 * Tabulado filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTabuladoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcio' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_vent'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_comp'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_cxs'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_otro'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'descripcio' => new sfValidatorPass(array('required' => false)),
      'porc_vent'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_comp'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_cxs'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_otro'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tabulado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabulado';
  }

  public function getFields()
  {
    return array(
      'tipo'       => 'Text',
      'descripcio' => 'Text',
      'porc_vent'  => 'Number',
      'porc_comp'  => 'Number',
      'porc_cxs'   => 'Number',
      'porc_otro'  => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
    );
  }
}
