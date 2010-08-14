<?php

/**
 * RengDcc form base class.
 *
 * @method RengDcc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengDccForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc'  => new sfWidgetFormInputHidden(),
      'nro_doc'   => new sfWidgetFormInputHidden(),
      'reng_num'  => new sfWidgetFormInputHidden(),
      'co_art'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'total_art' => new sfWidgetFormInputText(),
      'prec_vta'  => new sfWidgetFormInputText(),
      'prec_vta2' => new sfWidgetFormInputText(),
      'reng_neto' => new sfWidgetFormInputText(),
      'tipo_imp'  => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'uni_venta' => new sfWidgetFormInputText(),
      'total_uni' => new sfWidgetFormInputText(),
      'des_art'   => new sfWidgetFormTextarea(),
      'aux01'     => new sfWidgetFormInputText(),
      'aux02'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipo_doc'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_doc')), 'empty_value' => $this->getObject()->get('tipo_doc'), 'required' => false)),
      'nro_doc'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nro_doc')), 'empty_value' => $this->getObject()->get('nro_doc'), 'required' => false)),
      'reng_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'total_art' => new sfValidatorNumber(array('required' => false)),
      'prec_vta'  => new sfValidatorNumber(array('required' => false)),
      'prec_vta2' => new sfValidatorNumber(array('required' => false)),
      'reng_neto' => new sfValidatorNumber(array('required' => false)),
      'tipo_imp'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'uni_venta' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total_uni' => new sfValidatorNumber(array('required' => false)),
      'des_art'   => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'aux01'     => new sfValidatorNumber(array('required' => false)),
      'aux02'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dcc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDcc';
  }

}
