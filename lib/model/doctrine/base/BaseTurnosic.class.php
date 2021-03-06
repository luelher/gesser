<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Turnosic', 'profit');

/**
 * BaseTurnosic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_turno
 * @property string $cod_caja
 * @property float $saldo
 * @property integer $num_turno
 * @property string $user_caj
 * @property string $user_sup
 * @property timestamp $fecha
 * @property timestamp $inicio
 * @property timestamp $finaliza
 * @property decimal $status
 * @property boolean $restringe
 * @property decimal $hora_ini
 * @property decimal $minu_ini
 * @property string $ampm_ini
 * @property decimal $hora_fin
 * @property decimal $minu_fin
 * @property string $ampm_fin
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
 * @property Turnos $Turnos
 * @property Almacen $Almacen
 * 
 * @method string    getCoTurno()   Returns the current record's "co_turno" value
 * @method string    getCodCaja()   Returns the current record's "cod_caja" value
 * @method float     getSaldo()     Returns the current record's "saldo" value
 * @method integer   getNumTurno()  Returns the current record's "num_turno" value
 * @method string    getUserCaj()   Returns the current record's "user_caj" value
 * @method string    getUserSup()   Returns the current record's "user_sup" value
 * @method timestamp getFecha()     Returns the current record's "fecha" value
 * @method timestamp getInicio()    Returns the current record's "inicio" value
 * @method timestamp getFinaliza()  Returns the current record's "finaliza" value
 * @method decimal   getStatus()    Returns the current record's "status" value
 * @method boolean   getRestringe() Returns the current record's "restringe" value
 * @method decimal   getHoraIni()   Returns the current record's "hora_ini" value
 * @method decimal   getMinuIni()   Returns the current record's "minu_ini" value
 * @method string    getAmpmIni()   Returns the current record's "ampm_ini" value
 * @method decimal   getHoraFin()   Returns the current record's "hora_fin" value
 * @method decimal   getMinuFin()   Returns the current record's "minu_fin" value
 * @method string    getAmpmFin()   Returns the current record's "ampm_fin" value
 * @method string    getCoUsIn()    Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()    Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()    Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()    Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()    Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()    Returns the current record's "fe_us_el" value
 * @method string    getRevisado()  Returns the current record's "revisado" value
 * @method string    getTrasnfe()   Returns the current record's "trasnfe" value
 * @method string    getCoSucu()    Returns the current record's "co_sucu" value
 * @method string    getRowguid()   Returns the current record's "rowguid" value
 * @method Turnos    getTurnos()    Returns the current record's "Turnos" value
 * @method Almacen   getAlmacen()   Returns the current record's "Almacen" value
 * @method Turnosic  setCoTurno()   Sets the current record's "co_turno" value
 * @method Turnosic  setCodCaja()   Sets the current record's "cod_caja" value
 * @method Turnosic  setSaldo()     Sets the current record's "saldo" value
 * @method Turnosic  setNumTurno()  Sets the current record's "num_turno" value
 * @method Turnosic  setUserCaj()   Sets the current record's "user_caj" value
 * @method Turnosic  setUserSup()   Sets the current record's "user_sup" value
 * @method Turnosic  setFecha()     Sets the current record's "fecha" value
 * @method Turnosic  setInicio()    Sets the current record's "inicio" value
 * @method Turnosic  setFinaliza()  Sets the current record's "finaliza" value
 * @method Turnosic  setStatus()    Sets the current record's "status" value
 * @method Turnosic  setRestringe() Sets the current record's "restringe" value
 * @method Turnosic  setHoraIni()   Sets the current record's "hora_ini" value
 * @method Turnosic  setMinuIni()   Sets the current record's "minu_ini" value
 * @method Turnosic  setAmpmIni()   Sets the current record's "ampm_ini" value
 * @method Turnosic  setHoraFin()   Sets the current record's "hora_fin" value
 * @method Turnosic  setMinuFin()   Sets the current record's "minu_fin" value
 * @method Turnosic  setAmpmFin()   Sets the current record's "ampm_fin" value
 * @method Turnosic  setCoUsIn()    Sets the current record's "co_us_in" value
 * @method Turnosic  setFeUsIn()    Sets the current record's "fe_us_in" value
 * @method Turnosic  setCoUsMo()    Sets the current record's "co_us_mo" value
 * @method Turnosic  setFeUsMo()    Sets the current record's "fe_us_mo" value
 * @method Turnosic  setCoUsEl()    Sets the current record's "co_us_el" value
 * @method Turnosic  setFeUsEl()    Sets the current record's "fe_us_el" value
 * @method Turnosic  setRevisado()  Sets the current record's "revisado" value
 * @method Turnosic  setTrasnfe()   Sets the current record's "trasnfe" value
 * @method Turnosic  setCoSucu()    Sets the current record's "co_sucu" value
 * @method Turnosic  setRowguid()   Sets the current record's "rowguid" value
 * @method Turnosic  setTurnos()    Sets the current record's "Turnos" value
 * @method Turnosic  setAlmacen()   Sets the current record's "Almacen" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTurnosic extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('turnosic');
        $this->hasColumn('co_turno', 'string', 6, array(
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
        $this->hasColumn('saldo', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('num_turno', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('user_caj', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('user_sup', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('inicio', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('finaliza', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('status', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('restringe', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('hora_ini', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('minu_ini', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('ampm_ini', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('hora_fin', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('minu_fin', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('ampm_fin', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Turnos', array(
             'local' => 'co_turno',
             'foreign' => 'co_turno'));

        $this->hasOne('Almacen', array(
             'local' => 'co_sucu',
             'foreign' => 'co_alma'));
    }
}