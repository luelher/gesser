<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengTcp', 'profit');

/**
 * BaseRengTcp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cob_num
 * @property integer $reng_num
 * @property string $tip_cob
 * @property integer $movi
 * @property string $num_doc
 * @property boolean $devuelto
 * @property decimal $mont_doc
 * @property decimal $mont_tmp
 * @property string $moneda
 * @property string $banco
 * @property string $cod_caja
 * @property string $des_caja
 * @property timestamp $fec_cheq
 * @property string $nombre_ban
 * @property string $numero
 * @property string $rowguid
 * 
 * @method integer   getCobNum()     Returns the current record's "cob_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getTipCob()     Returns the current record's "tip_cob" value
 * @method integer   getMovi()       Returns the current record's "movi" value
 * @method string    getNumDoc()     Returns the current record's "num_doc" value
 * @method boolean   getDevuelto()   Returns the current record's "devuelto" value
 * @method decimal   getMontDoc()    Returns the current record's "mont_doc" value
 * @method decimal   getMontTmp()    Returns the current record's "mont_tmp" value
 * @method string    getMoneda()     Returns the current record's "moneda" value
 * @method string    getBanco()      Returns the current record's "banco" value
 * @method string    getCodCaja()    Returns the current record's "cod_caja" value
 * @method string    getDesCaja()    Returns the current record's "des_caja" value
 * @method timestamp getFecCheq()    Returns the current record's "fec_cheq" value
 * @method string    getNombreBan()  Returns the current record's "nombre_ban" value
 * @method string    getNumero()     Returns the current record's "numero" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method RengTcp   setCobNum()     Sets the current record's "cob_num" value
 * @method RengTcp   setRengNum()    Sets the current record's "reng_num" value
 * @method RengTcp   setTipCob()     Sets the current record's "tip_cob" value
 * @method RengTcp   setMovi()       Sets the current record's "movi" value
 * @method RengTcp   setNumDoc()     Sets the current record's "num_doc" value
 * @method RengTcp   setDevuelto()   Sets the current record's "devuelto" value
 * @method RengTcp   setMontDoc()    Sets the current record's "mont_doc" value
 * @method RengTcp   setMontTmp()    Sets the current record's "mont_tmp" value
 * @method RengTcp   setMoneda()     Sets the current record's "moneda" value
 * @method RengTcp   setBanco()      Sets the current record's "banco" value
 * @method RengTcp   setCodCaja()    Sets the current record's "cod_caja" value
 * @method RengTcp   setDesCaja()    Sets the current record's "des_caja" value
 * @method RengTcp   setFecCheq()    Sets the current record's "fec_cheq" value
 * @method RengTcp   setNombreBan()  Sets the current record's "nombre_ban" value
 * @method RengTcp   setNumero()     Sets the current record's "numero" value
 * @method RengTcp   setRowguid()    Sets the current record's "rowguid" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengTcp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_tcp');
        $this->hasColumn('cob_num', 'integer', 4, array(
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
        $this->hasColumn('tip_cob', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('movi', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_doc', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('devuelto', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mont_doc', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mont_tmp', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('moneda', 'string', 8, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('banco', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('cod_caja', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('des_caja', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('fec_cheq', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('nombre_ban', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('numero', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}