<?php
class siempreEnEspanolFilter extends sfFilter 
{
  public function execute($filterChain)
  {
    // Execute this filter only once
    if ($this->isFirstCall())
    {
      $this->getContext()->getUser()->setCulture('es');
    }
    // Execute next filter
    $filterChain->execute();
  }
}