<?php

/**
 * acciones module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage acciones
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAccionesGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array(  '_list' => NULL,  '_delete' => NULL,  '_save' => NULL,);
  }

  public function getListObjectActions()
  {
    return array(  '_delete' => NULL,  '_edit' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%=nombre%% - %%accion%% - %%fecha%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Acciones';
  }

  public function getEditTitle()
  {
    return 'Edición de Acciones';
  }

  public function getNewTitle()
  {
    return 'Nueva Acción';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'servicios_id',  1 => 'accion',  2 => 'fecha',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  'Cliente' =>   array(    0 => 'servicios_id',  ),  'Acción' =>   array(    0 => 'accion',    1 => 'fecha',  ),);
  }

  public function getNewDisplay()
  {
    return array(  'Cliente' =>   array(    0 => 'servicios_id',  ),  'Acción' =>   array(    0 => 'accion',    1 => 'fecha',  ),);
  }

  public function getListDisplay()
  {
    return array(  0 => '=nombre',  1 => 'accion',  2 => 'fecha',);
  }

  public function getFieldsDefault()
  {
    return array(
      'servicios_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Cliente',),
      'accion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Acción',  'attributes' =>   array(    'cols' => 60,    'rows' => 6,  ),),
      'fecha' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha',  'params' => 'date_format=\'d/M/y\'',),
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nro. Acción',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'servicios_id' => array(),
      'accion' => array(),
      'fecha' => array(  'params' => 'date_format=\'d/M/y\'',),
      'id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'servicios_id' => array(),
      'accion' => array(),
      'fecha' => array(),
      'id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'servicios_id' => array(),
      'accion' => array(),
      'fecha' => array(),
      'id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'servicios_id' => array(  'attributes' =>   array(    'disabled' => true,  ),),
      'accion' => array(),
      'fecha' => array(  'params' => 'date_format=\'d/M/y\'',),
      'id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'servicios_id' => array(),
      'accion' => array(),
      'fecha' => array(),
      'id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'AccionesForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'AccionesFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
