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

  $("#previous").click(function(){
    if($("#page")[0].value!='1'){
      $("#page")[0].value = parseInt($("#page")[0].value)-1;
    }
    $("#formulario").submit();
  });

  $("#next").click(function(){
    $("#page")[0].value = parseInt($("#page")[0].value)+1;
    $("#formulario").submit();
  });


});