<?php
// auto-generated by sfViewConfigHandler
// date: 2010/08/13 23:42:14
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'template' ? false : 'template'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Gestion de Servicios al Cliente', false, false);
  $response->addMeta('description', 'Gestion de Servicios al Cliente', false, false);
  $response->addMeta('keywords', 'Gestion, Servicios, Cliente, Agencia, Royal', false, false);
  $response->addMeta('language', 'es_VE', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('default.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addJavascript('/sfJQueryUIPlugin/js/jquery-1.3.1.min.js', '', array ());


