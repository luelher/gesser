<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengTab', 'profit');

/**
 * BaseRengTab
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $co_tab
 * @property integer $reng_num
 * @property string $co_islr
 * @property float $porc_ret
 * @property float $porc_imp
 * @property float $sustraen
 * @property string $islr_des
 * @property string $rowguid
 * @property ConIslr $ConIslr
 * 
 * @method integer getCoTab()    Returns the current record's "co_tab" value
 * @method integer getRengNum()  Returns the current record's "reng_num" value
 * @method string  getCoIslr()   Returns the current record's "co_islr" value
 * @method float   getPorcRet()  Returns the current record's "porc_ret" value
 * @method float   getPorcImp()  Returns the current record's "porc_imp" value
 * @method float   getSustraen() Returns the current record's "sustraen" value
 * @method string  getIslrDes()  Returns the current record's "islr_des" value
 * @method string  getRowguid()  Returns the current record's "rowguid" value
 * @method ConIslr getConIslr()  Returns the current record's "ConIslr" value
 * @method RengTab setCoTab()    Sets the current record's "co_tab" value
 * @method RengTab setRengNum()  Sets the current record's "reng_num" value
 * @method RengTab setCoIslr()   Sets the current record's "co_islr" value
 * @method RengTab setPorcRet()  Sets the current record's "porc_ret" value
 * @method RengTab setPorcImp()  Sets the current record's "porc_imp" value
 * @method RengTab setSustraen() Sets the current record's "sustraen" value
 * @method RengTab setIslrDes()  Sets the current record's "islr_des" value
 * @method RengTab setRowguid()  Sets the current record's "rowguid" value
 * @method RengTab setConIslr()  Sets the current record's "ConIslr" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengTab extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_tab');
        $this->hasColumn('co_tab', 'integer', 4, array(
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
        $this->hasColumn('porc_ret', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('porc_imp', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('sustraen', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('islr_des', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
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