$(document).ready(function()
{
  agregar_articulo = function(btn, loader, val)
  {
    $('#'+btn).hide();$('#'+loader).show();
    $('#arts').load(
      'agregar',
      { co_art: val },
      function() { $('#'+loader).hide();$('#'+btn).show() }
    );
  };
});