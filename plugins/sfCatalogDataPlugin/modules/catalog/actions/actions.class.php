<?php

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class catalogActions extends sfActions
{
  public function executeData(sfRequest $request) {

    $xx = '';

  }


  public function executeAutocomplete(sfRequest $request) {

    $q = $request->getParameter('q');
    $class = $request->getParameter('table','Clientes');
    $search = $request->getParameter('search', 'co_cli');
    $description = $request->getParameter('description', 'cli_des');
    $index = $request->getParameter('index','');

    

    $values = array();

    // Programar busqueda de datos por $q
    if($q!=''){

      $query = Doctrine_Query::create()->select("c.$search, c.$description")->from("$class c")->where("$search LIKE ?", $q.'%')->limit(20);

      $objs = $query->execute();

      if($objs){
        foreach($objs as $i => $obj){
          $values[ $index!='' ? trim($obj->$index) : $i ] = trim($obj->$search).' - '.trim($obj->$description);
        }
      }

    }
    //print_r($values);
    $this->data = array('json' => $values);

  }
}
