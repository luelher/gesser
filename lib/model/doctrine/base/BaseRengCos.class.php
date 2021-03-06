<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengCos', 'profit');

/**
 * BaseRengCos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cost_num
 * @property integer $reng_num
 * @property string $co_art
 * @property decimal $mp_cant
 * @property decimal $mo_cant
 * @property decimal $gf_cant
 * @property decimal $total
 * @property decimal $mp_cant_om
 * @property decimal $mo_cant_om
 * @property decimal $gf_cant_om
 * @property decimal $total_om
 * @property string $rowguid
 * @property decimal $por_mp
 * @property decimal $por_mo
 * @property decimal $por_gf
 * @property decimal $por_mp_om
 * @property decimal $por_mo_om
 * @property decimal $por_gf_om
 * @property decimal $men_cant
 * @property decimal $mem_cant
 * @property decimal $oi_cant
 * @property decimal $men_cant_om
 * @property decimal $mem_cant_om
 * @property decimal $oi_cant_om
 * @property decimal $por_men
 * @property decimal $por_mem
 * @property decimal $por_oi
 * @property decimal $por_men_om
 * @property decimal $por_mem_om
 * @property decimal $por_oi_om
 * @property string $co_uni
 * @property decimal $total_uni
 * @property Spcostest $Spcostest
 * 
 * @method integer   getCostNum()     Returns the current record's "cost_num" value
 * @method integer   getRengNum()     Returns the current record's "reng_num" value
 * @method string    getCoArt()       Returns the current record's "co_art" value
 * @method decimal   getMpCant()      Returns the current record's "mp_cant" value
 * @method decimal   getMoCant()      Returns the current record's "mo_cant" value
 * @method decimal   getGfCant()      Returns the current record's "gf_cant" value
 * @method decimal   getTotal()       Returns the current record's "total" value
 * @method decimal   getMpCantOm()    Returns the current record's "mp_cant_om" value
 * @method decimal   getMoCantOm()    Returns the current record's "mo_cant_om" value
 * @method decimal   getGfCantOm()    Returns the current record's "gf_cant_om" value
 * @method decimal   getTotalOm()     Returns the current record's "total_om" value
 * @method string    getRowguid()     Returns the current record's "rowguid" value
 * @method decimal   getPorMp()       Returns the current record's "por_mp" value
 * @method decimal   getPorMo()       Returns the current record's "por_mo" value
 * @method decimal   getPorGf()       Returns the current record's "por_gf" value
 * @method decimal   getPorMpOm()     Returns the current record's "por_mp_om" value
 * @method decimal   getPorMoOm()     Returns the current record's "por_mo_om" value
 * @method decimal   getPorGfOm()     Returns the current record's "por_gf_om" value
 * @method decimal   getMenCant()     Returns the current record's "men_cant" value
 * @method decimal   getMemCant()     Returns the current record's "mem_cant" value
 * @method decimal   getOiCant()      Returns the current record's "oi_cant" value
 * @method decimal   getMenCantOm()   Returns the current record's "men_cant_om" value
 * @method decimal   getMemCantOm()   Returns the current record's "mem_cant_om" value
 * @method decimal   getOiCantOm()    Returns the current record's "oi_cant_om" value
 * @method decimal   getPorMen()      Returns the current record's "por_men" value
 * @method decimal   getPorMem()      Returns the current record's "por_mem" value
 * @method decimal   getPorOi()       Returns the current record's "por_oi" value
 * @method decimal   getPorMenOm()    Returns the current record's "por_men_om" value
 * @method decimal   getPorMemOm()    Returns the current record's "por_mem_om" value
 * @method decimal   getPorOiOm()     Returns the current record's "por_oi_om" value
 * @method string    getCoUni()       Returns the current record's "co_uni" value
 * @method decimal   getTotalUni()    Returns the current record's "total_uni" value
 * @method Spcostest getSpcostest()   Returns the current record's "Spcostest" value
 * @method RengCos   setCostNum()     Sets the current record's "cost_num" value
 * @method RengCos   setRengNum()     Sets the current record's "reng_num" value
 * @method RengCos   setCoArt()       Sets the current record's "co_art" value
 * @method RengCos   setMpCant()      Sets the current record's "mp_cant" value
 * @method RengCos   setMoCant()      Sets the current record's "mo_cant" value
 * @method RengCos   setGfCant()      Sets the current record's "gf_cant" value
 * @method RengCos   setTotal()       Sets the current record's "total" value
 * @method RengCos   setMpCantOm()    Sets the current record's "mp_cant_om" value
 * @method RengCos   setMoCantOm()    Sets the current record's "mo_cant_om" value
 * @method RengCos   setGfCantOm()    Sets the current record's "gf_cant_om" value
 * @method RengCos   setTotalOm()     Sets the current record's "total_om" value
 * @method RengCos   setRowguid()     Sets the current record's "rowguid" value
 * @method RengCos   setPorMp()       Sets the current record's "por_mp" value
 * @method RengCos   setPorMo()       Sets the current record's "por_mo" value
 * @method RengCos   setPorGf()       Sets the current record's "por_gf" value
 * @method RengCos   setPorMpOm()     Sets the current record's "por_mp_om" value
 * @method RengCos   setPorMoOm()     Sets the current record's "por_mo_om" value
 * @method RengCos   setPorGfOm()     Sets the current record's "por_gf_om" value
 * @method RengCos   setMenCant()     Sets the current record's "men_cant" value
 * @method RengCos   setMemCant()     Sets the current record's "mem_cant" value
 * @method RengCos   setOiCant()      Sets the current record's "oi_cant" value
 * @method RengCos   setMenCantOm()   Sets the current record's "men_cant_om" value
 * @method RengCos   setMemCantOm()   Sets the current record's "mem_cant_om" value
 * @method RengCos   setOiCantOm()    Sets the current record's "oi_cant_om" value
 * @method RengCos   setPorMen()      Sets the current record's "por_men" value
 * @method RengCos   setPorMem()      Sets the current record's "por_mem" value
 * @method RengCos   setPorOi()       Sets the current record's "por_oi" value
 * @method RengCos   setPorMenOm()    Sets the current record's "por_men_om" value
 * @method RengCos   setPorMemOm()    Sets the current record's "por_mem_om" value
 * @method RengCos   setPorOiOm()     Sets the current record's "por_oi_om" value
 * @method RengCos   setCoUni()       Sets the current record's "co_uni" value
 * @method RengCos   setTotalUni()    Sets the current record's "total_uni" value
 * @method RengCos   setSpcostest()   Sets the current record's "Spcostest" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengCos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_cos');
        $this->hasColumn('cost_num', 'integer', 4, array(
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
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('mp_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mo_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('gf_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('total', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mp_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mo_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('gf_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('total_om', 'decimal', 20, array(
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
        $this->hasColumn('por_mp', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_mo', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_gf', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_mp_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_mo_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_gf_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('men_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mem_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('oi_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('men_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mem_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('oi_cant_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_men', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_mem', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_oi', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_men_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_mem_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('por_oi_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('co_uni', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('total_uni', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Spcostest', array(
             'local' => 'cost_num',
             'foreign' => 'cost_num'));
    }
}