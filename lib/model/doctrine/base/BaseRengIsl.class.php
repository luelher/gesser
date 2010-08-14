<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengIsl', 'profit');

/**
 * BaseRengIsl
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tipo_doc
 * @property integer $doc_num
 * @property integer $reng_num
 * @property integer $fact_num
 * @property string $co_islr
 * @property decimal $monto_obj
 * @property decimal $monto_reten
 * @property decimal $sustraen
 * @property decimal $porc_retn
 * @property string $rowguid
 * @property ConIslr $ConIslr
 * 
 * @method string  getTipoDoc()     Returns the current record's "tipo_doc" value
 * @method integer getDocNum()      Returns the current record's "doc_num" value
 * @method integer getRengNum()     Returns the current record's "reng_num" value
 * @method integer getFactNum()     Returns the current record's "fact_num" value
 * @method string  getCoIslr()      Returns the current record's "co_islr" value
 * @method decimal getMontoObj()    Returns the current record's "monto_obj" value
 * @method decimal getMontoReten()  Returns the current record's "monto_reten" value
 * @method decimal getSustraen()    Returns the current record's "sustraen" value
 * @method decimal getPorcRetn()    Returns the current record's "porc_retn" value
 * @method string  getRowguid()     Returns the current record's "rowguid" value
 * @method ConIslr getConIslr()     Returns the current record's "ConIslr" value
 * @method RengIsl setTipoDoc()     Sets the current record's "tipo_doc" value
 * @method RengIsl setDocNum()      Sets the current record's "doc_num" value
 * @method RengIsl setRengNum()     Sets the current record's "reng_num" value
 * @method RengIsl setFactNum()     Sets the current record's "fact_num" value
 * @method RengIsl setCoIslr()      Sets the current record's "co_islr" value
 * @method RengIsl setMontoObj()    Sets the current record's "monto_obj" value
 * @method RengIsl setMontoReten()  Sets the current record's "monto_reten" value
 * @method RengIsl setSustraen()    Sets the current record's "sustraen" value
 * @method RengIsl setPorcRetn()    Sets the current record's "porc_retn" value
 * @method RengIsl setRowguid()     Sets the current record's "rowguid" value
 * @method RengIsl setConIslr()     Sets the current record's "ConIslr" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengIsl extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_isl');
        $this->hasColumn('tipo_doc', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('doc_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reng_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fact_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('co_islr', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('monto_obj', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('monto_reten', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sustraen', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('porc_retn', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('rowguid', 'string', 36, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(newid())',
             'primary' => false,
             'autoincrement' => false,
             'length' => 36,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ConIslr', array(
             'local' => 'co_islr',
             'foreign' => 'co_islr'));
    }
}