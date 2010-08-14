<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengEce', 'profit');

/**
 * BaseRengEce
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $co_ced
 * @property integer $reng_num
 * @property string $co_emp
 * @property integer $cantidad
 * @property decimal $horas
 * @property string $rowguid
 * @property Spced $Spced
 * @property Spemple $Spemple
 * 
 * @method integer getCoCed()    Returns the current record's "co_ced" value
 * @method integer getRengNum()  Returns the current record's "reng_num" value
 * @method string  getCoEmp()    Returns the current record's "co_emp" value
 * @method integer getCantidad() Returns the current record's "cantidad" value
 * @method decimal getHoras()    Returns the current record's "horas" value
 * @method string  getRowguid()  Returns the current record's "rowguid" value
 * @method Spced   getSpced()    Returns the current record's "Spced" value
 * @method Spemple getSpemple()  Returns the current record's "Spemple" value
 * @method RengEce setCoCed()    Sets the current record's "co_ced" value
 * @method RengEce setRengNum()  Sets the current record's "reng_num" value
 * @method RengEce setCoEmp()    Sets the current record's "co_emp" value
 * @method RengEce setCantidad() Sets the current record's "cantidad" value
 * @method RengEce setHoras()    Sets the current record's "horas" value
 * @method RengEce setRowguid()  Sets the current record's "rowguid" value
 * @method RengEce setSpced()    Sets the current record's "Spced" value
 * @method RengEce setSpemple()  Sets the current record's "Spemple" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengEce extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_ece');
        $this->hasColumn('co_ced', 'integer', 4, array(
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
        $this->hasColumn('co_emp', 'string', 17, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 17,
             ));
        $this->hasColumn('cantidad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('horas', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
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
        $this->hasOne('Spced', array(
             'local' => 'co_ced',
             'foreign' => 'co_ced'));

        $this->hasOne('Spemple', array(
             'local' => 'co_emp',
             'foreign' => 'co_emp'));
    }
}