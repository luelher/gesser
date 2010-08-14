<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengOdp', 'profit');

/**
 * BaseRengOdp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $odp_num
 * @property integer $reng_num
 * @property string $co_art
 * @property string $co_uni
 * @property string $rowguid
 * @property decimal $cant_req
 * @property decimal $cant_ent
 * @property decimal $cant_ent2
 * @property decimal $cant_com
 * @property decimal $cant_com2
 * @property decimal $cant_max
 * @property decimal $cant_dev
 * @property decimal $cant_dev2
 * @property decimal $cant_xde
 * @property decimal $cant_xde2
 * @property string $dis_cen
 * @property integer $subced
 * @property decimal $total_uni
 * @property string $co_tar
 * @property Spodp $Spodp
 * @property Art $Art
 * 
 * @method integer getOdpNum()    Returns the current record's "odp_num" value
 * @method integer getRengNum()   Returns the current record's "reng_num" value
 * @method string  getCoArt()     Returns the current record's "co_art" value
 * @method string  getCoUni()     Returns the current record's "co_uni" value
 * @method string  getRowguid()   Returns the current record's "rowguid" value
 * @method decimal getCantReq()   Returns the current record's "cant_req" value
 * @method decimal getCantEnt()   Returns the current record's "cant_ent" value
 * @method decimal getCantEnt2()  Returns the current record's "cant_ent2" value
 * @method decimal getCantCom()   Returns the current record's "cant_com" value
 * @method decimal getCantCom2()  Returns the current record's "cant_com2" value
 * @method decimal getCantMax()   Returns the current record's "cant_max" value
 * @method decimal getCantDev()   Returns the current record's "cant_dev" value
 * @method decimal getCantDev2()  Returns the current record's "cant_dev2" value
 * @method decimal getCantXde()   Returns the current record's "cant_xde" value
 * @method decimal getCantXde2()  Returns the current record's "cant_xde2" value
 * @method string  getDisCen()    Returns the current record's "dis_cen" value
 * @method integer getSubced()    Returns the current record's "subced" value
 * @method decimal getTotalUni()  Returns the current record's "total_uni" value
 * @method string  getCoTar()     Returns the current record's "co_tar" value
 * @method Spodp   getSpodp()     Returns the current record's "Spodp" value
 * @method Art     getArt()       Returns the current record's "Art" value
 * @method RengOdp setOdpNum()    Sets the current record's "odp_num" value
 * @method RengOdp setRengNum()   Sets the current record's "reng_num" value
 * @method RengOdp setCoArt()     Sets the current record's "co_art" value
 * @method RengOdp setCoUni()     Sets the current record's "co_uni" value
 * @method RengOdp setRowguid()   Sets the current record's "rowguid" value
 * @method RengOdp setCantReq()   Sets the current record's "cant_req" value
 * @method RengOdp setCantEnt()   Sets the current record's "cant_ent" value
 * @method RengOdp setCantEnt2()  Sets the current record's "cant_ent2" value
 * @method RengOdp setCantCom()   Sets the current record's "cant_com" value
 * @method RengOdp setCantCom2()  Sets the current record's "cant_com2" value
 * @method RengOdp setCantMax()   Sets the current record's "cant_max" value
 * @method RengOdp setCantDev()   Sets the current record's "cant_dev" value
 * @method RengOdp setCantDev2()  Sets the current record's "cant_dev2" value
 * @method RengOdp setCantXde()   Sets the current record's "cant_xde" value
 * @method RengOdp setCantXde2()  Sets the current record's "cant_xde2" value
 * @method RengOdp setDisCen()    Sets the current record's "dis_cen" value
 * @method RengOdp setSubced()    Sets the current record's "subced" value
 * @method RengOdp setTotalUni()  Sets the current record's "total_uni" value
 * @method RengOdp setCoTar()     Sets the current record's "co_tar" value
 * @method RengOdp setSpodp()     Sets the current record's "Spodp" value
 * @method RengOdp setArt()       Sets the current record's "Art" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengOdp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_odp');
        $this->hasColumn('odp_num', 'integer', 4, array(
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
        $this->hasColumn('cant_req', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_ent', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_ent2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_com', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_com2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_max', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_dev', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_dev2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_xde', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cant_xde2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('dis_cen', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('subced', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('co_tar', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Spodp', array(
             'local' => 'odp_num',
             'foreign' => 'odp_num'));

        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));
    }
}