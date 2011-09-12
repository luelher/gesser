<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class InventarioForm extends BaseArtForm
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'     => new sfWidgetFormInputText(array('label' => 'Código Artículo')),
      'art_des'    => new sfWidgetFormInputText(array('label' => 'Descripción Artículo')),
      'co_lin'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LinArt'), 'add_empty' => true, 'label' => 'Línea')),
      'co_cat'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CatArt'), 'add_empty' => true, 'label' => 'Categoría')),
      'co_subl'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubLin_4'), 'add_empty' => true, 'label' => 'Tipo')),
    ));

    $this->setValidators(array(
      'co_art'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'art_des'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'co_lin'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LinArt'), 'required' => false)),
      'co_cat'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CatArt'), 'required' => false)),
      'co_subl'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SubLin_4'), 'required' => false)),
    ));

    $this->setDefault('art_des', '');

    $this->widgetSchema->setNameFormat('art[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);


    $this->setupInheritance();


  	$decorator = new BootstrapCalculadoraWidgetFormSchemaFormatterCustom($this->getWidgetSchema());
  	$this->widgetSchema->addFormFormatter('custom', $decorator);
  	$this->widgetSchema->setFormFormatterName('custom');
  }

}

?>
