<?php

/**
 * RengDmc filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengDmcFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'can_bult' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cla_bult' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'art_desc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'arancel'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unid_tip' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unid_ent' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unid_frc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'can_bult' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cla_bult' => new sfValidatorPass(array('required' => false)),
      'art_desc' => new sfValidatorPass(array('required' => false)),
      'arancel'  => new sfValidatorPass(array('required' => false)),
      'unid_tip' => new sfValidatorPass(array('required' => false)),
      'unid_ent' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unid_frc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'peso'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_imp' => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dmc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDmc';
  }

  public function getFields()
  {
    return array(
      'dmc_num'  => 'Number',
      'reng_num' => 'Number',
      'can_bult' => 'Number',
      'cla_bult' => 'Text',
      'art_desc' => 'Text',
      'arancel'  => 'Text',
      'unid_tip' => 'Text',
      'unid_ent' => 'Number',
      'unid_frc' => 'Number',
      'peso'     => 'Number',
      'valor'    => 'Number',
      'tipo_imp' => 'Text',
      'rowguid'  => 'Text',
    );
  }
}
