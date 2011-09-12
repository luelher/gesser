<?php
class BootstrapResultadosWidgetFormSchemaFormatterCustom extends sfWidgetFormSchemaFormatter
{

  protected
    $rowFormat       = "<div class=\"%class%\">
  %label%
  <div class=\"input\"> %error%%field%%help%%hidden_fields%</div>
</div>
",
    $helpFormat      = '<span class="help-inline">%help%</span>',
    $errorRowFormat  = "<div class=\"clearfix error\">
  %label%
  <div class=\"input\"> %error%%field%%help%%hidden_fields%</div>
</div>
",
    $errorListFormatInARow     = "  <ul class=\"error_list\">
%errors%  </ul>
",
    $errorRowFormatInARow      = "    <li>%error%</li>
",
    $namedErrorRowFormatInARow = "    <li>%name%: %error%</li>
",
    $decoratorFormat = "<div class=\"clearfix\>
  %content%</div>";
}

?>
