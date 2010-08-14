<?php

class sfWidgetFormExtCatalogData extends sfWidgetForm
{
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
    $this->addOption('config', '{}');
    $this->addOption('culture', '');
    $this->addOption('text_widget', new sfWidgetFormInput());
    $this->addOption('style', '/sfExtCatalogDataPlugin/css/ext-all.css');

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

    $image = '';
    if (false !== $this->getOption('image'))
    {
      $image = sprintf(', buttonImage: "%s", buttonImageOnly: true', $this->getOption('image'));
    }

    return $this->getOption('text_widget')->render($name, $value, $attributes, $errors).
           $this->renderTag('input', array('type' => 'hidden', 'size' => 10, 'id' => $id = $this->generateId($name).'_id_jquery_control', 'disabled' => 'disabled')).
           $this->renderTag('input', array('type' => 'button', 'size' => 4, 'id' => $id_button = $this->generateId($name).'_button_jquery_control', 'value' => '...' )).
           $this->renderTag('input', array('type' => 'text', 'size' => 40, 'id' => $id_description = $this->generateId($name).'_description_jquery_control')).
           sprintf(<<<EOF

<link rel="stylesheet" type="text/css" href="/sfExtCatalogDataPlugin/css/ext-all.css">

<script type="text/javascript" src="/sfExtCatalogDataPlugin/js/ext-base.js"></script><!-- EXAMPLES -->
<script type="text/javascript" src="/sfExtCatalogDataPlugin/js/ext-all.js"></script><!-- EXAMPLES -->

<script type="text/javascript">
Ext.onReady(function(){
    var win;
    var button = Ext.get('%s');

    button.on('click', function(){
        // create the window on the first click and reuse on subsequent clicks
        if(!win){
            win = new Ext.Window({
                applyTo:'hello-win',
                layout:'fit',
                width:600,
                height:400,
                closeAction:'hide',
                plain: true,

                items: new Ext.TabPanel({
                    applyTo: 'hello-tabs',
                    autoTabs:true,
                    activeTab:0,
                    deferredRender:false,
                    border:false
                }),

                buttons: [{
                    text: 'Close',
                    handler: function(){
                        win.hide();
                    }
                }]
            });
        }
        win.show(this);
    });
});
</script>
<div id="hello-win" class="x-hidden">
    <div class="x-window-header">Catálogo de Datos</div>
    <div id="hello-tabs">
        <!-- Auto create tab 1 -->
        <div class="x-tab" title="Catalogo">
            <script type="text/javascript" src="/sfExtCatalogDataPlugin/js/paging.js"></script>
            <div id="topic-grid"></div>
        </div>
        <!-- Auto create tab 2 -->
        <div class="x-tab" title="Filtro">
            
        </div>
    </div>
</div>
EOF
, $id_button);
  }


  /*
   *
   * Gets the stylesheet paths associated with the widget.
   *
   * @return array An array of stylesheet paths
   */
  public function getStylesheets()
  {
    $style = $this->getOption('style');
    return array();
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavaScripts()
  {
    //check if jquery is loaded
    $js = array();

    //$js[] = '/sfExtCatalogDataPlugin/js/ext-base.js';
    //$js[] = '/sfExtCatalogDataPlugin/js/ext-all.js';

    return $js;
  }

}

?>