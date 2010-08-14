<?php

/**
 * Prov form base class.
 *
 * @method Prov getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_prov'    => new sfWidgetFormInputHidden(),
      'prov_des'   => new sfWidgetFormInputText(),
      'co_seg'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segmento'), 'add_empty' => false)),
      'co_zon'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zona'), 'add_empty' => false)),
      'inactivo'   => new sfWidgetFormInputCheckbox(),
      'productos'  => new sfWidgetFormInputText(),
      'direc1'     => new sfWidgetFormTextarea(),
      'direc2'     => new sfWidgetFormInputText(),
      'telefonos'  => new sfWidgetFormInputText(),
      'fax'        => new sfWidgetFormInputText(),
      'respons'    => new sfWidgetFormInputText(),
      'fecha_reg'  => new sfWidgetFormDateTime(),
      'tipo'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPro'), 'add_empty' => false)),
      'com_ult_co' => new sfWidgetFormInputText(),
      'fec_ult_co' => new sfWidgetFormDateTime(),
      'net_ult_co' => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'saldo_ini'  => new sfWidgetFormInputText(),
      'mont_cre'   => new sfWidgetFormInputText(),
      'plaz_pag'   => new sfWidgetFormInputText(),
      'desc_ppago' => new sfWidgetFormInputText(),
      'desc_glob'  => new sfWidgetFormInputText(),
      'tipo_iva'   => new sfWidgetFormInputText(),
      'iva'        => new sfWidgetFormInputText(),
      'rif'        => new sfWidgetFormInputText(),
      'nacional'   => new sfWidgetFormInputCheckbox(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'nit'        => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'co_ingr'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => false)),
      'comentario' => new sfWidgetFormTextarea(),
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
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'juridico'   => new sfWidgetFormInputCheckbox(),
      'tipo_adi'   => new sfWidgetFormInputText(),
      'matriz'     => new sfWidgetFormInputText(),
      'co_tab'     => new sfWidgetFormInputText(),
      'tipo_per'   => new sfWidgetFormInputText(),
      'co_pais'    => new sfWidgetFormInputText(),
      'ciudad'     => new sfWidgetFormInputText(),
      'zip'        => new sfWidgetFormInputText(),
      'website'    => new sfWidgetFormInputText(),
      'formtype'   => new sfWidgetFormInputText(),
      'taxid'      => new sfWidgetFormInputText(),
      'contribu_e' => new sfWidgetFormInputCheckbox(),
      'porc_esp'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_prov'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_prov')), 'empty_value' => $this->getObject()->get('co_prov'), 'required' => false)),
      'prov_des'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_seg'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Segmento'), 'required' => false)),
      'co_zon'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zona'), 'required' => false)),
      'inactivo'   => new sfValidatorBoolean(array('required' => false)),
      'productos'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'direc1'     => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'direc2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fax'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'respons'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fecha_reg'  => new sfValidatorDateTime(array('required' => false)),
      'tipo'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPro'), 'required' => false)),
      'com_ult_co' => new sfValidatorInteger(array('required' => false)),
      'fec_ult_co' => new sfValidatorDateTime(array('required' => false)),
      'net_ult_co' => new sfValidatorNumber(array('required' => false)),
      'saldo'      => new sfValidatorNumber(array('required' => false)),
      'saldo_ini'  => new sfValidatorNumber(array('required' => false)),
      'mont_cre'   => new sfValidatorNumber(array('required' => false)),
      'plaz_pag'   => new sfValidatorInteger(array('required' => false)),
      'desc_ppago' => new sfValidatorNumber(array('required' => false)),
      'desc_glob'  => new sfValidatorNumber(array('required' => false)),
      'tipo_iva'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'iva'        => new sfValidatorNumber(array('required' => false)),
      'rif'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'nacional'   => new sfValidatorBoolean(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'nit'        => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_ingr'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'required' => false)),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'juridico'   => new sfValidatorBoolean(array('required' => false)),
      'tipo_adi'   => new sfValidatorNumber(array('required' => false)),
      'matriz'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'co_tab'     => new sfValidatorInteger(array('required' => false)),
      'tipo_per'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_pais'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'ciudad'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'zip'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'website'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'formtype'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'taxid'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'contribu_e' => new sfValidatorBoolean(array('required' => false)),
      'porc_esp'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prov';
  }

}
