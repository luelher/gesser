<?php

/**
 * RengGen form base class.
 *
 * @method RengGen getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengGenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gene_num'   => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'uni_venta'  => new sfWidgetFormInputText(),
      'total_art'  => new sfWidgetFormInputText(),
      'suni_venta' => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'costo_uni'  => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'neto'       => new sfWidgetFormInputText(),
      'aju_sal'    => new sfWidgetFormInputText(),
      'cos_pro_un' => new sfWidgetFormInputText(),
      'ult_cos_om' => new sfWidgetFormInputText(),
      'cos_pro_om' => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'total_uni'  => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'pendiente2' => new sfWidgetFormInputText(),
      'tipo_doc2'  => new sfWidgetFormInputText(),
      'reng_doc2'  => new sfWidgetFormInputText(),
      'num_doc2'   => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gene_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gene_num')), 'empty_value' => $this->getObject()->get('gene_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'suni_venta' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'costo_uni'  => new sfValidatorNumber(array('required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'neto'       => new sfValidatorNumber(array('required' => false)),
      'aju_sal'    => new sfValidatorInteger(array('required' => false)),
      'cos_pro_un' => new sfValidatorNumber(array('required' => false)),
      'ult_cos_om' => new sfValidatorNumber(array('required' => false)),
      'cos_pro_om' => new sfValidatorNumber(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'pendiente2' => new sfValidatorNumber(array('required' => false)),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'reng_doc2'  => new sfValidatorInteger(array('required' => false)),
      'num_doc2'   => new sfValidatorInteger(array('required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_gen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengGen';
  }

}
