<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengPla', 'profit');

/**
 * BaseRengPla
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pla_num
 * @property integer $reng_num
 * @property boolean $xstock
 * @property string $co_art
 * @property decimal $m1
 * @property decimal $m2
 * @property decimal $m3
 * @property decimal $m4
 * @property decimal $m5
 * @property decimal $m6
 * @property decimal $m7
 * @property decimal $m8
 * @property decimal $m9
 * @property decimal $m10
 * @property decimal $m11
 * @property decimal $m12
 * @property decimal $d1
 * @property decimal $d2
 * @property decimal $d3
 * @property decimal $d4
 * @property decimal $d5
 * @property decimal $d6
 * @property decimal $d7
 * @property decimal $d8
 * @property decimal $d9
 * @property decimal $d10
 * @property decimal $d11
 * @property decimal $d12
 * @property integer $enero
 * @property string $rowguid
 * @property Spplanenc $Spplanenc
 * 
 * @method integer   getPlaNum()    Returns the current record's "pla_num" value
 * @method integer   getRengNum()   Returns the current record's "reng_num" value
 * @method boolean   getXstock()    Returns the current record's "xstock" value
 * @method string    getCoArt()     Returns the current record's "co_art" value
 * @method decimal   getM1()        Returns the current record's "m1" value
 * @method decimal   getM2()        Returns the current record's "m2" value
 * @method decimal   getM3()        Returns the current record's "m3" value
 * @method decimal   getM4()        Returns the current record's "m4" value
 * @method decimal   getM5()        Returns the current record's "m5" value
 * @method decimal   getM6()        Returns the current record's "m6" value
 * @method decimal   getM7()        Returns the current record's "m7" value
 * @method decimal   getM8()        Returns the current record's "m8" value
 * @method decimal   getM9()        Returns the current record's "m9" value
 * @method decimal   getM10()       Returns the current record's "m10" value
 * @method decimal   getM11()       Returns the current record's "m11" value
 * @method decimal   getM12()       Returns the current record's "m12" value
 * @method decimal   getD1()        Returns the current record's "d1" value
 * @method decimal   getD2()        Returns the current record's "d2" value
 * @method decimal   getD3()        Returns the current record's "d3" value
 * @method decimal   getD4()        Returns the current record's "d4" value
 * @method decimal   getD5()        Returns the current record's "d5" value
 * @method decimal   getD6()        Returns the current record's "d6" value
 * @method decimal   getD7()        Returns the current record's "d7" value
 * @method decimal   getD8()        Returns the current record's "d8" value
 * @method decimal   getD9()        Returns the current record's "d9" value
 * @method decimal   getD10()       Returns the current record's "d10" value
 * @method decimal   getD11()       Returns the current record's "d11" value
 * @method decimal   getD12()       Returns the current record's "d12" value
 * @method integer   getEnero()     Returns the current record's "enero" value
 * @method string    getRowguid()   Returns the current record's "rowguid" value
 * @method Spplanenc getSpplanenc() Returns the current record's "Spplanenc" value
 * @method RengPla   setPlaNum()    Sets the current record's "pla_num" value
 * @method RengPla   setRengNum()   Sets the current record's "reng_num" value
 * @method RengPla   setXstock()    Sets the current record's "xstock" value
 * @method RengPla   setCoArt()     Sets the current record's "co_art" value
 * @method RengPla   setM1()        Sets the current record's "m1" value
 * @method RengPla   setM2()        Sets the current record's "m2" value
 * @method RengPla   setM3()        Sets the current record's "m3" value
 * @method RengPla   setM4()        Sets the current record's "m4" value
 * @method RengPla   setM5()        Sets the current record's "m5" value
 * @method RengPla   setM6()        Sets the current record's "m6" value
 * @method RengPla   setM7()        Sets the current record's "m7" value
 * @method RengPla   setM8()        Sets the current record's "m8" value
 * @method RengPla   setM9()        Sets the current record's "m9" value
 * @method RengPla   setM10()       Sets the current record's "m10" value
 * @method RengPla   setM11()       Sets the current record's "m11" value
 * @method RengPla   setM12()       Sets the current record's "m12" value
 * @method RengPla   setD1()        Sets the current record's "d1" value
 * @method RengPla   setD2()        Sets the current record's "d2" value
 * @method RengPla   setD3()        Sets the current record's "d3" value
 * @method RengPla   setD4()        Sets the current record's "d4" value
 * @method RengPla   setD5()        Sets the current record's "d5" value
 * @method RengPla   setD6()        Sets the current record's "d6" value
 * @method RengPla   setD7()        Sets the current record's "d7" value
 * @method RengPla   setD8()        Sets the current record's "d8" value
 * @method RengPla   setD9()        Sets the current record's "d9" value
 * @method RengPla   setD10()       Sets the current record's "d10" value
 * @method RengPla   setD11()       Sets the current record's "d11" value
 * @method RengPla   setD12()       Sets the current record's "d12" value
 * @method RengPla   setEnero()     Sets the current record's "enero" value
 * @method RengPla   setRowguid()   Sets the current record's "rowguid" value
 * @method RengPla   setSpplanenc() Sets the current record's "Spplanenc" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengPla extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_pla');
        $this->hasColumn('pla_num', 'integer', 4, array(
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
        $this->hasColumn('xstock', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('m1', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m3', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m4', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m5', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m6', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m7', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m8', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m9', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m10', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m11', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m12', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d1', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d3', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d4', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d5', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d6', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d7', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d8', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d9', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d10', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d11', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d12', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('enero', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasOne('Spplanenc', array(
             'local' => 'pla_num',
             'foreign' => 'pla_num'));
    }
}