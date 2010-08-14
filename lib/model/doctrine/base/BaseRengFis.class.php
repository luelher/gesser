<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengFis', 'profit');

/**
 * BaseRengFis
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $num_fis
 * @property integer $reng_num
 * @property string $co_art
 * @property string $co_lin
 * @property string $co_alma
 * @property decimal $stock_teor
 * @property decimal $stock_real
 * @property decimal $sstock_teo
 * @property decimal $stotal_art
 * @property decimal $costo_uni
 * @property string $aju_num
 * @property integer $saju_num
 * @property boolean $cerrado
 * @property string $uni_venta
 * @property string $suni_venta
 * @property integer $t_costo
 * @property string $rowguid
 * @property decimal $total_uni
 * @property string $nro_lote
 * @property timestamp $fec_lote
 * @property decimal $costo_uni_om
 * @property decimal $pendiente2
 * @property string $tipo_doc2
 * @property integer $reng_doc2
 * @property integer $num_doc2
 * @property decimal $aux01
 * @property string $aux02
 * @property Art $Art
 * 
 * @method integer   getNumFis()       Returns the current record's "num_fis" value
 * @method integer   getRengNum()      Returns the current record's "reng_num" value
 * @method string    getCoArt()        Returns the current record's "co_art" value
 * @method string    getCoLin()        Returns the current record's "co_lin" value
 * @method string    getCoAlma()       Returns the current record's "co_alma" value
 * @method decimal   getStockTeor()    Returns the current record's "stock_teor" value
 * @method decimal   getStockReal()    Returns the current record's "stock_real" value
 * @method decimal   getSstockTeo()    Returns the current record's "sstock_teo" value
 * @method decimal   getStotalArt()    Returns the current record's "stotal_art" value
 * @method decimal   getCostoUni()     Returns the current record's "costo_uni" value
 * @method string    getAjuNum()       Returns the current record's "aju_num" value
 * @method integer   getSajuNum()      Returns the current record's "saju_num" value
 * @method boolean   getCerrado()      Returns the current record's "cerrado" value
 * @method string    getUniVenta()     Returns the current record's "uni_venta" value
 * @method string    getSuniVenta()    Returns the current record's "suni_venta" value
 * @method integer   getTCosto()       Returns the current record's "t_costo" value
 * @method string    getRowguid()      Returns the current record's "rowguid" value
 * @method decimal   getTotalUni()     Returns the current record's "total_uni" value
 * @method string    getNroLote()      Returns the current record's "nro_lote" value
 * @method timestamp getFecLote()      Returns the current record's "fec_lote" value
 * @method decimal   getCostoUniOm()   Returns the current record's "costo_uni_om" value
 * @method decimal   getPendiente2()   Returns the current record's "pendiente2" value
 * @method string    getTipoDoc2()     Returns the current record's "tipo_doc2" value
 * @method integer   getRengDoc2()     Returns the current record's "reng_doc2" value
 * @method integer   getNumDoc2()      Returns the current record's "num_doc2" value
 * @method decimal   getAux01()        Returns the current record's "aux01" value
 * @method string    getAux02()        Returns the current record's "aux02" value
 * @method Art       getArt()          Returns the current record's "Art" value
 * @method RengFis   setNumFis()       Sets the current record's "num_fis" value
 * @method RengFis   setRengNum()      Sets the current record's "reng_num" value
 * @method RengFis   setCoArt()        Sets the current record's "co_art" value
 * @method RengFis   setCoLin()        Sets the current record's "co_lin" value
 * @method RengFis   setCoAlma()       Sets the current record's "co_alma" value
 * @method RengFis   setStockTeor()    Sets the current record's "stock_teor" value
 * @method RengFis   setStockReal()    Sets the current record's "stock_real" value
 * @method RengFis   setSstockTeo()    Sets the current record's "sstock_teo" value
 * @method RengFis   setStotalArt()    Sets the current record's "stotal_art" value
 * @method RengFis   setCostoUni()     Sets the current record's "costo_uni" value
 * @method RengFis   setAjuNum()       Sets the current record's "aju_num" value
 * @method RengFis   setSajuNum()      Sets the current record's "saju_num" value
 * @method RengFis   setCerrado()      Sets the current record's "cerrado" value
 * @method RengFis   setUniVenta()     Sets the current record's "uni_venta" value
 * @method RengFis   setSuniVenta()    Sets the current record's "suni_venta" value
 * @method RengFis   setTCosto()       Sets the current record's "t_costo" value
 * @method RengFis   setRowguid()      Sets the current record's "rowguid" value
 * @method RengFis   setTotalUni()     Sets the current record's "total_uni" value
 * @method RengFis   setNroLote()      Sets the current record's "nro_lote" value
 * @method RengFis   setFecLote()      Sets the current record's "fec_lote" value
 * @method RengFis   setCostoUniOm()   Sets the current record's "costo_uni_om" value
 * @method RengFis   setPendiente2()   Sets the current record's "pendiente2" value
 * @method RengFis   setTipoDoc2()     Sets the current record's "tipo_doc2" value
 * @method RengFis   setRengDoc2()     Sets the current record's "reng_doc2" value
 * @method RengFis   setNumDoc2()      Sets the current record's "num_doc2" value
 * @method RengFis   setAux01()        Sets the current record's "aux01" value
 * @method RengFis   setAux02()        Sets the current record's "aux02" value
 * @method RengFis   setArt()          Sets the current record's "Art" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengFis extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_fis');
        $this->hasColumn('num_fis', 'integer', 4, array(
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
        $this->hasColumn('co_lin', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('co_alma', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('stock_teor', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stock_real', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sstock_teo', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stotal_art', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('costo_uni', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('aju_num', 'string', 8, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('saju_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cerrado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('uni_venta', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('suni_venta', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('t_costo', 'integer', 4, array(
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
        $this->hasColumn('nro_lote', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('fec_lote', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('costo_uni_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('pendiente2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tipo_doc2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('reng_doc2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_doc2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('aux01', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('aux02', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));
    }
}