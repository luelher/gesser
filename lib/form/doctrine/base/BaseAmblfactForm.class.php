<?php

/**
 * Amblfact form base class.
 *
 * @method Amblfact getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmblfactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'amb_usua'     => new sfWidgetFormInputHidden(),
      'amb_blfa'     => new sfWidgetFormInputHidden(),
      'fact_num'     => new sfWidgetFormInputCheckbox(),
      'contrib'      => new sfWidgetFormInputCheckbox(),
      'descrip'      => new sfWidgetFormInputCheckbox(),
      'fec_emis'     => new sfWidgetFormInputCheckbox(),
      'fec_venc'     => new sfWidgetFormInputCheckbox(),
      'vco_cli'      => new sfWidgetFormInputText(),
      'dco_cli'      => new sfWidgetFormInputCheckbox(),
      'co_cli'       => new sfWidgetFormInputCheckbox(),
      'vco_ven'      => new sfWidgetFormInputText(),
      'dco_ven'      => new sfWidgetFormInputCheckbox(),
      'co_ven'       => new sfWidgetFormInputCheckbox(),
      'vco_tran'     => new sfWidgetFormInputText(),
      'dco_tran'     => new sfWidgetFormInputCheckbox(),
      'co_tran'      => new sfWidgetFormInputCheckbox(),
      'vforma_pag'   => new sfWidgetFormInputText(),
      'dforma_pag'   => new sfWidgetFormInputCheckbox(),
      'forma_pag'    => new sfWidgetFormInputCheckbox(),
      'vmoneda'      => new sfWidgetFormInputText(),
      'dmoneda'      => new sfWidgetFormInputCheckbox(),
      'moneda'       => new sfWidgetFormInputCheckbox(),
      'monto_adi'    => new sfWidgetFormInputCheckbox(),
      'com_relac'    => new sfWidgetFormInputCheckbox(),
      'porc_gdesc'   => new sfWidgetFormInputCheckbox(),
      'porc_reca'    => new sfWidgetFormInputCheckbox(),
      'tot_flete'    => new sfWidgetFormInputCheckbox(),
      'stock_neg'    => new sfWidgetFormInputCheckbox(),
      'cobrar_aut'   => new sfWidgetFormInputCheckbox(),
      'num_listar'   => new sfWidgetFormInputText(),
      'listar'       => new sfWidgetFormInputText(),
      'pstock_neg'   => new sfWidgetFormInputCheckbox(),
      'pc1'          => new sfWidgetFormInputCheckbox(),
      'pc2'          => new sfWidgetFormInputCheckbox(),
      'pc3'          => new sfWidgetFormInputCheckbox(),
      'pc4'          => new sfWidgetFormInputCheckbox(),
      'pc5'          => new sfWidgetFormInputCheckbox(),
      'saldo'        => new sfWidgetFormInputCheckbox(),
      'fvenc'        => new sfWidgetFormInputCheckbox(),
      'chdev'        => new sfWidgetFormInputCheckbox(),
      'numcopia'     => new sfWidgetFormInputText(),
      'vreng_4'      => new sfWidgetFormInputText(),
      'dreng_4'      => new sfWidgetFormInputCheckbox(),
      'vsucursal'    => new sfWidgetFormInputText(),
      'vreng_3'      => new sfWidgetFormInputText(),
      'dreng_3'      => new sfWidgetFormInputCheckbox(),
      'reng_3'       => new sfWidgetFormInputCheckbox(),
      'reng_4'       => new sfWidgetFormInputCheckbox(),
      'reng_5'       => new sfWidgetFormInputCheckbox(),
      'reng_6'       => new sfWidgetFormInputCheckbox(),
      'reng_7'       => new sfWidgetFormInputCheckbox(),
      'reng_8'       => new sfWidgetFormInputCheckbox(),
      'reng_9'       => new sfWidgetFormInputCheckbox(),
      'reng_10'      => new sfWidgetFormInputCheckbox(),
      'b_cobrar'     => new sfWidgetFormInputCheckbox(),
      'b_importar'   => new sfWidgetFormInputCheckbox(),
      'b_anular'     => new sfWidgetFormInputCheckbox(),
      'b_seriales'   => new sfWidgetFormInputCheckbox(),
      'b_notas'      => new sfWidgetFormInputCheckbox(),
      'b_margen'     => new sfWidgetFormInputCheckbox(),
      'p_margen'     => new sfWidgetFormInputText(),
      'b_clien'      => new sfWidgetFormInputCheckbox(),
      'b_fact'       => new sfWidgetFormInputCheckbox(),
      'tamcol01'     => new sfWidgetFormInputText(),
      'tamcol02'     => new sfWidgetFormInputText(),
      'tamcol03'     => new sfWidgetFormInputText(),
      'tamcol04'     => new sfWidgetFormInputText(),
      'tamcol05'     => new sfWidgetFormInputText(),
      'tamcol06'     => new sfWidgetFormInputText(),
      'tamcol07'     => new sfWidgetFormInputText(),
      'tamcol08'     => new sfWidgetFormInputText(),
      'tamcol09'     => new sfWidgetFormInputText(),
      'tamcol10'     => new sfWidgetFormInputText(),
      'tamcol11'     => new sfWidgetFormInputText(),
      'tamcol12'     => new sfWidgetFormInputText(),
      'tamcol13'     => new sfWidgetFormInputText(),
      'tamcol14'     => new sfWidgetFormInputText(),
      'tamcol15'     => new sfWidgetFormInputText(),
      'tamcol16'     => new sfWidgetFormInputText(),
      'tamcol17'     => new sfWidgetFormInputText(),
      'tamcol18'     => new sfWidgetFormInputText(),
      'tamcol19'     => new sfWidgetFormInputText(),
      'tamcol20'     => new sfWidgetFormInputText(),
      'poscol01'     => new sfWidgetFormInputText(),
      'poscol02'     => new sfWidgetFormInputText(),
      'poscol03'     => new sfWidgetFormInputText(),
      'poscol04'     => new sfWidgetFormInputText(),
      'poscol05'     => new sfWidgetFormInputText(),
      'poscol06'     => new sfWidgetFormInputText(),
      'poscol07'     => new sfWidgetFormInputText(),
      'poscol08'     => new sfWidgetFormInputText(),
      'poscol09'     => new sfWidgetFormInputText(),
      'poscol10'     => new sfWidgetFormInputText(),
      'poscol11'     => new sfWidgetFormInputText(),
      'poscol12'     => new sfWidgetFormInputText(),
      'poscol13'     => new sfWidgetFormInputText(),
      'poscol14'     => new sfWidgetFormInputText(),
      'poscol15'     => new sfWidgetFormInputText(),
      'poscol16'     => new sfWidgetFormInputText(),
      'poscol17'     => new sfWidgetFormInputText(),
      'poscol18'     => new sfWidgetFormInputText(),
      'poscol19'     => new sfWidgetFormInputText(),
      'poscol20'     => new sfWidgetFormInputText(),
      'campo1'       => new sfWidgetFormInputText(),
      'campo2'       => new sfWidgetFormInputText(),
      'campo3'       => new sfWidgetFormInputText(),
      'campo4'       => new sfWidgetFormInputText(),
      'campo5'       => new sfWidgetFormInputText(),
      'campo6'       => new sfWidgetFormInputText(),
      'campo7'       => new sfWidgetFormInputText(),
      'campo8'       => new sfWidgetFormInputText(),
      'co_us_in'     => new sfWidgetFormInputText(),
      'fe_us_in'     => new sfWidgetFormDateTime(),
      'co_us_mo'     => new sfWidgetFormInputText(),
      'fe_us_mo'     => new sfWidgetFormDateTime(),
      'co_us_el'     => new sfWidgetFormInputText(),
      'fe_us_el'     => new sfWidgetFormDateTime(),
      'revisado'     => new sfWidgetFormInputText(),
      'trasnfe'      => new sfWidgetFormInputText(),
      'p_para1'      => new sfWidgetFormInputCheckbox(),
      'p_para2'      => new sfWidgetFormInputCheckbox(),
      'p_para3'      => new sfWidgetFormInputCheckbox(),
      'p_para4'      => new sfWidgetFormInputCheckbox(),
      'p_para5'      => new sfWidgetFormInputCheckbox(),
      'p_para6'      => new sfWidgetFormInputCheckbox(),
      'p_para7'      => new sfWidgetFormInputCheckbox(),
      'p_para8'      => new sfWidgetFormInputCheckbox(),
      'p_para9'      => new sfWidgetFormInputCheckbox(),
      'p_para10'     => new sfWidgetFormInputCheckbox(),
      'co_sucu'      => new sfWidgetFormInputText(),
      'rowguid'      => new sfWidgetFormInputText(),
      'b_reactivar'  => new sfWidgetFormInputCheckbox(),
      'p_dev_reng'   => new sfWidgetFormInputCheckbox(),
      'b_art'        => new sfWidgetFormInputCheckbox(),
      'b_devdinero'  => new sfWidgetFormInputCheckbox(),
      'b_revdinero'  => new sfWidgetFormInputCheckbox(),
      'p_lotefec'    => new sfWidgetFormInputCheckbox(),
      'pcontrol_1'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_2'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_3'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_4'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_5'   => new sfWidgetFormInputCheckbox(),
      'serie'        => new sfWidgetFormInputText(),
      'pcontrol_6'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_7'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_8'   => new sfWidgetFormInputCheckbox(),
      'pcontrol_9'   => new sfWidgetFormInputCheckbox(),
      'tax'          => new sfWidgetFormInputCheckbox(),
      'vtax'         => new sfWidgetFormInputText(),
      'dtax'         => new sfWidgetFormInputCheckbox(),
      'numcontrol'   => new sfWidgetFormInputCheckbox(),
      'serial_lleno' => new sfWidgetFormInputCheckbox(),
      'pimpfac'      => new sfWidgetFormInputCheckbox(),
      'actforma'     => new sfWidgetFormInputCheckbox(),
      'formapag'     => new sfWidgetFormInputText(),
      'man_impr'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'amb_usua'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_usua')), 'empty_value' => $this->getObject()->get('amb_usua'), 'required' => false)),
      'amb_blfa'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_blfa')), 'empty_value' => $this->getObject()->get('amb_blfa'), 'required' => false)),
      'fact_num'     => new sfValidatorBoolean(array('required' => false)),
      'contrib'      => new sfValidatorBoolean(array('required' => false)),
      'descrip'      => new sfValidatorBoolean(array('required' => false)),
      'fec_emis'     => new sfValidatorBoolean(array('required' => false)),
      'fec_venc'     => new sfValidatorBoolean(array('required' => false)),
      'vco_cli'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dco_cli'      => new sfValidatorBoolean(array('required' => false)),
      'co_cli'       => new sfValidatorBoolean(array('required' => false)),
      'vco_ven'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dco_ven'      => new sfValidatorBoolean(array('required' => false)),
      'co_ven'       => new sfValidatorBoolean(array('required' => false)),
      'vco_tran'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dco_tran'     => new sfValidatorBoolean(array('required' => false)),
      'co_tran'      => new sfValidatorBoolean(array('required' => false)),
      'vforma_pag'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dforma_pag'   => new sfValidatorBoolean(array('required' => false)),
      'forma_pag'    => new sfValidatorBoolean(array('required' => false)),
      'vmoneda'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dmoneda'      => new sfValidatorBoolean(array('required' => false)),
      'moneda'       => new sfValidatorBoolean(array('required' => false)),
      'monto_adi'    => new sfValidatorBoolean(array('required' => false)),
      'com_relac'    => new sfValidatorBoolean(array('required' => false)),
      'porc_gdesc'   => new sfValidatorBoolean(array('required' => false)),
      'porc_reca'    => new sfValidatorBoolean(array('required' => false)),
      'tot_flete'    => new sfValidatorBoolean(array('required' => false)),
      'stock_neg'    => new sfValidatorBoolean(array('required' => false)),
      'cobrar_aut'   => new sfValidatorBoolean(array('required' => false)),
      'num_listar'   => new sfValidatorInteger(array('required' => false)),
      'listar'       => new sfValidatorInteger(array('required' => false)),
      'pstock_neg'   => new sfValidatorBoolean(array('required' => false)),
      'pc1'          => new sfValidatorBoolean(array('required' => false)),
      'pc2'          => new sfValidatorBoolean(array('required' => false)),
      'pc3'          => new sfValidatorBoolean(array('required' => false)),
      'pc4'          => new sfValidatorBoolean(array('required' => false)),
      'pc5'          => new sfValidatorBoolean(array('required' => false)),
      'saldo'        => new sfValidatorBoolean(array('required' => false)),
      'fvenc'        => new sfValidatorBoolean(array('required' => false)),
      'chdev'        => new sfValidatorBoolean(array('required' => false)),
      'numcopia'     => new sfValidatorInteger(array('required' => false)),
      'vreng_4'      => new sfValidatorNumber(array('required' => false)),
      'dreng_4'      => new sfValidatorBoolean(array('required' => false)),
      'vsucursal'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'vreng_3'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dreng_3'      => new sfValidatorBoolean(array('required' => false)),
      'reng_3'       => new sfValidatorBoolean(array('required' => false)),
      'reng_4'       => new sfValidatorBoolean(array('required' => false)),
      'reng_5'       => new sfValidatorBoolean(array('required' => false)),
      'reng_6'       => new sfValidatorBoolean(array('required' => false)),
      'reng_7'       => new sfValidatorBoolean(array('required' => false)),
      'reng_8'       => new sfValidatorBoolean(array('required' => false)),
      'reng_9'       => new sfValidatorBoolean(array('required' => false)),
      'reng_10'      => new sfValidatorBoolean(array('required' => false)),
      'b_cobrar'     => new sfValidatorBoolean(array('required' => false)),
      'b_importar'   => new sfValidatorBoolean(array('required' => false)),
      'b_anular'     => new sfValidatorBoolean(array('required' => false)),
      'b_seriales'   => new sfValidatorBoolean(array('required' => false)),
      'b_notas'      => new sfValidatorBoolean(array('required' => false)),
      'b_margen'     => new sfValidatorBoolean(array('required' => false)),
      'p_margen'     => new sfValidatorInteger(array('required' => false)),
      'b_clien'      => new sfValidatorBoolean(array('required' => false)),
      'b_fact'       => new sfValidatorBoolean(array('required' => false)),
      'tamcol01'     => new sfValidatorInteger(array('required' => false)),
      'tamcol02'     => new sfValidatorInteger(array('required' => false)),
      'tamcol03'     => new sfValidatorInteger(array('required' => false)),
      'tamcol04'     => new sfValidatorInteger(array('required' => false)),
      'tamcol05'     => new sfValidatorInteger(array('required' => false)),
      'tamcol06'     => new sfValidatorInteger(array('required' => false)),
      'tamcol07'     => new sfValidatorInteger(array('required' => false)),
      'tamcol08'     => new sfValidatorInteger(array('required' => false)),
      'tamcol09'     => new sfValidatorInteger(array('required' => false)),
      'tamcol10'     => new sfValidatorInteger(array('required' => false)),
      'tamcol11'     => new sfValidatorInteger(array('required' => false)),
      'tamcol12'     => new sfValidatorInteger(array('required' => false)),
      'tamcol13'     => new sfValidatorInteger(array('required' => false)),
      'tamcol14'     => new sfValidatorInteger(array('required' => false)),
      'tamcol15'     => new sfValidatorInteger(array('required' => false)),
      'tamcol16'     => new sfValidatorInteger(array('required' => false)),
      'tamcol17'     => new sfValidatorInteger(array('required' => false)),
      'tamcol18'     => new sfValidatorInteger(array('required' => false)),
      'tamcol19'     => new sfValidatorInteger(array('required' => false)),
      'tamcol20'     => new sfValidatorInteger(array('required' => false)),
      'poscol01'     => new sfValidatorInteger(array('required' => false)),
      'poscol02'     => new sfValidatorInteger(array('required' => false)),
      'poscol03'     => new sfValidatorInteger(array('required' => false)),
      'poscol04'     => new sfValidatorInteger(array('required' => false)),
      'poscol05'     => new sfValidatorInteger(array('required' => false)),
      'poscol06'     => new sfValidatorInteger(array('required' => false)),
      'poscol07'     => new sfValidatorInteger(array('required' => false)),
      'poscol08'     => new sfValidatorInteger(array('required' => false)),
      'poscol09'     => new sfValidatorInteger(array('required' => false)),
      'poscol10'     => new sfValidatorInteger(array('required' => false)),
      'poscol11'     => new sfValidatorInteger(array('required' => false)),
      'poscol12'     => new sfValidatorInteger(array('required' => false)),
      'poscol13'     => new sfValidatorInteger(array('required' => false)),
      'poscol14'     => new sfValidatorInteger(array('required' => false)),
      'poscol15'     => new sfValidatorInteger(array('required' => false)),
      'poscol16'     => new sfValidatorInteger(array('required' => false)),
      'poscol17'     => new sfValidatorInteger(array('required' => false)),
      'poscol18'     => new sfValidatorInteger(array('required' => false)),
      'poscol19'     => new sfValidatorInteger(array('required' => false)),
      'poscol20'     => new sfValidatorInteger(array('required' => false)),
      'campo1'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'     => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'     => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'     => new sfValidatorDateTime(array('required' => false)),
      'revisado'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'p_para1'      => new sfValidatorBoolean(array('required' => false)),
      'p_para2'      => new sfValidatorBoolean(array('required' => false)),
      'p_para3'      => new sfValidatorBoolean(array('required' => false)),
      'p_para4'      => new sfValidatorBoolean(array('required' => false)),
      'p_para5'      => new sfValidatorBoolean(array('required' => false)),
      'p_para6'      => new sfValidatorBoolean(array('required' => false)),
      'p_para7'      => new sfValidatorBoolean(array('required' => false)),
      'p_para8'      => new sfValidatorBoolean(array('required' => false)),
      'p_para9'      => new sfValidatorBoolean(array('required' => false)),
      'p_para10'     => new sfValidatorBoolean(array('required' => false)),
      'co_sucu'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'      => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'b_reactivar'  => new sfValidatorBoolean(array('required' => false)),
      'p_dev_reng'   => new sfValidatorBoolean(array('required' => false)),
      'b_art'        => new sfValidatorBoolean(array('required' => false)),
      'b_devdinero'  => new sfValidatorBoolean(array('required' => false)),
      'b_revdinero'  => new sfValidatorBoolean(array('required' => false)),
      'p_lotefec'    => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_1'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_2'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_3'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_4'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_5'   => new sfValidatorBoolean(array('required' => false)),
      'serie'        => new sfValidatorInteger(array('required' => false)),
      'pcontrol_6'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_7'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_8'   => new sfValidatorBoolean(array('required' => false)),
      'pcontrol_9'   => new sfValidatorBoolean(array('required' => false)),
      'tax'          => new sfValidatorBoolean(array('required' => false)),
      'vtax'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dtax'         => new sfValidatorBoolean(array('required' => false)),
      'numcontrol'   => new sfValidatorBoolean(array('required' => false)),
      'serial_lleno' => new sfValidatorBoolean(array('required' => false)),
      'pimpfac'      => new sfValidatorBoolean(array('required' => false)),
      'actforma'     => new sfValidatorBoolean(array('required' => false)),
      'formapag'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'man_impr'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('amblfact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Amblfact';
  }

}
