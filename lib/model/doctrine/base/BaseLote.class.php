<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Lote', 'profit');

/**
 * BaseLote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_art
 * @property string $nro_lote
 * @property timestamp $fec_lote
 * @property string $revisado
 * @property string $trasnfe
 * @property string $rowguid
 * @property decimal $prec_vta1
 * @property decimal $prec_vta2
 * @property decimal $prec_vta3
 * @property decimal $prec_vta4
 * @property decimal $prec_vta5
 * @property decimal $ult_cos_un
 * @property decimal $ult_cos_om
 * @property decimal $aux01
 * @property string $aux02
 * @property Art $Art
 * @property Doctrine_Collection $StLote
 * @property Doctrine_Collection $StLote_4
 * 
 * @method string              getCoArt()      Returns the current record's "co_art" value
 * @method string              getNroLote()    Returns the current record's "nro_lote" value
 * @method timestamp           getFecLote()    Returns the current record's "fec_lote" value
 * @method string              getRevisado()   Returns the current record's "revisado" value
 * @method string              getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string              getRowguid()    Returns the current record's "rowguid" value
 * @method decimal             getPrecVta1()   Returns the current record's "prec_vta1" value
 * @method decimal             getPrecVta2()   Returns the current record's "prec_vta2" value
 * @method decimal             getPrecVta3()   Returns the current record's "prec_vta3" value
 * @method decimal             getPrecVta4()   Returns the current record's "prec_vta4" value
 * @method decimal             getPrecVta5()   Returns the current record's "prec_vta5" value
 * @method decimal             getUltCosUn()   Returns the current record's "ult_cos_un" value
 * @method decimal             getUltCosOm()   Returns the current record's "ult_cos_om" value
 * @method decimal             getAux01()      Returns the current record's "aux01" value
 * @method string              getAux02()      Returns the current record's "aux02" value
 * @method Art                 getArt()        Returns the current record's "Art" value
 * @method Doctrine_Collection getStLote()     Returns the current record's "StLote" collection
 * @method Doctrine_Collection getStLote4()    Returns the current record's "StLote_4" collection
 * @method Lote                setCoArt()      Sets the current record's "co_art" value
 * @method Lote                setNroLote()    Sets the current record's "nro_lote" value
 * @method Lote                setFecLote()    Sets the current record's "fec_lote" value
 * @method Lote                setRevisado()   Sets the current record's "revisado" value
 * @method Lote                setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Lote                setRowguid()    Sets the current record's "rowguid" value
 * @method Lote                setPrecVta1()   Sets the current record's "prec_vta1" value
 * @method Lote                setPrecVta2()   Sets the current record's "prec_vta2" value
 * @method Lote                setPrecVta3()   Sets the current record's "prec_vta3" value
 * @method Lote                setPrecVta4()   Sets the current record's "prec_vta4" value
 * @method Lote                setPrecVta5()   Sets the current record's "prec_vta5" value
 * @method Lote                setUltCosUn()   Sets the current record's "ult_cos_un" value
 * @method Lote                setUltCosOm()   Sets the current record's "ult_cos_om" value
 * @method Lote                setAux01()      Sets the current record's "aux01" value
 * @method Lote                setAux02()      Sets the current record's "aux02" value
 * @method Lote                setArt()        Sets the current record's "Art" value
 * @method Lote                setStLote()     Sets the current record's "StLote" collection
 * @method Lote                setStLote4()    Sets the current record's "StLote_4" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('lote');
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('nro_lote', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
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
        $this->hasColumn('prec_vta1', 'decimal', 20, array(
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
        $this->hasColumn('prec_vta3', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('prec_vta4', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('prec_vta5', 'decimal', 20, array(
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

        $this->hasMany('StLote', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));

        $this->hasMany('StLote as StLote_4', array(
             'local' => 'nro_lote',
             'foreign' => 'nro_lote'));
    }
}