<?php

/**
 * RengTra form base class.
 *
 * @method RengTra getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengTraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tras_num'   => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'total_art'  => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'suni_venta' => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'cos_pro_un' => new sfWidgetFormInputText(),
      'cos_pro_om' => new sfWidgetFormInputText(),
      'ult_cos_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'pendiente2' => new sfWidgetFormInputText(),
      'tipo_doc2'  => new sfWidgetFormInputText(),
      'reng_doc2'  => new sfWidgetFormInputText(),
      'num_doc2'   => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
      'cant_sol'   => new sfWidgetFormInputText(),
      'produccion' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'tras_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tras_num')), 'empty_value' => $this->getObject()->get('tras_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'suni_venta' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'cos_pro_un' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_om' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'pendiente2' => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'  => new sfValidatorInteger(array('required' => false)),
      'num_doc2'   => new sfValidatorInteger(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cant_sol'   => new sfValidatorInteger(array('required' => false)),
      'produccion' => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTra';
  }

}
