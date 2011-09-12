<?php
class BootstrapCalculadoraWidgetFormSchemaFormatterCustom extends sfWidgetFormSchemaFormatter
{

  protected
    $rowFormat       = "%error% <div class=\"clearfix\">
   %label%
  <div class=\"input\"> %field%%help%%hidden_fields%</div>
</div>
",
    $helpFormat      = '<span class="help-inline">%help%</span>',
    $errorListFormatInARow     = "  <div class=\"alert-message error\">
<p> %errors% </p>  </div>
",
    $errorRowFormatInARow      = "  %error% ",
    $namedErrorRowFormatInARow = "<p>%name%: %error%</p>",
    $decoratorFormat = "<div class=\"clearfix\>
  %content%</div>";
}

?>