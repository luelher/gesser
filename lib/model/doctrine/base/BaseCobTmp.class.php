<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CobTmp', 'profit');

/**
 * BaseCobTmp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $cob_num
 * @property integer $reng_num
 * @property string $tip_cob
 * @property string $num_doc
 * @property string $mont_doc
 * @property string $banco
 * @property string $cod_caja
 * @property string $des_caja
 * @property string $fec_cheq
 * @property string $nombre_ban
 * @property string $numero
 * @property string $sino_pago
 * @property string $sino_reten
 * @property string $monto_dppa
 * @property string $monto_rete
 * @property string $mont_cobro
 * @property string $saldo
 * @property string $neto
 * @property float $giro
 * @property string $revisado
 * @property string $trasnfe
 * @property string $rowguid
 * @property timestamp $fecha_ven
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method integer   getCobNum()     Returns the current record's "cob_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getTipCob()     Returns the current record's "tip_cob" value
 * @method string    getNumDoc()     Returns the current record's "num_doc" value
 * @method string    getMontDoc()    Returns the current record's "mont_doc" value
 * @method string    getBanco()      Returns the current record's "banco" value
 * @method string    getCodCaja()    Returns the current record's "cod_caja" value
 * @method string    getDesCaja()    Returns the current record's "des_caja" value
 * @method string    getFecCheq()    Returns the current record's "fec_cheq" value
 * @method string    getNombreBan()  Returns the current record's "nombre_ban" value
 * @method string    getNumero()     Returns the current record's "numero" value
 * @method string    getSinoPago()   Returns the current record's "sino_pago" value
 * @method string    getSinoReten()  Returns the current record's "sino_reten" value
 * @method string    getMontoDppa()  Returns the current record's "monto_dppa" value
 * @method string    getMontoRete()  Returns the current record's "monto_rete" value
 * @method string    getMontCobro()  Returns the current record's "mont_cobro" value
 * @method string    getSaldo()      Returns the current record's "saldo" value
 * @method string    getNeto()       Returns the current record's "neto" value
 * @method float     getGiro()       Returns the current record's "giro" value
 * @method string    getRevisado()   Returns the current record's "revisado" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method timestamp getFechaVen()   Returns the current record's "fecha_ven" value
 * @method CobTmp    setId()         Sets the current record's "id" value
 * @method CobTmp    setCobNum()     Sets the current record's "cob_num" value
 * @method CobTmp    setRengNum()    Sets the current record's "reng_num" value
 * @method CobTmp    setTipCob()     Sets the current record's "tip_cob" value
 * @method CobTmp    setNumDoc()     Sets the current record's "num_doc" value
 * @method CobTmp    setMontDoc()    Sets the current record's "mont_doc" value
 * @method CobTmp    setBanco()      Sets the current record's "banco" value
 * @method CobTmp    setCodCaja()    Sets the current record's "cod_caja" value
 * @method CobTmp    setDesCaja()    Sets the current record's "des_caja" value
 * @method CobTmp    setFecCheq()    Sets the current record's "fec_cheq" value
 * @method CobTmp    setNombreBan()  Sets the current record's "nombre_ban" value
 * @method CobTmp    setNumero()     Sets the current record's "numero" value
 * @method CobTmp    setSinoPago()   Sets the current record's "sino_pago" value
 * @method CobTmp    setSinoReten()  Sets the current record's "sino_reten" value
 * @method CobTmp    setMontoDppa()  Sets the current record's "monto_dppa" value
 * @method CobTmp    setMontoRete()  Sets the current record's "monto_rete" value
 * @method CobTmp    setMontCobro()  Sets the current record's "mont_cobro" value
 * @method CobTmp    setSaldo()      Sets the current record's "saldo" value
 * @method CobTmp    setNeto()       Sets the current record's "neto" value
 * @method CobTmp    setGiro()       Sets the current record's "giro" value
 * @method CobTmp    setRevisado()   Sets the current record's "revisado" value
 * @method CobTmp    setTrasnfe()    Sets the current record's "trasnfe" value
 * @method CobTmp    setRowguid()    Sets the current record's "rowguid" value
 * @method CobTmp    setFechaVen()   Sets the current record's "fecha_ven" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCobTmp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cob_tmp');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('cob_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reng_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
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
        $this->hasColumn('mont_doc', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('fec_cheq', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('nombre_ban', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
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
        $this->hasColumn('sino_pago', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('sino_reten', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('monto_dppa', 'string', 14, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 14,
             ));
        $this->hasColumn('monto_rete', 'string', 14, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 14,
             ));
        $this->hasColumn('mont_cobro', 'string', 14, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 14,
             ));
        $this->hasColumn('saldo', 'string', 14, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 14,
             ));
        $this->hasColumn('neto', 'string', 14, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 14,
             ));
        $this->hasColumn('giro', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
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
        $this->hasColumn('fecha_ven', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}