<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengDcc', 'profit');

/**
 * BaseRengDcc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tipo_doc
 * @property integer $nro_doc
 * @property integer $reng_num
 * @property string $co_art
 * @property decimal $total_art
 * @property decimal $prec_vta
 * @property decimal $prec_vta2
 * @property decimal $reng_neto
 * @property string $tipo_imp
 * @property string $rowguid
 * @property string $dis_cen
 * @property string $uni_venta
 * @property decimal $total_uni
 * @property string $des_art
 * @property decimal $aux01
 * @property string $aux02
 * @property Art $Art
 * 
 * @method string  getTipoDoc()   Returns the current record's "tipo_doc" value
 * @method integer getNroDoc()    Returns the current record's "nro_doc" value
 * @method integer getRengNum()   Returns the current record's "reng_num" value
 * @method string  getCoArt()     Returns the current record's "co_art" value
 * @method decimal getTotalArt()  Returns the current record's "total_art" value
 * @method decimal getPrecVta()   Returns the current record's "prec_vta" value
 * @method decimal getPrecVta2()  Returns the current record's "prec_vta2" value
 * @method decimal getRengNeto()  Returns the current record's "reng_neto" value
 * @method string  getTipoImp()   Returns the current record's "tipo_imp" value
 * @method string  getRowguid()   Returns the current record's "rowguid" value
 * @method string  getDisCen()    Returns the current record's "dis_cen" value
 * @method string  getUniVenta()  Returns the current record's "uni_venta" value
 * @method decimal getTotalUni()  Returns the current record's "total_uni" value
 * @method string  getDesArt()    Returns the current record's "des_art" value
 * @method decimal getAux01()     Returns the current record's "aux01" value
 * @method string  getAux02()     Returns the current record's "aux02" value
 * @method Art     getArt()       Returns the current record's "Art" value
 * @method RengDcc setTipoDoc()   Sets the current record's "tipo_doc" value
 * @method RengDcc setNroDoc()    Sets the current record's "nro_doc" value
 * @method RengDcc setRengNum()   Sets the current record's "reng_num" value
 * @method RengDcc setCoArt()     Sets the current record's "co_art" value
 * @method RengDcc setTotalArt()  Sets the current record's "total_art" value
 * @method RengDcc setPrecVta()   Sets the current record's "prec_vta" value
 * @method RengDcc setPrecVta2()  Sets the current record's "prec_vta2" value
 * @method RengDcc setRengNeto()  Sets the current record's "reng_neto" value
 * @method RengDcc setTipoImp()   Sets the current record's "tipo_imp" value
 * @method RengDcc setRowguid()   Sets the current record's "rowguid" value
 * @method RengDcc setDisCen()    Sets the current record's "dis_cen" value
 * @method RengDcc setUniVenta()  Sets the current record's "uni_venta" value
 * @method RengDcc setTotalUni()  Sets the current record's "total_uni" value
 * @method RengDcc setDesArt()    Sets the current record's "des_art" value
 * @method RengDcc setAux01()     Sets the current record's "aux01" value
 * @method RengDcc setAux02()     Sets the current record's "aux02" value
 * @method RengDcc setArt()       Sets the current record's "Art" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengDcc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_dcc');
        $this->hasColumn('tipo_doc', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nro_doc', 'integer', 4, array(
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
        $this->hasColumn('prec_vta', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('prec_vta2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('reng_neto', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tipo_imp', 'string', 1, array(
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
        $this->hasColumn('des_art', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
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