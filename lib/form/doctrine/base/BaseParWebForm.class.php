<?php

/**
 * ParWeb form base class.
 *
 * @method ParWeb getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseParWebForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'url'        => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'db'         => new sfWidgetFormInputText(),
      'server'     => new sfWidgetFormInputText(),
      'co_zon'     => new sfWidgetFormInputText(),
      'co_ven'     => new sfWidgetFormInputText(),
      'co_seg'     => new sfWidgetFormInputText(),
      'co_ing'     => new sfWidgetFormInputText(),
      'co_sucur'   => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormInputText(),
      'newclient'  => new sfWidgetFormInputCheckbox(),
      'viewacc'    => new sfWidgetFormInputCheckbox(),
      'viewdoc'    => new sfWidgetFormInputCheckbox(),
      'idaslogin'  => new sfWidgetFormInputCheckbox(),
      'negstock'   => new sfWidgetFormInputCheckbox(),
      'sinstock'   => new sfWidgetFormInputCheckbox(),
      'round'      => new sfWidgetFormInputText(),
      'desbyline'  => new sfWidgetFormInputCheckbox(),
      'desbyart'   => new sfWidgetFormInputCheckbox(),
      'desbycat'   => new sfWidgetFormInputCheckbox(),
      'gobaldes'   => new sfWidgetFormInputCheckbox(),
      'deliveryad' => new sfWidgetFormInputCheckbox(),
      'maxoforder' => new sfWidgetFormDateTime(),
      'prefijo'    => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDateTime(),
      'unidad'     => new sfWidgetFormInputText(),
      'roundtype'  => new sfWidgetFormInputText(),
      'meses'      => new sfWidgetFormInputText(),
      'co_tran'    => new sfWidgetFormInputText(),
      'f_pago'     => new sfWidgetFormInputText(),
      'sqluser'    => new sfWidgetFormInputText(),
      'sqlpass'    => new sfWidgetFormInputText(),
      'tipoaut'    => new sfWidgetFormInputText(),
      'largo'      => new sfWidgetFormInputText(),
      'auto'       => new sfWidgetFormInputCheckbox(),
      'horas'      => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormInputText(),
      'caja'       => new sfWidgetFormInputText(),
      'visa'       => new sfWidgetFormInputText(),
      'master'     => new sfWidgetFormInputText(),
      'dep'        => new sfWidgetFormInputText(),
      'authoriza'  => new sfWidgetFormInputText(),
      'wsnumber'   => new sfWidgetFormInputText(),
      'license'    => new sfWidgetFormInputText(),
      'licensen'   => new sfWidgetFormInputText(),
      'tipo_cli'   => new sfWidgetFormInputText(),
      'slog'       => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'password'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'db'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'server'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'co_zon'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_ven'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_seg'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_ing'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_sucur'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_alma'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'newclient'  => new sfValidatorBoolean(array('required' => false)),
      'viewacc'    => new sfValidatorBoolean(array('required' => false)),
      'viewdoc'    => new sfValidatorBoolean(array('required' => false)),
      'idaslogin'  => new sfValidatorBoolean(array('required' => false)),
      'negstock'   => new sfValidatorBoolean(array('required' => false)),
      'sinstock'   => new sfValidatorBoolean(array('required' => false)),
      'round'      => new sfValidatorInteger(array('required' => false)),
      'desbyline'  => new sfValidatorBoolean(array('required' => false)),
      'desbyart'   => new sfValidatorBoolean(array('required' => false)),
      'desbycat'   => new sfValidatorBoolean(array('required' => false)),
      'gobaldes'   => new sfValidatorBoolean(array('required' => false)),
      'deliveryad' => new sfValidatorBoolean(array('required' => false)),
      'maxoforder' => new sfValidatorDateTime(array('required' => false)),
      'prefijo'    => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'unidad'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'roundtype'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'meses'      => new sfValidatorInteger(array('required' => false)),
      'co_tran'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'f_pago'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'sqluser'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sqlpass'    => new sfValidatorString(array('max_length' => 180, 'required' => false)),
      'tipoaut'    => new sfValidatorInteger(array('required' => false)),
      'largo'      => new sfValidatorInteger(array('required' => false)),
      'auto'       => new sfValidatorBoolean(array('required' => false)),
      'horas'      => new sfValidatorInteger(array('required' => false)),
      'tipo'       => new sfValidatorInteger(array('required' => false)),
      'caja'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'visa'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'master'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dep'        => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'authoriza'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'wsnumber'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'license'    => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'licensen'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tipo_cli'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'slog'       => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('par_web[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ParWeb';
  }

}
