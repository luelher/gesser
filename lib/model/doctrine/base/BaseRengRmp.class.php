<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengRmp', 'profit');

/**
 * BaseRengRmp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $rma_num
 * @property integer $reng_num
 * @property string $serial
 * @property string $doc_tip_e
 * @property integer $doc_num_e
 * @property string $co_art
 * @property string $tipo_doc
 * @property integer $num_doc
 * @property timestamp $fec_doc_e
 * @property string $co_falla
 * @property string $status
 * @property timestamp $fec_emis
 * @property string $co_reem
 * @property string $treemplazo
 * @property string $comentario
 * @property string $co_sucu
 * @property boolean $seleccion
 * @property string $co_alma
 * @property string $des_art
 * @property string $rowguid
 * @property decimal $aux01
 * @property string $aux02
 * @property RmaProv $RmaProv
 * @property Art $Art
 * @property RmaReep $RmaReep
 * @property SubAlma $SubAlma
 * 
 * @method integer   getRmaNum()     Returns the current record's "rma_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getSerial()     Returns the current record's "serial" value
 * @method string    getDocTipE()    Returns the current record's "doc_tip_e" value
 * @method integer   getDocNumE()    Returns the current record's "doc_num_e" value
 * @method string    getCoArt()      Returns the current record's "co_art" value
 * @method string    getTipoDoc()    Returns the current record's "tipo_doc" value
 * @method integer   getNumDoc()     Returns the current record's "num_doc" value
 * @method timestamp getFecDocE()    Returns the current record's "fec_doc_e" value
 * @method string    getCoFalla()    Returns the current record's "co_falla" value
 * @method string    getStatus()     Returns the current record's "status" value
 * @method timestamp getFecEmis()    Returns the current record's "fec_emis" value
 * @method string    getCoReem()     Returns the current record's "co_reem" value
 * @method string    getTreemplazo() Returns the current record's "treemplazo" value
 * @method string    getComentario() Returns the current record's "comentario" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method boolean   getSeleccion()  Returns the current record's "seleccion" value
 * @method string    getCoAlma()     Returns the current record's "co_alma" value
 * @method string    getDesArt()     Returns the current record's "des_art" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method RmaProv   getRmaProv()    Returns the current record's "RmaProv" value
 * @method Art       getArt()        Returns the current record's "Art" value
 * @method RmaReep   getRmaReep()    Returns the current record's "RmaReep" value
 * @method SubAlma   getSubAlma()    Returns the current record's "SubAlma" value
 * @method RengRmp   setRmaNum()     Sets the current record's "rma_num" value
 * @method RengRmp   setRengNum()    Sets the current record's "reng_num" value
 * @method RengRmp   setSerial()     Sets the current record's "serial" value
 * @method RengRmp   setDocTipE()    Sets the current record's "doc_tip_e" value
 * @method RengRmp   setDocNumE()    Sets the current record's "doc_num_e" value
 * @method RengRmp   setCoArt()      Sets the current record's "co_art" value
 * @method RengRmp   setTipoDoc()    Sets the current record's "tipo_doc" value
 * @method RengRmp   setNumDoc()     Sets the current record's "num_doc" value
 * @method RengRmp   setFecDocE()    Sets the current record's "fec_doc_e" value
 * @method RengRmp   setCoFalla()    Sets the current record's "co_falla" value
 * @method RengRmp   setStatus()     Sets the current record's "status" value
 * @method RengRmp   setFecEmis()    Sets the current record's "fec_emis" value
 * @method RengRmp   setCoReem()     Sets the current record's "co_reem" value
 * @method RengRmp   setTreemplazo() Sets the current record's "treemplazo" value
 * @method RengRmp   setComentario() Sets the current record's "comentario" value
 * @method RengRmp   setCoSucu()     Sets the current record's "co_sucu" value
 * @method RengRmp   setSeleccion()  Sets the current record's "seleccion" value
 * @method RengRmp   setCoAlma()     Sets the current record's "co_alma" value
 * @method RengRmp   setDesArt()     Sets the current record's "des_art" value
 * @method RengRmp   setRowguid()    Sets the current record's "rowguid" value
 * @method RengRmp   setAux01()      Sets the current record's "aux01" value
 * @method RengRmp   setAux02()      Sets the current record's "aux02" value
 * @method RengRmp   setRmaProv()    Sets the current record's "RmaProv" value
 * @method RengRmp   setArt()        Sets the current record's "Art" value
 * @method RengRmp   setRmaReep()    Sets the current record's "RmaReep" value
 * @method RengRmp   setSubAlma()    Sets the current record's "SubAlma" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengRmp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_rmp');
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
        $this->hasColumn('doc_tip_e', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('doc_num_e', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
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
        $this->hasColumn('fec_doc_e', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('co_falla', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('fec_emis', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
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
        $this->hasColumn('co_sucu', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('seleccion', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasOne('RmaProv', array(
             'local' => 'rma_num',
             'foreign' => 'rma_num'));

        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));

        $this->hasOne('RmaReep', array(
             'local' => 'co_reem',
             'foreign' => 'co_reem'));

        $this->hasOne('SubAlma', array(
             'local' => 'co_alma',
             'foreign' => 'co_sub'));
    }
}