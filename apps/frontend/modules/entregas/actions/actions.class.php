<?php

require_once dirname(__FILE__).'/../lib/entregasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/entregasGeneratorHelper.class.php';

/**
 * entregas actions.
 *
 * @package    sf_sandbox
 * @subpackage entregas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class entregasActions extends autoEntregasActions
{
  public function executeNotaEntrega(sfWebRequest $request)
  {
    $this->forward('informenes', 'notaEntrega');
  }
}
