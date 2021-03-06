<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ImpMun', 'profit');

/**
 * BaseImpMun
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_imp
 * @property string $imp_des
 * @property decimal $alicuota
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
 * @property string $co_alma
 * @property string $n_act
 * @property decimal $m_trib
 * @property Almacen $Almacen
 * 
 * @method string    getCoImp()    Returns the current record's "co_imp" value
 * @method string    getImpDes()   Returns the current record's "imp_des" value
 * @method decimal   getAlicuota() Returns the current record's "alicuota" value
 * @method string    getCampo1()   Returns the current record's "campo1" value
 * @method string    getCampo2()   Returns the current record's "campo2" value
 * @method string    getCampo3()   Returns the current record's "campo3" value
 * @method string    getCampo4()   Returns the current record's "campo4" value
 * @method string    getCoUsIn()   Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method string    getRevisado() Returns the current record's "revisado" value
 * @method string    getTrasnfe()  Returns the current record's "trasnfe" value
 * @method string    getCoSucu()   Returns the current record's "co_sucu" value
 * @method string    getRowguid()  Returns the current record's "rowguid" value
 * @method string    getCoAlma()   Returns the current record's "co_alma" value
 * @method string    getNAct()     Returns the current record's "n_act" value
 * @method decimal   getMTrib()    Returns the current record's "m_trib" value
 * @method Almacen   getAlmacen()  Returns the current record's "Almacen" value
 * @method ImpMun    setCoImp()    Sets the current record's "co_imp" value
 * @method ImpMun    setImpDes()   Sets the current record's "imp_des" value
 * @method ImpMun    setAlicuota() Sets the current record's "alicuota" value
 * @method ImpMun    setCampo1()   Sets the current record's "campo1" value
 * @method ImpMun    setCampo2()   Sets the current record's "campo2" value
 * @method ImpMun    setCampo3()   Sets the current record's "campo3" value
 * @method ImpMun    setCampo4()   Sets the current record's "campo4" value
 * @method ImpMun    setCoUsIn()   Sets the current record's "co_us_in" value
 * @method ImpMun    setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method ImpMun    setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method ImpMun    setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method ImpMun    setCoUsEl()   Sets the current record's "co_us_el" value
 * @method ImpMun    setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method ImpMun    setRevisado() Sets the current record's "revisado" value
 * @method ImpMun    setTrasnfe()  Sets the current record's "trasnfe" value
 * @method ImpMun    setCoSucu()   Sets the current record's "co_sucu" value
 * @method ImpMun    setRowguid()  Sets the current record's "rowguid" value
 * @method ImpMun    setCoAlma()   Sets the current record's "co_alma" value
 * @method ImpMun    setNAct()     Sets the current record's "n_act" value
 * @method ImpMun    setMTrib()    Sets the current record's "m_trib" value
 * @method ImpMun    setAlmacen()  Sets the current record's "Almacen" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseImpMun extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('imp_mun');
        $this->hasColumn('co_imp', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('imp_des', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('alicuota', 'decimal', 8, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
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
        $this->hasColumn('co_alma', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('n_act', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('m_trib', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Almacen', array(
             'local' => 'co_alma',
             'foreign' => 'co_alma'));
    }
}