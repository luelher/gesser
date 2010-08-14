  //////////////////////////////////////////////////
  // Cargar una imagen de espera al ejecutar Ajax //
  //////////////////////////////////////////////////

  // JavaScript Document
  /* Stack up window.onload events using this function from Simon Willison - http://www.sitepoint.com/blog-post-view.php?id=171578 */
/*
  function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
      window.onload = func;
    } else {
      window.onload = function() {
      oldonload();
      func();
      }
    }
  }

  Ajax.Responders.register({
    onCreate: function() {
      if($('notification') && Ajax.activeRequestCount > 0)
      Effect.Appear('notification',{duration: 0.25, queue: 'end'});
    },
    onComplete: function() {
      OcultarCargando()
    },

  });

  function OcultarCargando() {
      if($('notification') && Ajax.activeRequestCount > 0)
      Effect.Fade('notification',{duration: 0.25, queue: 'end'});
      try{ActualizarInputs()}catch(e){}
    }


  String.prototype.pad = function(l, s, t){
        return s || (s = " "), (l -= this.length) > 0 ? (s = new Array(Math.ceil(l / s.length)
    + 1).join(s)).substr(0, t = !t ? l : t == 1 ? 0 : Math.ceil(l / 2))
    + this + s.substr(0, l - t) : this;
         };
*/
  function AjaxJSON(request, json)
  {
    var nbElementsInResponse = json.length;
    for (var i = 0; i < nbElementsInResponse; i++)
    {
      //Completar con ceros la cantidad indicada a la izquierda
      if($(json[i][0])){
        if (json[i][2]=="c"){
          if (document.getElementById(json[i][0]).value!="")
          {
            valor=document.getElementById(json[i][0]).value;
            valor=valor.pad(json[i][1], "0",0);
            document.getElementById(json[i][0]).value=valor;
          }
        }
        else{
          document.getElementById(json[i][0]).value=json[i][1];
        }
      }
    }//for
    OcultarCargando();
  }