<?php

/**
 * RengCie form base class.
 *
 * @method RengCie getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengCieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ent_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'add_empty' => false)),
      'total_art'  => new sfWidgetFormInputText(),
      'co_uni'     => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'stotal_art' => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'numcom'     => new sfWidgetFormInputText(),
      'feccom'     => new sfWidgetFormDateTime(),
      'total_uni'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ent_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ent_num')), 'empty_value' => $this->getObject()->get('ent_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Art'), 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'co_uni'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'numcom'     => new sfValidatorInteger(array('required' => false)),
      'feccom'     => new sfValidatorDateTime(array('required' => false)),
      'total_uni'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_cie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCie';
  }

}
