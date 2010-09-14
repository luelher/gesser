<?php

/**
 * Acciones filter form.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AccionesFormFilter extends BaseAccionesFormFilter
{
  public function configure()
  {
    $this->setWidgets(array(
      'servicios_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => true)),
      'accion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')), 'to_date' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%')), 'with_empty' => false, 'template' => 'Desde %from_date% <br > Hasta %to_date%')),
    ));

    $this->setValidators(array(
      'servicios_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Servicio'), 'column' => 'id')),
      'accion'       => new sfValidatorPass(array('required' => false)),
      'fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('acciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();
  }
}
