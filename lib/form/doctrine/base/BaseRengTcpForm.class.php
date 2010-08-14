<?php

/**
 * RengTcp form base class.
 *
 * @method RengTcp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengTcpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'tip_cob'    => new sfWidgetFormInputText(),
      'movi'       => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'devuelto'   => new sfWidgetFormInputCheckbox(),
      'mont_doc'   => new sfWidgetFormInputText(),
      'mont_tmp'   => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormInputText(),
      'banco'      => new sfWidgetFormInputText(),
      'cod_caja'   => new sfWidgetFormInputText(),
      'des_caja'   => new sfWidgetFormInputText(),
      'fec_cheq'   => new sfWidgetFormDateTime(),
      'nombre_ban' => new sfWidgetFormInputText(),
      'numero'     => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cob_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cob_num')), 'empty_value' => $this->getObject()->get('cob_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tip_cob'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'movi'       => new sfValidatorInteger(array('required' => false)),
      'num_doc'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'devuelto'   => new sfValidatorBoolean(array('required' => false)),
      'mont_doc'   => new sfValidatorNumber(array('required' => false)),
      'mont_tmp'   => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'banco'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cod_caja'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'des_caja'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_cheq'   => new sfValidatorDateTime(array('required' => false)),
      'nombre_ban' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'numero'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tcp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTcp';
  }

}
