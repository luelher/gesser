<?php

/**
 * Dmc form base class.
 *
 * @method Dmc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDmcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dmc_num'  => new sfWidgetFormInputHidden(),
      'tipo_dmc' => new sfWidgetFormInputText(),
      'fec_emis' => new sfWidgetFormDateTime(),
      'co_ag_im' => new sfWidgetFormInputText(),
      'co_ag_ex' => new sfWidgetFormInputText(),
      'co_ent_a' => new sfWidgetFormInputText(),
      'co_sal_d' => new sfWidgetFormInputText(),
      'co_trans' => new sfWidgetFormInputText(),
      'guia_emb' => new sfWidgetFormInputText(),
      'fact_num' => new sfWidgetFormInputText(),
      'fec_fact' => new sfWidgetFormDateTime(),
      'co_trasb' => new sfWidgetFormInputText(),
      'reg_num'  => new sfWidgetFormInputText(),
      'co_pais'  => new sfWidgetFormInputText(),
      'co_pto'   => new sfWidgetFormInputText(),
      'co_pa_od' => new sfWidgetFormInputText(),
      'co_pt_od' => new sfWidgetFormInputText(),
      'co_pt_tr' => new sfWidgetFormInputText(),
      'co_pt_en' => new sfWidgetFormInputText(),
      'co_pt_sa' => new sfWidgetFormInputText(),
      'co_dest'  => new sfWidgetFormInputText(),
      'co_dr_de' => new sfWidgetFormInputText(),
      'co_em'    => new sfWidgetFormInputText(),
      'co_dr_em' => new sfWidgetFormInputText(),
      'tot_fob'  => new sfWidgetFormInputText(),
      'tot_flet' => new sfWidgetFormInputText(),
      'tot_seg'  => new sfWidgetFormInputText(),
      'tot_gast' => new sfWidgetFormInputText(),
      'tot_cif'  => new sfWidgetFormInputText(),
      'itbms'    => new sfWidgetFormInputText(),
      'des_rec'  => new sfWidgetFormInputText(),
      'status'   => new sfWidgetFormInputText(),
      'anulada'  => new sfWidgetFormInputCheckbox(),
      'impresa'  => new sfWidgetFormInputCheckbox(),
      'tipo_doc' => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'revisado' => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'dmc_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dmc_num')), 'empty_value' => $this->getObject()->get('dmc_num'), 'required' => false)),
      'tipo_dmc' => new sfValidatorInteger(array('required' => false)),
      'fec_emis' => new sfValidatorDateTime(array('required' => false)),
      'co_ag_im' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_ag_ex' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_ent_a' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_sal_d' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_trans' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'guia_emb' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fact_num' => new sfValidatorInteger(array('required' => false)),
      'fec_fact' => new sfValidatorDateTime(array('required' => false)),
      'co_trasb' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'reg_num'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'co_pais'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'co_pto'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'co_pa_od' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_pt_od' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_pt_tr' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_pt_en' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_pt_sa' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_dest'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_dr_de' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_em'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_dr_em' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'tot_fob'  => new sfValidatorNumber(array('required' => false)),
      'tot_flet' => new sfValidatorNumber(array('required' => false)),
      'tot_seg'  => new sfValidatorNumber(array('required' => false)),
      'tot_gast' => new sfValidatorNumber(array('required' => false)),
      'tot_cif'  => new sfValidatorNumber(array('required' => false)),
      'itbms'    => new sfValidatorNumber(array('required' => false)),
      'des_rec'  => new sfValidatorNumber(array('required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'anulada'  => new sfValidatorBoolean(array('required' => false)),
      'impresa'  => new sfValidatorBoolean(array('required' => false)),
      'tipo_doc' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dmc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dmc';
  }

}
