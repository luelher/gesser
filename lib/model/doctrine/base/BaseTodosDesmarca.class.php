<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TodosDesmarca', 'profit');

/**
 * BaseTodosDesmarca
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $tipo_docs
 * @property string $tipo_doc
 * @property integer $nro_doc
 * @property integer $automatico
 * @property timestamp $fecha_doc
 * @property timestamp $fecha_comp
 * @property integer $num_comp
 * 
 * @method integer       getId()         Returns the current record's "id" value
 * @method string        getTipoDocs()   Returns the current record's "tipo_docs" value
 * @method string        getTipoDoc()    Returns the current record's "tipo_doc" value
 * @method integer       getNroDoc()     Returns the current record's "nro_doc" value
 * @method integer       getAutomatico() Returns the current record's "automatico" value
 * @method timestamp     getFechaDoc()   Returns the current record's "fecha_doc" value
 * @method timestamp     getFechaComp()  Returns the current record's "fecha_comp" value
 * @method integer       getNumComp()    Returns the current record's "num_comp" value
 * @method TodosDesmarca setId()         Sets the current record's "id" value
 * @method TodosDesmarca setTipoDocs()   Sets the current record's "tipo_docs" value
 * @method TodosDesmarca setTipoDoc()    Sets the current record's "tipo_doc" value
 * @method TodosDesmarca setNroDoc()     Sets the current record's "nro_doc" value
 * @method TodosDesmarca setAutomatico() Sets the current record's "automatico" value
 * @method TodosDesmarca setFechaDoc()   Sets the current record's "fecha_doc" value
 * @method TodosDesmarca setFechaComp()  Sets the current record's "fecha_comp" value
 * @method TodosDesmarca setNumComp()    Sets the current record's "num_comp" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTodosDesmarca extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TodosDesmarca');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('tipo_docs', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('tipo_doc', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nro_doc', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('automatico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_doc', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('fecha_comp', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('num_comp', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}