<?php

/**
 * RmaProv form base class.
 *
 * @method RmaProv getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRmaProvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rma_num'    => new sfWidgetFormInputHidden(),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'status'     => new sfWidgetFormInputText(),
      'co_prov'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => false)),
      'rma_prov'   => new sfWidgetFormInputText(),
      'comentario' => new sfWidgetFormTextarea(),
      'descrip'    => new sfWidgetFormInputText(),
      'co_tran'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Transpor'), 'add_empty' => false)),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'transfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rma_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rma_num')), 'empty_value' => $this->getObject()->get('rma_num'), 'required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'status'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_prov'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'required' => false)),
      'rma_prov'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_tran'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Transpor'), 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'transfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rma_prov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RmaProv';
  }

}
