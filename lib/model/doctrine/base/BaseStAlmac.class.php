<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('StAlmac', 'profit');

/**
 * BaseStAlmac
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_alma
 * @property string $co_art
 * @property decimal $stock_act
 * @property decimal $sstock_act
 * @property decimal $stock_com
 * @property decimal $sstock_com
 * @property decimal $stock_lle
 * @property decimal $sstock_lle
 * @property decimal $stock_des
 * @property decimal $sstock_des
 * @property string $revisado
 * @property string $trasnfe
 * @property string $rowguid
 * @property SubAlma $SubAlma
 * @property Art $Art
 * 
 * @method string  getCoAlma()     Returns the current record's "co_alma" value
 * @method string  getCoArt()      Returns the current record's "co_art" value
 * @method decimal getStockAct()   Returns the current record's "stock_act" value
 * @method decimal getSstockAct()  Returns the current record's "sstock_act" value
 * @method decimal getStockCom()   Returns the current record's "stock_com" value
 * @method decimal getSstockCom()  Returns the current record's "sstock_com" value
 * @method decimal getStockLle()   Returns the current record's "stock_lle" value
 * @method decimal getSstockLle()  Returns the current record's "sstock_lle" value
 * @method decimal getStockDes()   Returns the current record's "stock_des" value
 * @method decimal getSstockDes()  Returns the current record's "sstock_des" value
 * @method string  getRevisado()   Returns the current record's "revisado" value
 * @method string  getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string  getRowguid()    Returns the current record's "rowguid" value
 * @method SubAlma getSubAlma()    Returns the current record's "SubAlma" value
 * @method Art     getArt()        Returns the current record's "Art" value
 * @method StAlmac setCoAlma()     Sets the current record's "co_alma" value
 * @method StAlmac setCoArt()      Sets the current record's "co_art" value
 * @method StAlmac setStockAct()   Sets the current record's "stock_act" value
 * @method StAlmac setSstockAct()  Sets the current record's "sstock_act" value
 * @method StAlmac setStockCom()   Sets the current record's "stock_com" value
 * @method StAlmac setSstockCom()  Sets the current record's "sstock_com" value
 * @method StAlmac setStockLle()   Sets the current record's "stock_lle" value
 * @method StAlmac setSstockLle()  Sets the current record's "sstock_lle" value
 * @method StAlmac setStockDes()   Sets the current record's "stock_des" value
 * @method StAlmac setSstockDes()  Sets the current record's "sstock_des" value
 * @method StAlmac setRevisado()   Sets the current record's "revisado" value
 * @method StAlmac setTrasnfe()    Sets the current record's "trasnfe" value
 * @method StAlmac setRowguid()    Sets the current record's "rowguid" value
 * @method StAlmac setSubAlma()    Sets the current record's "SubAlma" value
 * @method StAlmac setArt()        Sets the current record's "Art" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStAlmac extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('st_almac');
        $this->hasColumn('co_alma', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('stock_act', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sstock_act', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stock_com', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sstock_com', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stock_lle', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sstock_lle', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stock_des', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sstock_des', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('revisado', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('trasnfe', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasOne('SubAlma', array(
             'local' => 'co_alma',
             'foreign' => 'co_sub'));

        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));
    }
}