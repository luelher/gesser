<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cajas', 'profit');

/**
 * BaseCajas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_caja
 * @property string $descrip
 * @property timestamp $mes_ini
 * @property decimal $saldo_i
 * @property decimal $saldo_ei
 * @property decimal $saldo_a
 * @property decimal $saldo_e
 * @property string $moneda
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $dis_cen
 * @property decimal $deb_ant
 * @property decimal $hab_ant
 * @property string $co_us_in
 * @property timestamp $fe_us_in
 * @property string $co_us_mo
 * @property timestamp $fe_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_el
 * @property string $revisado
 * @property string $trasnfe
 * @property string $co_sucu
 * @property string $rowguid
 * @property boolean $inactivo
 * @property boolean $gavetaser
 * @property boolean $cajapri
 * @property boolean $sidisplay
 * @property string $puerto
 * @property string $bitdatos
 * @property string $bitstop
 * @property string $paridad
 * @property string $velocidad
 * @property string $puerto2
 * @property string $bitdatos2
 * @property string $bitstop2
 * @property string $paridad2
 * @property string $gcadena
 * @property string $velocidad2
 * @property boolean $cajapvta
 * @property boolean $mvisa
 * @property integer $vpostipo
 * @property string $impfis
 * @property Doctrine_Collection $MovCaj
 * @property Doctrine_Collection $RengDp
 * 
 * @method string              getCodCaja()    Returns the current record's "cod_caja" value
 * @method string              getDescrip()    Returns the current record's "descrip" value
 * @method timestamp           getMesIni()     Returns the current record's "mes_ini" value
 * @method decimal             getSaldoI()     Returns the current record's "saldo_i" value
 * @method decimal             getSaldoEi()    Returns the current record's "saldo_ei" value
 * @method decimal             getSaldoA()     Returns the current record's "saldo_a" value
 * @method decimal             getSaldoE()     Returns the current record's "saldo_e" value
 * @method string              getMoneda()     Returns the current record's "moneda" value
 * @method string              getCampo1()     Returns the current record's "campo1" value
 * @method string              getCampo2()     Returns the current record's "campo2" value
 * @method string              getCampo3()     Returns the current record's "campo3" value
 * @method string              getCampo4()     Returns the current record's "campo4" value
 * @method string              getDisCen()     Returns the current record's "dis_cen" value
 * @method decimal             getDebAnt()     Returns the current record's "deb_ant" value
 * @method decimal             getHabAnt()     Returns the current record's "hab_ant" value
 * @method string              getCoUsIn()     Returns the current record's "co_us_in" value
 * @method timestamp           getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method string              getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method timestamp           getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method string              getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string              getRevisado()   Returns the current record's "revisado" value
 * @method string              getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string              getCoSucu()     Returns the current record's "co_sucu" value
 * @method string              getRowguid()    Returns the current record's "rowguid" value
 * @method boolean             getInactivo()   Returns the current record's "inactivo" value
 * @method boolean             getGavetaser()  Returns the current record's "gavetaser" value
 * @method boolean             getCajapri()    Returns the current record's "cajapri" value
 * @method boolean             getSidisplay()  Returns the current record's "sidisplay" value
 * @method string              getPuerto()     Returns the current record's "puerto" value
 * @method string              getBitdatos()   Returns the current record's "bitdatos" value
 * @method string              getBitstop()    Returns the current record's "bitstop" value
 * @method string              getParidad()    Returns the current record's "paridad" value
 * @method string              getVelocidad()  Returns the current record's "velocidad" value
 * @method string              getPuerto2()    Returns the current record's "puerto2" value
 * @method string              getBitdatos2()  Returns the current record's "bitdatos2" value
 * @method string              getBitstop2()   Returns the current record's "bitstop2" value
 * @method string              getParidad2()   Returns the current record's "paridad2" value
 * @method string              getGcadena()    Returns the current record's "gcadena" value
 * @method string              getVelocidad2() Returns the current record's "velocidad2" value
 * @method boolean             getCajapvta()   Returns the current record's "cajapvta" value
 * @method boolean             getMvisa()      Returns the current record's "mvisa" value
 * @method integer             getVpostipo()   Returns the current record's "vpostipo" value
 * @method string              getImpfis()     Returns the current record's "impfis" value
 * @method Doctrine_Collection getMovCaj()     Returns the current record's "MovCaj" collection
 * @method Doctrine_Collection getRengDp()     Returns the current record's "RengDp" collection
 * @method Cajas               setCodCaja()    Sets the current record's "cod_caja" value
 * @method Cajas               setDescrip()    Sets the current record's "descrip" value
 * @method Cajas               setMesIni()     Sets the current record's "mes_ini" value
 * @method Cajas               setSaldoI()     Sets the current record's "saldo_i" value
 * @method Cajas               setSaldoEi()    Sets the current record's "saldo_ei" value
 * @method Cajas               setSaldoA()     Sets the current record's "saldo_a" value
 * @method Cajas               setSaldoE()     Sets the current record's "saldo_e" value
 * @method Cajas               setMoneda()     Sets the current record's "moneda" value
 * @method Cajas               setCampo1()     Sets the current record's "campo1" value
 * @method Cajas               setCampo2()     Sets the current record's "campo2" value
 * @method Cajas               setCampo3()     Sets the current record's "campo3" value
 * @method Cajas               setCampo4()     Sets the current record's "campo4" value
 * @method Cajas               setDisCen()     Sets the current record's "dis_cen" value
 * @method Cajas               setDebAnt()     Sets the current record's "deb_ant" value
 * @method Cajas               setHabAnt()     Sets the current record's "hab_ant" value
 * @method Cajas               setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Cajas               setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Cajas               setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Cajas               setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Cajas               setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Cajas               setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Cajas               setRevisado()   Sets the current record's "revisado" value
 * @method Cajas               setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Cajas               setCoSucu()     Sets the current record's "co_sucu" value
 * @method Cajas               setRowguid()    Sets the current record's "rowguid" value
 * @method Cajas               setInactivo()   Sets the current record's "inactivo" value
 * @method Cajas               setGavetaser()  Sets the current record's "gavetaser" value
 * @method Cajas               setCajapri()    Sets the current record's "cajapri" value
 * @method Cajas               setSidisplay()  Sets the current record's "sidisplay" value
 * @method Cajas               setPuerto()     Sets the current record's "puerto" value
 * @method Cajas               setBitdatos()   Sets the current record's "bitdatos" value
 * @method Cajas               setBitstop()    Sets the current record's "bitstop" value
 * @method Cajas               setParidad()    Sets the current record's "paridad" value
 * @method Cajas               setVelocidad()  Sets the current record's "velocidad" value
 * @method Cajas               setPuerto2()    Sets the current record's "puerto2" value
 * @method Cajas               setBitdatos2()  Sets the current record's "bitdatos2" value
 * @method Cajas               setBitstop2()   Sets the current record's "bitstop2" value
 * @method Cajas               setParidad2()   Sets the current record's "paridad2" value
 * @method Cajas               setGcadena()    Sets the current record's "gcadena" value
 * @method Cajas               setVelocidad2() Sets the current record's "velocidad2" value
 * @method Cajas               setCajapvta()   Sets the current record's "cajapvta" value
 * @method Cajas               setMvisa()      Sets the current record's "mvisa" value
 * @method Cajas               setVpostipo()   Sets the current record's "vpostipo" value
 * @method Cajas               setImpfis()     Sets the current record's "impfis" value
 * @method Cajas               setMovCaj()     Sets the current record's "MovCaj" collection
 * @method Cajas               setRengDp()     Sets the current record's "RengDp" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCajas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cajas');
        $this->hasColumn('cod_caja', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
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
        $this->hasColumn('mes_ini', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('saldo_i', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('saldo_ei', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('saldo_a', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('saldo_e', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('moneda', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('campo1', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo2', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo3', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo4', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
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
        $this->hasColumn('deb_ant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('hab_ant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('co_us_in', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fe_us_in', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('co_us_mo', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fe_us_mo', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('co_us_el', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fe_us_el', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
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
        $this->hasColumn('inactivo', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('gavetaser', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cajapri', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('sidisplay', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('puerto', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'1\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bitdatos', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'8\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bitstop', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'1\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('paridad', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'N\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('velocidad', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' 9600\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('puerto2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'1\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bitdatos2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'8\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bitstop2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'1\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('paridad2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'N\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('gcadena', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'AA\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('velocidad2', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' 9600\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('cajapvta', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mvisa', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('vpostipo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '((0))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('impfis', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space((1)))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('MovCaj', array(
             'local' => 'cod_caja',
             'foreign' => 'codigo'));

        $this->hasMany('RengDp', array(
             'local' => 'cod_caja',
             'foreign' => 'codigo'));
    }
}