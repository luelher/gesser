<?php

/**
 * RengDp form base class.
 *
 * @method RengDp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengDpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dep_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cajas'), 'add_empty' => false)),
      'mov_afec'   => new sfWidgetFormInputText(),
      'mov_gene'   => new sfWidgetFormInputText(),
      'forma_pag'  => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDateTime(),
      'doc_num'    => new sfWidgetFormInputText(),
      'descrip'    => new sfWidgetFormInputText(),
      'monto'      => new sfWidgetFormInputText(),
      'origen'     => new sfWidgetFormInputText(),
      'cob_pag'    => new sfWidgetFormInputText(),
      'banc_tarj'  => new sfWidgetFormInputText(),
      'comision'   => new sfWidgetFormInputText(),
      'impuesto'   => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'tipo_plazo' => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'dep_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dep_num')), 'empty_value' => $this->getObject()->get('dep_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'codigo'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cajas'), 'required' => false)),
      'mov_afec'   => new sfValidatorInteger(array('required' => false)),
      'mov_gene'   => new sfValidatorInteger(array('required' => false)),
      'forma_pag'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'fecha'      => new sfValidatorDateTime(array('required' => false)),
      'doc_num'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'monto'      => new sfValidatorNumber(array('required' => false)),
      'origen'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cob_pag'    => new sfValidatorInteger(array('required' => false)),
      'banc_tarj'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'comision'   => new sfValidatorNumber(array('required' => false)),
      'impuesto'   => new sfValidatorNumber(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'tipo_plazo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_dp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengDp';
  }

}
