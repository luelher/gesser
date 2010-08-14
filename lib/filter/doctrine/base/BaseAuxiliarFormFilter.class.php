<?php

/**
 * Auxiliar filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAuxiliarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'val_aux'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_aux' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'form_aux' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cach_aux' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'des_aux'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'val_aux'  => new sfValidatorPass(array('required' => false)),
      'tipo_aux' => new sfValidatorPass(array('required' => false)),
      'form_aux' => new sfValidatorPass(array('required' => false)),
      'cach_aux' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'des_aux'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('auxiliar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auxiliar';
  }

  public function getFields()
  {
    return array(
      'nom_aux'  => 'Text',
      'val_aux'  => 'Text',
      'tipo_aux' => 'Text',
      'form_aux' => 'Text',
      'cach_aux' => 'Boolean',
      'grup_aux' => 'Text',
      'rowguid'  => 'Text',
      'des_aux'  => 'Text',
    );
  }
}
