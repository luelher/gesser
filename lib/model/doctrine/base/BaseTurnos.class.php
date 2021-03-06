<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Turnos', 'profit');

/**
 * BaseTurnos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_turno
 * @property string $des_turno
 * @property decimal $hora_ini
 * @property decimal $minu_ini
 * @property string $ampm_ini
 * @property decimal $hora_fin
 * @property decimal $minu_fin
 * @property string $ampm_fin
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
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
 * @property Doctrine_Collection $Turnosic
 * 
 * @method string              getCoTurno()   Returns the current record's "co_turno" value
 * @method string              getDesTurno()  Returns the current record's "des_turno" value
 * @method decimal             getHoraIni()   Returns the current record's "hora_ini" value
 * @method decimal             getMinuIni()   Returns the current record's "minu_ini" value
 * @method string              getAmpmIni()   Returns the current record's "ampm_ini" value
 * @method decimal             getHoraFin()   Returns the current record's "hora_fin" value
 * @method decimal             getMinuFin()   Returns the current record's "minu_fin" value
 * @method string              getAmpmFin()   Returns the current record's "ampm_fin" value
 * @method string              getCampo1()    Returns the current record's "campo1" value
 * @method string              getCampo2()    Returns the current record's "campo2" value
 * @method string              getCampo3()    Returns the current record's "campo3" value
 * @method string              getCampo4()    Returns the current record's "campo4" value
 * @method string              getCoUsIn()    Returns the current record's "co_us_in" value
 * @method timestamp           getFeUsIn()    Returns the current record's "fe_us_in" value
 * @method string              getCoUsMo()    Returns the current record's "co_us_mo" value
 * @method timestamp           getFeUsMo()    Returns the current record's "fe_us_mo" value
 * @method string              getCoUsEl()    Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsEl()    Returns the current record's "fe_us_el" value
 * @method string              getRevisado()  Returns the current record's "revisado" value
 * @method string              getTrasnfe()   Returns the current record's "trasnfe" value
 * @method string              getCoSucu()    Returns the current record's "co_sucu" value
 * @method string              getRowguid()   Returns the current record's "rowguid" value
 * @method Doctrine_Collection getTurnosic()  Returns the current record's "Turnosic" collection
 * @method Turnos              setCoTurno()   Sets the current record's "co_turno" value
 * @method Turnos              setDesTurno()  Sets the current record's "des_turno" value
 * @method Turnos              setHoraIni()   Sets the current record's "hora_ini" value
 * @method Turnos              setMinuIni()   Sets the current record's "minu_ini" value
 * @method Turnos              setAmpmIni()   Sets the current record's "ampm_ini" value
 * @method Turnos              setHoraFin()   Sets the current record's "hora_fin" value
 * @method Turnos              setMinuFin()   Sets the current record's "minu_fin" value
 * @method Turnos              setAmpmFin()   Sets the current record's "ampm_fin" value
 * @method Turnos              setCampo1()    Sets the current record's "campo1" value
 * @method Turnos              setCampo2()    Sets the current record's "campo2" value
 * @method Turnos              setCampo3()    Sets the current record's "campo3" value
 * @method Turnos              setCampo4()    Sets the current record's "campo4" value
 * @method Turnos              setCoUsIn()    Sets the current record's "co_us_in" value
 * @method Turnos              setFeUsIn()    Sets the current record's "fe_us_in" value
 * @method Turnos              setCoUsMo()    Sets the current record's "co_us_mo" value
 * @method Turnos              setFeUsMo()    Sets the current record's "fe_us_mo" value
 * @method Turnos              setCoUsEl()    Sets the current record's "co_us_el" value
 * @method Turnos              setFeUsEl()    Sets the current record's "fe_us_el" value
 * @method Turnos              setRevisado()  Sets the current record's "revisado" value
 * @method Turnos              setTrasnfe()   Sets the current record's "trasnfe" value
 * @method Turnos              setCoSucu()    Sets the current record's "co_sucu" value
 * @method Turnos              setRowguid()   Sets the current record's "rowguid" value
 * @method Turnos              setTurnosic()  Sets the current record's "Turnosic" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTurnos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('turnos');
        $this->hasColumn('co_turno', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('des_turno', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
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
        $this->hasColumn('campo1', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo2', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo3', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo4', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
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
        $this->hasMany('Turnosic', array(
             'local' => 'co_turno',
             'foreign' => 'co_turno'));
    }
}