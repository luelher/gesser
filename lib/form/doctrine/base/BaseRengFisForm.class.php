<?php

/**
 * RengFis form base class.
 *
 * @method RengFis getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengFisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_fis'      => new sfWidgetFormInputHidden(),
      'reng_num'     => new sfWidgetFormInputHidden(),
      'co_art'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'co_lin'       => new sfWidgetFormInputText(),
      'co_alma'      => new sfWidgetFormInputText(),
      'stock_teor'   => new sfWidgetFormInputText(),
      'stock_real'   => new sfWidgetFormInputText(),
      'sstock_teo'   => new sfWidgetFormInputText(),
      'stotal_art'   => new sfWidgetFormInputText(),
      'costo_uni'    => new sfWidgetFormInputText(),
      'aju_num'      => new sfWidgetFormInputText(),
      'saju_num'     => new sfWidgetFormInputText(),
      'cerrado'      => new sfWidgetFormInputCheckbox(),
      'uni_venta'    => new sfWidgetFormInputText(),
      'suni_venta'   => new sfWidgetFormInputText(),
      't_costo'      => new sfWidgetFormInputText(),
      'rowguid'      => new sfWidgetFormInputText(),
      'total_uni'    => new sfWidgetFormInputText(),
      'nro_lote'     => new sfWidgetFormInputText(),
      'fec_lote'     => new sfWidgetFormDateTime(),
      'costo_uni_om' => new sfWidgetFormInputText(),
      'pendiente2'   => new sfWidgetFormInputText(),
      'tipo_doc2'    => new sfWidgetFormInputText(),
      'reng_doc2'    => new sfWidgetFormInputText(),
      'num_doc2'     => new sfWidgetFormInputText(),
      'aux01'        => new sfWidgetFormInputText(),
      'aux02'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'num_fis'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('num_fis')), 'empty_value' => $this->getObject()->get('num_fis'), 'required' => false)),
      'reng_num'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'co_lin'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'co_alma'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'stock_teor'   => new sfValidatorNumber(array('required' => false)),
      'stock_real'   => new sfValidatorNumber(array('required' => false)),
      'sstock_teo'   => new sfValidatorNumber(array('required' => false)),
      'stotal_art'   => new sfValidatorNumber(array('required' => false)),
      'costo_uni'    => new sfValidatorNumber(array('required' => false)),
      'aju_num'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'saju_num'     => new sfValidatorInteger(array('required' => false)),
      'cerrado'      => new sfValidatorBoolean(array('required' => false)),
      'uni_venta'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'suni_venta'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      't_costo'      => new sfValidatorInteger(array('required' => false)),
      'rowguid'      => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'total_uni'    => new sfValidatorNumber(array('required' => false)),
      'nro_lote'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'     => new sfValidatorDateTime(array('required' => false)),
      'costo_uni_om' => new sfValidatorNumber(array('required' => false)),
      'pendiente2'   => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'    => new sfValidatorInteger(array('required' => false)),
      'num_doc2'     => new sfValidatorInteger(array('required' => false)),
      'aux01'        => new sfValidatorNumber(array('required' => false)),
      'aux02'        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_fis[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFis';
  }

}
