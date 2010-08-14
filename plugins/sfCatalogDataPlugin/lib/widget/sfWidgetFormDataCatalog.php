<?php

class sfWidgetFormCatalogData extends sfWidgetForm
{
  private $op = '{ }';

  /**
   * Configures the current widget.
   *
   * Available options:
   *
   *  * image:       The image path to represent the widget (false by default)
   *  * config:      A JavaScript array that configures the JQuery date widget
   *  * culture:     The user culture
   *  * text_widget: The date widget instance to use as a "base" class
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    $this->addOption('image', false);
    $this->addOption('table', '');
    $this->addOption('field_search', '');
    $this->addOption('field_index', '');
    $this->addOption('field_description', '');
    $this->addOption('config', '{}');
    $this->addOption('culture', '');

    parent::configure($options, $attributes);
  }

  /**
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $prefix = $this->generateId($name);

    $table= $this->getOption('table');
    $field_search = $this->getOption('field_search');
    $field_description = $this->getOption('field_description');
    $field_index = $this->getOption('field_index');

    if($value) $reg = Doctrine::getTable(ucfirst($table))->findOneBy($field_search, $value);
    else $reg = null;

    $id_description = $this->generateId($name).'_description_jquery_autocomplete_control';

    $this->op = "{ table: '$table', index: '$field_index', search: '$field_search', description: '$field_description', objdes: '$id_description' }";

    $autocompletewidget = new sfWidgetFormJQueryDataCatalogAutocompleter(array('url' => '../catalog/autocomplete', 'config' => $this->op));

    return $autocompletewidget->render($name, $value, $attributes, $errors).
           $this->renderTag('input', array('type' => 'text', 'size' => 40, 'id' => $id_description, 'value' => $reg ? $reg->$field_description : '' ));

  }

  /**
   * Gets the stylesheet paths associated with the widget.
   *
   * @return array An array of stylesheet paths
   */
  public function getStylesheets()
  {
    $dca = new sfWidgetFormJQueryDataCatalogAutocompleter(array('url' => '/catalog/autocomplete'));
    return $dca->getStylesheets();
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavascripts()
  {
    $dca = new sfWidgetFormJQueryDataCatalogAutocompleter(array('url' => '/catalog/autocomplete'));
    return $dca->getJavaScripts();
  }
}

?>