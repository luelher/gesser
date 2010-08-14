<?php

/**
 * CobTmp form base class.
 *
 * @method CobTmp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCobTmpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'cob_num'    => new sfWidgetFormInputText(),
      'reng_num'   => new sfWidgetFormInputText(),
      'tip_cob'    => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'mont_doc'   => new sfWidgetFormInputText(),
      'banco'      => new sfWidgetFormInputText(),
      'cod_caja'   => new sfWidgetFormInputText(),
      'des_caja'   => new sfWidgetFormInputText(),
      'fec_cheq'   => new sfWidgetFormInputText(),
      'nombre_ban' => new sfWidgetFormInputText(),
      'numero'     => new sfWidgetFormInputText(),
      'sino_pago'  => new sfWidgetFormInputText(),
      'sino_reten' => new sfWidgetFormInputText(),
      'monto_dppa' => new sfWidgetFormInputText(),
      'monto_rete' => new sfWidgetFormInputText(),
      'mont_cobro' => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'neto'       => new sfWidgetFormInputText(),
      'giro'       => new sfWidgetFormInputText(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'fecha_ven'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cob_num'    => new sfValidatorInteger(array('required' => false)),
      'reng_num'   => new sfValidatorInteger(array('required' => false)),
      'tip_cob'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'num_doc'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mont_doc'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'banco'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cod_caja'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'des_caja'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_cheq'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nombre_ban' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'numero'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'sino_pago'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'sino_reten' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'monto_dppa' => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'monto_rete' => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'mont_cobro' => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'saldo'      => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'neto'       => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'giro'       => new sfValidatorNumber(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'fecha_ven'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cob_tmp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CobTmp';
  }

}
