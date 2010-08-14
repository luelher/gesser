<?php

/**
 * RengRmc form base class.
 *
 * @method RengRmc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengRmcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rma_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'serial'     => new sfWidgetFormInputText(),
      'doc_tip_s'  => new sfWidgetFormInputText(),
      'doc_num_s'  => new sfWidgetFormInputText(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'tipo_doc'   => new sfWidgetFormInputText(),
      'num_doc'    => new sfWidgetFormInputText(),
      'fec_doc_s'  => new sfWidgetFormDateTime(),
      'tiempo_gar' => new sfWidgetFormInputText(),
      'fec_venc'   => new sfWidgetFormDateTime(),
      'co_falla'   => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'co_prov'    => new sfWidgetFormInputText(),
      'fec_entreg' => new sfWidgetFormDateTime(),
      'rma_num_pr' => new sfWidgetFormInputText(),
      'co_revi'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaRevi'), 'add_empty' => false)),
      'revisado'   => new sfWidgetFormInputText(),
      'co_reem'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReem'), 'add_empty' => false)),
      'treemplazo' => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'co_tec'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tecnico'), 'add_empty' => false)),
      'seleccion'  => new sfWidgetFormInputCheckbox(),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'des_art'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rma_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rma_num')), 'empty_value' => $this->getObject()->get('rma_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'serial'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'doc_tip_s'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'doc_num_s'  => new sfValidatorInteger(array('required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'tipo_doc'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'num_doc'    => new sfValidatorInteger(array('required' => false)),
      'fec_doc_s'  => new sfValidatorDateTime(array('required' => false)),
      'tiempo_gar' => new sfValidatorNumber(array('required' => false)),
      'fec_venc'   => new sfValidatorDateTime(array('required' => false)),
      'co_falla'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_prov'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fec_entreg' => new sfValidatorDateTime(array('required' => false)),
      'rma_num_pr' => new sfValidatorInteger(array('required' => false)),
      'co_revi'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RmaRevi'), 'required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_reem'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RmaReem'), 'required' => false)),
      'treemplazo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'co_tec'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tecnico'), 'required' => false)),
      'seleccion'  => new sfValidatorBoolean(array('required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'des_art'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_rmc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengRmc';
  }

}
