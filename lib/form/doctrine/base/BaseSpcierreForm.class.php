<?php

/**
 * Spcierre form base class.
 *
 * @method Spcierre getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpcierreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ent_num'    => new sfWidgetFormInputHidden(),
      'odp_num'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spodp'), 'add_empty' => false)),
      'fec_emis'   => new sfWidgetFormDateTime(),
      'confirma'   => new sfWidgetFormInputCheckbox(),
      'aju_num'    => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'campo5'     => new sfWidgetFormInputText(),
      'campo6'     => new sfWidgetFormInputText(),
      'campo7'     => new sfWidgetFormInputText(),
      'campo8'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'rowguid'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'cie_des'    => new sfWidgetFormInputText(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'co_sub'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => false)),
      'comentario' => new sfWidgetFormTextarea(),
      'fec_conf'   => new sfWidgetFormDateTime(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'numcom'     => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'gasadi'     => new sfWidgetFormInputText(),
      'moadi'      => new sfWidgetFormInputText(),
      'seriales'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ent_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ent_num')), 'empty_value' => $this->getObject()->get('ent_num'), 'required' => false)),
      'odp_num'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spodp'), 'required' => false)),
      'fec_emis'   => new sfValidatorDateTime(array('required' => false)),
      'confirma'   => new sfValidatorBoolean(array('required' => false)),
      'aju_num'    => new sfValidatorInteger(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cie_des'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'anulado'    => new sfValidatorBoolean(array('required' => false)),
      'co_sub'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'fec_conf'   => new sfValidatorDateTime(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'gasadi'     => new sfValidatorNumber(array('required' => false)),
      'moadi'      => new sfValidatorNumber(array('required' => false)),
      'seriales'   => new sfValidatorInteger(array('required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('spcierre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spcierre';
  }

}
