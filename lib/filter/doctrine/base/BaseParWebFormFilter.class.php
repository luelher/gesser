<?php

/**
 * ParWeb filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParWebFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'db'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'server'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_zon'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ven'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_seg'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ing'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucur'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'newclient'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'viewacc'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'viewdoc'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'idaslogin'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'negstock'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sinstock'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'round'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desbyline'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'desbyart'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'desbycat'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'gobaldes'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'deliveryad' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'maxoforder' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'prefijo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'unidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'roundtype'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meses'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_tran'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'f_pago'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sqluser'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sqlpass'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipoaut'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'largo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'auto'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'horas'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'caja'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'visa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'master'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dep'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'authoriza'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'wsnumber'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'license'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'licensen'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_cli'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slog'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'url'        => new sfValidatorPass(array('required' => false)),
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'db'         => new sfValidatorPass(array('required' => false)),
      'server'     => new sfValidatorPass(array('required' => false)),
      'co_zon'     => new sfValidatorPass(array('required' => false)),
      'co_ven'     => new sfValidatorPass(array('required' => false)),
      'co_seg'     => new sfValidatorPass(array('required' => false)),
      'co_ing'     => new sfValidatorPass(array('required' => false)),
      'co_sucur'   => new sfValidatorPass(array('required' => false)),
      'co_alma'    => new sfValidatorPass(array('required' => false)),
      'newclient'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'viewacc'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'viewdoc'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'idaslogin'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'negstock'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sinstock'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'round'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desbyline'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'desbyart'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'desbycat'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'gobaldes'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'deliveryad' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'maxoforder' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'prefijo'    => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'unidad'     => new sfValidatorPass(array('required' => false)),
      'roundtype'  => new sfValidatorPass(array('required' => false)),
      'meses'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_tran'    => new sfValidatorPass(array('required' => false)),
      'f_pago'     => new sfValidatorPass(array('required' => false)),
      'sqluser'    => new sfValidatorPass(array('required' => false)),
      'sqlpass'    => new sfValidatorPass(array('required' => false)),
      'tipoaut'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'largo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'auto'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'horas'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'caja'       => new sfValidatorPass(array('required' => false)),
      'visa'       => new sfValidatorPass(array('required' => false)),
      'master'     => new sfValidatorPass(array('required' => false)),
      'dep'        => new sfValidatorPass(array('required' => false)),
      'authoriza'  => new sfValidatorPass(array('required' => false)),
      'wsnumber'   => new sfValidatorPass(array('required' => false)),
      'license'    => new sfValidatorPass(array('required' => false)),
      'licensen'   => new sfValidatorPass(array('required' => false)),
      'tipo_cli'   => new sfValidatorPass(array('required' => false)),
      'slog'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('par_web_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ParWeb';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Text',
      'url'        => 'Text',
      'usuario'    => 'Text',
      'password'   => 'Text',
      'db'         => 'Text',
      'server'     => 'Text',
      'co_zon'     => 'Text',
      'co_ven'     => 'Text',
      'co_seg'     => 'Text',
      'co_ing'     => 'Text',
      'co_sucur'   => 'Text',
      'co_alma'    => 'Text',
      'newclient'  => 'Boolean',
      'viewacc'    => 'Boolean',
      'viewdoc'    => 'Boolean',
      'idaslogin'  => 'Boolean',
      'negstock'   => 'Boolean',
      'sinstock'   => 'Boolean',
      'round'      => 'Number',
      'desbyline'  => 'Boolean',
      'desbyart'   => 'Boolean',
      'desbycat'   => 'Boolean',
      'gobaldes'   => 'Boolean',
      'deliveryad' => 'Boolean',
      'maxoforder' => 'Date',
      'prefijo'    => 'Text',
      'fecha'      => 'Date',
      'unidad'     => 'Text',
      'roundtype'  => 'Text',
      'meses'      => 'Number',
      'co_tran'    => 'Text',
      'f_pago'     => 'Text',
      'sqluser'    => 'Text',
      'sqlpass'    => 'Text',
      'tipoaut'    => 'Number',
      'largo'      => 'Number',
      'auto'       => 'Boolean',
      'horas'      => 'Number',
      'tipo'       => 'Number',
      'caja'       => 'Text',
      'visa'       => 'Text',
      'master'     => 'Text',
      'dep'        => 'Text',
      'authoriza'  => 'Text',
      'wsnumber'   => 'Text',
      'license'    => 'Text',
      'licensen'   => 'Text',
      'tipo_cli'   => 'Text',
      'slog'       => 'Boolean',
    );
  }
}
