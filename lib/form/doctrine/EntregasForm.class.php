<?php

/**
 * Entregas form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EntregasForm extends BaseEntregasForm
{
  public function configure()
  {
    $format = 'd/m/Y';

    $this->setWidgets(array(
      'servicios_id' =>  $this->getObject()->get('id')=='' ? new sfWidgetFormCatalogData(array('table' => 'Servicios', 'field_index' => 'id', 'field_search' => 'cliente', 'field_description' => 'id'),array()) :   new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => false)),
      'observacion'  => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'servicios_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'required' => $this->getObject()->get('id')!='' ? false : true )),
      'observacion'  => new sfValidatorString(array('max_length' => 1000)),
      'fecha'        => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')),
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entregas[%s]');

    $this->setDefault('fecha',date('d/m/Y'));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

  }
}
