<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengDoc', 'profit');

/**
 * BaseRengDoc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $exp_num
 * @property integer $reng_num
 * @property string $tipo_doc
 * @property string $num_doc
 * @property timestamp $fecha
 * @property boolean $doc_cop
 * @property string $doc_com
 * @property string $rowguid
 * @property ExpImp $ExpImp
 * 
 * @method integer   getExpNum()   Returns the current record's "exp_num" value
 * @method integer   getRengNum()  Returns the current record's "reng_num" value
 * @method string    getTipoDoc()  Returns the current record's "tipo_doc" value
 * @method string    getNumDoc()   Returns the current record's "num_doc" value
 * @method timestamp getFecha()    Returns the current record's "fecha" value
 * @method boolean   getDocCop()   Returns the current record's "doc_cop" value
 * @method string    getDocCom()   Returns the current record's "doc_com" value
 * @method string    getRowguid()  Returns the current record's "rowguid" value
 * @method ExpImp    getExpImp()   Returns the current record's "ExpImp" value
 * @method RengDoc   setExpNum()   Sets the current record's "exp_num" value
 * @method RengDoc   setRengNum()  Sets the current record's "reng_num" value
 * @method RengDoc   setTipoDoc()  Sets the current record's "tipo_doc" value
 * @method RengDoc   setNumDoc()   Sets the current record's "num_doc" value
 * @method RengDoc   setFecha()    Sets the current record's "fecha" value
 * @method RengDoc   setDocCop()   Sets the current record's "doc_cop" value
 * @method RengDoc   setDocCom()   Sets the current record's "doc_com" value
 * @method RengDoc   setRowguid()  Sets the current record's "rowguid" value
 * @method RengDoc   setExpImp()   Sets the current record's "ExpImp" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengDoc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_doc');
        $this->hasColumn('exp_num', 'integer', 4, array(
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
        $this->hasColumn('tipo_doc', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 254,
             ));
        $this->hasColumn('num_doc', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('fecha', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('doc_cop', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('doc_com', 'string', 254, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 254,
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
        $this->hasOne('ExpImp', array(
             'local' => 'exp_num',
             'foreign' => 'exp_num'));
    }
}