<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengEnc', 'profit');

/**
 * BaseRengEnc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $rma_num
 * @property integer $reng_num
 * @property string $tipo_doc
 * @property integer $num_doc
 * @property string $serial_dev
 * @property string $serial
 * @property string $co_art
 * @property string $co_reem
 * @property string $treemplazo
 * @property integer $nd_num
 * @property float $prec_vta
 * @property float $prec_vta2
 * @property string $comentario
 * @property string $co_alma
 * @property string $des_art
 * @property string $rowguid
 * @property decimal $aux01
 * @property string $aux02
 * @property RmaEntc $RmaEntc
 * @property Art $Art
 * @property RmaReem $RmaReem
 * @property SubAlma $SubAlma
 * 
 * @method integer getRmaNum()     Returns the current record's "rma_num" value
 * @method integer getRengNum()    Returns the current record's "reng_num" value
 * @method string  getTipoDoc()    Returns the current record's "tipo_doc" value
 * @method integer getNumDoc()     Returns the current record's "num_doc" value
 * @method string  getSerialDev()  Returns the current record's "serial_dev" value
 * @method string  getSerial()     Returns the current record's "serial" value
 * @method string  getCoArt()      Returns the current record's "co_art" value
 * @method string  getCoReem()     Returns the current record's "co_reem" value
 * @method string  getTreemplazo() Returns the current record's "treemplazo" value
 * @method integer getNdNum()      Returns the current record's "nd_num" value
 * @method float   getPrecVta()    Returns the current record's "prec_vta" value
 * @method float   getPrecVta2()   Returns the current record's "prec_vta2" value
 * @method string  getComentario() Returns the current record's "comentario" value
 * @method string  getCoAlma()     Returns the current record's "co_alma" value
 * @method string  getDesArt()     Returns the current record's "des_art" value
 * @method string  getRowguid()    Returns the current record's "rowguid" value
 * @method decimal getAux01()      Returns the current record's "aux01" value
 * @method string  getAux02()      Returns the current record's "aux02" value
 * @method RmaEntc getRmaEntc()    Returns the current record's "RmaEntc" value
 * @method Art     getArt()        Returns the current record's "Art" value
 * @method RmaReem getRmaReem()    Returns the current record's "RmaReem" value
 * @method SubAlma getSubAlma()    Returns the current record's "SubAlma" value
 * @method RengEnc setRmaNum()     Sets the current record's "rma_num" value
 * @method RengEnc setRengNum()    Sets the current record's "reng_num" value
 * @method RengEnc setTipoDoc()    Sets the current record's "tipo_doc" value
 * @method RengEnc setNumDoc()     Sets the current record's "num_doc" value
 * @method RengEnc setSerialDev()  Sets the current record's "serial_dev" value
 * @method RengEnc setSerial()     Sets the current record's "serial" value
 * @method RengEnc setCoArt()      Sets the current record's "co_art" value
 * @method RengEnc setCoReem()     Sets the current record's "co_reem" value
 * @method RengEnc setTreemplazo() Sets the current record's "treemplazo" value
 * @method RengEnc setNdNum()      Sets the current record's "nd_num" value
 * @method RengEnc setPrecVta()    Sets the current record's "prec_vta" value
 * @method RengEnc setPrecVta2()   Sets the current record's "prec_vta2" value
 * @method RengEnc setComentario() Sets the current record's "comentario" value
 * @method RengEnc setCoAlma()     Sets the current record's "co_alma" value
 * @method RengEnc setDesArt()     Sets the current record's "des_art" value
 * @method RengEnc setRowguid()    Sets the current record's "rowguid" value
 * @method RengEnc setAux01()      Sets the current record's "aux01" value
 * @method RengEnc setAux02()      Sets the current record's "aux02" value
 * @method RengEnc setRmaEntc()    Sets the current record's "RmaEntc" value
 * @method RengEnc setArt()        Sets the current record's "Art" value
 * @method RengEnc setRmaReem()    Sets the current record's "RmaReem" value
 * @method RengEnc setSubAlma()    Sets the current record's "SubAlma" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengEnc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_enc');
        $this->hasColumn('rma_num', 'integer', 4, array(
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
        $this->hasColumn('tipo_doc', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('num_doc', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('serial_dev', 'string', 40, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('serial', 'string', 40, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 40,
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
        $this->hasColumn('co_reem', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('treemplazo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('nd_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('prec_vta', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('prec_vta2', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('comentario', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
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
        $this->hasColumn('des_art', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 120,
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
        $this->hasOne('RmaEntc', array(
             'local' => 'rma_num',
             'foreign' => 'rma_num'));

        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));

        $this->hasOne('RmaReem', array(
             'local' => 'co_reem',
             'foreign' => 'co_reem'));

        $this->hasOne('SubAlma', array(
             'local' => 'co_alma',
             'foreign' => 'co_sub'));
    }
}