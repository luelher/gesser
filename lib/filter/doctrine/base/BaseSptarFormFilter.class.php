<?php

/**
 * Sptar filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSptarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tar_des'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo1'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo2'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo3'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo3' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo4'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo4' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo5'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo5' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atributo6'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo6' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'man_mat'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tar_des'    => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'atributo1'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo1' => new sfValidatorPass(array('required' => false)),
      'atributo2'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo2' => new sfValidatorPass(array('required' => false)),
      'atributo3'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo3' => new sfValidatorPass(array('required' => false)),
      'atributo4'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo4' => new sfValidatorPass(array('required' => false)),
      'atributo5'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo5' => new sfValidatorPass(array('required' => false)),
      'atributo6'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo6' => new sfValidatorPass(array('required' => false)),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'man_mat'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sptar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sptar';
  }

  public function getFields()
  {
    return array(
      'co_tar'     => 'Text',
      'tar_des'    => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'atributo1'  => 'Boolean',
      'vatributo1' => 'Text',
      'atributo2'  => 'Boolean',
      'vatributo2' => 'Text',
      'atributo3'  => 'Boolean',
      'vatributo3' => 'Text',
      'atributo4'  => 'Boolean',
      'vatributo4' => 'Text',
      'atributo5'  => 'Boolean',
      'vatributo5' => 'Text',
      'atributo6'  => 'Boolean',
      'vatributo6' => 'Text',
      'co_us_in'   => 'Text',
      'co_us_mo'   => 'Text',
      'co_us_el'   => 'Text',
      'fe_us_in'   => 'Date',
      'fe_us_mo'   => 'Date',
      'fe_us_el'   => 'Date',
      'rowguid'    => 'Text',
      'co_sucu'    => 'Text',
      'man_mat'    => 'Boolean',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
    );
  }
}
