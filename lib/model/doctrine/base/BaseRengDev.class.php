<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengDev', 'profit');

/**
 * BaseRengDev
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $dev_num
 * @property integer $reng_num
 * @property string $dis_cen
 * @property string $co_art
 * @property decimal $cant_ent
 * @property decimal $cant_com
 * @property decimal $cant_xdev
 * @property decimal $cant_dev
 * @property decimal $total_art
 * @property decimal $stotal_art
 * @property string $descrip
 * @property string $uni_venta
 * @property string $suni_venta
 * @property decimal $total_uni
 * @property decimal $cos_pro_un
 * @property decimal $cos_pro_om
 * @property decimal $ult_cos_un
 * @property decimal $ult_cos_om
 * @property string $nro_lote
 * @property timestamp $fec_lote
 * @property decimal $pendiente2
 * @property string $tipo_doc2
 * @property integer $reng_doc2
 * @property integer $num_doc2
 * @property string $multilote
 * @property integer $subced
 * @property decimal $total_art2
 * @property string $rowguid
 * @property string $co_tar
 * 
 * @method integer   getDevNum()     Returns the current record's "dev_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getDisCen()     Returns the current record's "dis_cen" value
 * @method string    getCoArt()      Returns the current record's "co_art" value
 * @method decimal   getCantEnt()    Returns the current record's "cant_ent" value
 * @method decimal   getCantCom()    Returns the current record's "cant_com" value
 * @method decimal   getCantXdev()   Returns the current record's "cant_xdev" value
 * @method decimal   getCantDev()    Returns the current record's "cant_dev" value
 * @method decimal   getTotalArt()   Returns the current record's "total_art" value
 * @method decimal   getStotalArt()  Returns the current record's "stotal_art" value
 * @method string    getDescrip()    Returns the current record's "descrip" value
 * @method string    getUniVenta()   Returns the current record's "uni_venta" value
 * @method string    getSuniVenta()  Returns the current record's "suni_venta" value
 * @method decimal   getTotalUni()   Returns the current record's "total_uni" value
 * @method decimal   getCosProUn()   Returns the current record's "cos_pro_un" value
 * @method decimal   getCosProOm()   Returns the current record's "cos_pro_om" value
 * @method decimal   getUltCosUn()   Returns the current record's "ult_cos_un" value
 * @method decimal   getUltCosOm()   Returns the current record's "ult_cos_om" value
 * @method string    getNroLote()    Returns the current record's "nro_lote" value
 * @method timestamp getFecLote()    Returns the current record's "fec_lote" value
 * @method decimal   getPendiente2() Returns the current record's "pendiente2" value
 * @method string    getTipoDoc2()   Returns the current record's "tipo_doc2" value
 * @method integer   getRengDoc2()   Returns the current record's "reng_doc2" value
 * @method integer   getNumDoc2()    Returns the current record's "num_doc2" value
 * @method string    getMultilote()  Returns the current record's "multilote" value
 * @method integer   getSubced()     Returns the current record's "subced" value
 * @method decimal   getTotalArt2()  Returns the current record's "total_art2" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method string    getCoTar()      Returns the current record's "co_tar" value
 * @method RengDev   setDevNum()     Sets the current record's "dev_num" value
 * @method RengDev   setRengNum()    Sets the current record's "reng_num" value
 * @method RengDev   setDisCen()     Sets the current record's "dis_cen" value
 * @method RengDev   setCoArt()      Sets the current record's "co_art" value
 * @method RengDev   setCantEnt()    Sets the current record's "cant_ent" value
 * @method RengDev   setCantCom()    Sets the current record's "cant_com" value
 * @method RengDev   setCantXdev()   Sets the current record's "cant_xdev" value
 * @method RengDev   setCantDev()    Sets the current record's "cant_dev" value
 * @method RengDev   setTotalArt()   Sets the current record's "total_art" value
 * @method RengDev   setStotalArt()  Sets the current record's "stotal_art" value
 * @method RengDev   setDescrip()    Sets the current record's "descrip" value
 * @method RengDev   setUniVenta()   Sets the current record's "uni_venta" value
 * @method RengDev   setSuniVenta()  Sets the current record's "suni_venta" value
 * @method RengDev   setTotalUni()   Sets the current record's "total_uni" value
 * @method RengDev   setCosProUn()   Sets the current record's "cos_pro_un" value
 * @method RengDev   setCosProOm()   Sets the current record's "cos_pro_om" value
 * @method RengDev   setUltCosUn()   Sets the current record's "ult_cos_un" value
 * @method RengDev   setUltCosOm()   Sets the current record's "ult_cos_om" value
 * @method RengDev   setNroLote()    Sets the current record's "nro_lote" value
 * @method RengDev   setFecLote()    Sets the current record's "fec_lote" value
 * @method RengDev   setPendiente2() Sets the current record's "pendiente2" value
 * @method RengDev   setTipoDoc2()   Sets the current record's "tipo_doc2" value
 * @method RengDev   setRengDoc2()   Sets the current record's "reng_doc2" value
 * @method RengDev   setNumDoc2()    Sets the current record's "num_doc2" value
 * @method RengDev   setMultilote()  Sets the current record's "multilote" value
 * @method RengDev   setSubced()     Sets the current record's "subced" value
 * @method RengDev   setTotalArt2()  Sets the current record's "total_art2" value
 * @method RengDev   setRowguid()    Sets the current record's "rowguid" value
 * @method RengDev   setCoTar()      Sets the current record's "co_tar" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengDev extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_dev');
        $this->hasColumn('dev_num', 'integer', 4, array(
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
        $this->hasColumn('cant_xdev', 'decimal', 20, array(
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
        $this->hasColumn('total_art', 'decimal', 20, array(
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
        $this->hasColumn('descrip', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
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
        $this->hasColumn('total_uni', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cos_pro_un', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cos_pro_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ult_cos_un', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ult_cos_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
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
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
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
        $this->hasColumn('multilote', 'string', 2147483647, array(
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
        $this->hasColumn('total_art2', 'decimal', 20, array(
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
        
    }
}