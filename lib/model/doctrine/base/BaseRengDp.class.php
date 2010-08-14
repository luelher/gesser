<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengDp', 'profit');

/**
 * BaseRengDp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $dep_num
 * @property integer $reng_num
 * @property string $codigo
 * @property integer $mov_afec
 * @property integer $mov_gene
 * @property string $forma_pag
 * @property timestamp $fecha
 * @property string $doc_num
 * @property string $descrip
 * @property decimal $monto
 * @property string $origen
 * @property integer $cob_pag
 * @property string $banc_tarj
 * @property decimal $comision
 * @property decimal $impuesto
 * @property string $rowguid
 * @property string $tipo_plazo
 * @property decimal $aux01
 * @property string $aux02
 * @property Cajas $Cajas
 * 
 * @method integer   getDepNum()     Returns the current record's "dep_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getCodigo()     Returns the current record's "codigo" value
 * @method integer   getMovAfec()    Returns the current record's "mov_afec" value
 * @method integer   getMovGene()    Returns the current record's "mov_gene" value
 * @method string    getFormaPag()   Returns the current record's "forma_pag" value
 * @method timestamp getFecha()      Returns the current record's "fecha" value
 * @method string    getDocNum()     Returns the current record's "doc_num" value
 * @method string    getDescrip()    Returns the current record's "descrip" value
 * @method decimal   getMonto()      Returns the current record's "monto" value
 * @method string    getOrigen()     Returns the current record's "origen" value
 * @method integer   getCobPag()     Returns the current record's "cob_pag" value
 * @method string    getBancTarj()   Returns the current record's "banc_tarj" value
 * @method decimal   getComision()   Returns the current record's "comision" value
 * @method decimal   getImpuesto()   Returns the current record's "impuesto" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method string    getTipoPlazo()  Returns the current record's "tipo_plazo" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method Cajas     getCajas()      Returns the current record's "Cajas" value
 * @method RengDp    setDepNum()     Sets the current record's "dep_num" value
 * @method RengDp    setRengNum()    Sets the current record's "reng_num" value
 * @method RengDp    setCodigo()     Sets the current record's "codigo" value
 * @method RengDp    setMovAfec()    Sets the current record's "mov_afec" value
 * @method RengDp    setMovGene()    Sets the current record's "mov_gene" value
 * @method RengDp    setFormaPag()   Sets the current record's "forma_pag" value
 * @method RengDp    setFecha()      Sets the current record's "fecha" value
 * @method RengDp    setDocNum()     Sets the current record's "doc_num" value
 * @method RengDp    setDescrip()    Sets the current record's "descrip" value
 * @method RengDp    setMonto()      Sets the current record's "monto" value
 * @method RengDp    setOrigen()     Sets the current record's "origen" value
 * @method RengDp    setCobPag()     Sets the current record's "cob_pag" value
 * @method RengDp    setBancTarj()   Sets the current record's "banc_tarj" value
 * @method RengDp    setComision()   Sets the current record's "comision" value
 * @method RengDp    setImpuesto()   Sets the current record's "impuesto" value
 * @method RengDp    setRowguid()    Sets the current record's "rowguid" value
 * @method RengDp    setTipoPlazo()  Sets the current record's "tipo_plazo" value
 * @method RengDp    setAux01()      Sets the current record's "aux01" value
 * @method RengDp    setAux02()      Sets the current record's "aux02" value
 * @method RengDp    setCajas()      Sets the current record's "Cajas" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengDp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_dp');
        $this->hasColumn('dep_num', 'integer', 4, array(
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
        $this->hasColumn('codigo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('mov_afec', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('mov_gene', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('forma_pag', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('fecha', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('doc_num', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('descrip', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('monto', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('origen', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('cob_pag', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('banc_tarj', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('comision', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('impuesto', 'decimal', 20, array(
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
        $this->hasColumn('tipo_plazo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasOne('Cajas', array(
             'local' => 'codigo',
             'foreign' => 'cod_caja'));
    }
}