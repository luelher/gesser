$(document).ready(function()
{
  $('#autocomplete_servicios_cliente').blur(function()
  {
      $('.sf_admin_form_field_factura').load(
        $(this).parents('form').attr('action')+'/ajaxFacturas',
        {value: this.value},
        function(){

          $('#servicios_factura').change(function()
          {
              $('.sf_admin_form_field_articulo').load(
                $(this).parents('form').attr('action')+'/ajaxArticulos',
                {value: this.value}
              );
          });

        }
      );
  });

});