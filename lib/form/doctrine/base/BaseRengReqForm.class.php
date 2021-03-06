<?php

/**
 * RengReq form base class.
 *
 * @method RengReq getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengReqForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'req_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'co_art'     => new sfWidgetFormInputText(),
      'cant_req'   => new sfWidgetFormInputText(),
      'cant_com'   => new sfWidgetFormInputText(),
      'cant_xsol'  => new sfWidgetFormInputText(),
      'cant_sol'   => new sfWidgetFormInputText(),
      'total_art'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'suni_venta' => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'cos_pro_un' => new sfWidgetFormInputText(),
      'cos_pro_om' => new sfWidgetFormInputText(),
      'ult_cos_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'pendiente2' => new sfWidgetFormInputText(),
      'tipo_doc2'  => new sfWidgetFormInputText(),
      'reng_doc2'  => new sfWidgetFormInputText(),
      'num_doc2'   => new sfWidgetFormInputText(),
      'multilote'  => new sfWidgetFormTextarea(),
      'subced'     => new sfWidgetFormInputText(),
      'cant_sol2'  => new sfWidgetFormInputText(),
      'total_art2' => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'sustituto'  => new sfWidgetFormInputCheckbox(),
      'co_tar'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'req_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('req_num')), 'empty_value' => $this->getObject()->get('req_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cant_req'   => new sfValidatorNumber(array('required' => false)),
      'cant_com'   => new sfValidatorNumber(array('required' => false)),
      'cant_xsol'  => new sfValidatorNumber(array('required' => false)),
      'cant_sol'   => new sfValidatorNumber(array('required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'suni_venta' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'cos_pro_un' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_om' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'pendiente2' => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'  => new sfValidatorInteger(array('required' => false)),
      'num_doc2'   => new sfValidatorInteger(array('required' => false)),
      'multilote'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'subced'     => new sfValidatorInteger(array('required' => false)),
      'cant_sol2'  => new sfValidatorNumber(array('required' => false)),
      'total_art2' => new sfValidatorNumber(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'sustituto'  => new sfValidatorBoolean(array('required' => false)),
      'co_tar'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_req[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengReq';
  }

}
