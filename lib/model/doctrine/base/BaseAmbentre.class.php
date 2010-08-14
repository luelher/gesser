<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ambentre', 'profit');

/**
 * BaseAmbentre
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $amb_usua
 * @property boolean $ent_num
 * @property boolean $almacen
 * @property boolean $almacend
 * @property string $co_alma
 * @property boolean $bt_serial
 * @property boolean $bt_anulo
 * @property boolean $bt_reversa
 * @property boolean $fecha
 * @property boolean $bt_confirm
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $co_us_in
 * @property string $co_es_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_in
 * @property timestamp $fe_us_mo
 * @property timestamp $fe_us_el
 * @property string $rowguid
 * @property boolean $odp_num
 * @property boolean $ent_des
 * @property boolean $bt_decon
 * @property string $trasnfe
 * 
 * @method string    getAmbUsua()    Returns the current record's "amb_usua" value
 * @method boolean   getEntNum()     Returns the current record's "ent_num" value
 * @method boolean   getAlmacen()    Returns the current record's "almacen" value
 * @method boolean   getAlmacend()   Returns the current record's "almacend" value
 * @method string    getCoAlma()     Returns the current record's "co_alma" value
 * @method boolean   getBtSerial()   Returns the current record's "bt_serial" value
 * @method boolean   getBtAnulo()    Returns the current record's "bt_anulo" value
 * @method boolean   getBtReversa()  Returns the current record's "bt_reversa" value
 * @method boolean   getFecha()      Returns the current record's "fecha" value
 * @method boolean   getBtConfirm()  Returns the current record's "bt_confirm" value
 * @method string    getCampo1()     Returns the current record's "campo1" value
 * @method string    getCampo2()     Returns the current record's "campo2" value
 * @method string    getCampo3()     Returns the current record's "campo3" value
 * @method string    getCampo4()     Returns the current record's "campo4" value
 * @method string    getCampo5()     Returns the current record's "campo5" value
 * @method string    getCampo6()     Returns the current record's "campo6" value
 * @method string    getCampo7()     Returns the current record's "campo7" value
 * @method string    getCampo8()     Returns the current record's "campo8" value
 * @method string    getCoUsIn()     Returns the current record's "co_us_in" value
 * @method string    getCoEsMo()     Returns the current record's "co_es_mo" value
 * @method string    getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method timestamp getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method timestamp getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method boolean   getOdpNum()     Returns the current record's "odp_num" value
 * @method boolean   getEntDes()     Returns the current record's "ent_des" value
 * @method boolean   getBtDecon()    Returns the current record's "bt_decon" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method Ambentre  setAmbUsua()    Sets the current record's "amb_usua" value
 * @method Ambentre  setEntNum()     Sets the current record's "ent_num" value
 * @method Ambentre  setAlmacen()    Sets the current record's "almacen" value
 * @method Ambentre  setAlmacend()   Sets the current record's "almacend" value
 * @method Ambentre  setCoAlma()     Sets the current record's "co_alma" value
 * @method Ambentre  setBtSerial()   Sets the current record's "bt_serial" value
 * @method Ambentre  setBtAnulo()    Sets the current record's "bt_anulo" value
 * @method Ambentre  setBtReversa()  Sets the current record's "bt_reversa" value
 * @method Ambentre  setFecha()      Sets the current record's "fecha" value
 * @method Ambentre  setBtConfirm()  Sets the current record's "bt_confirm" value
 * @method Ambentre  setCampo1()     Sets the current record's "campo1" value
 * @method Ambentre  setCampo2()     Sets the current record's "campo2" value
 * @method Ambentre  setCampo3()     Sets the current record's "campo3" value
 * @method Ambentre  setCampo4()     Sets the current record's "campo4" value
 * @method Ambentre  setCampo5()     Sets the current record's "campo5" value
 * @method Ambentre  setCampo6()     Sets the current record's "campo6" value
 * @method Ambentre  setCampo7()     Sets the current record's "campo7" value
 * @method Ambentre  setCampo8()     Sets the current record's "campo8" value
 * @method Ambentre  setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Ambentre  setCoEsMo()     Sets the current record's "co_es_mo" value
 * @method Ambentre  setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Ambentre  setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Ambentre  setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Ambentre  setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Ambentre  setRowguid()    Sets the current record's "rowguid" value
 * @method Ambentre  setOdpNum()     Sets the current record's "odp_num" value
 * @method Ambentre  setEntDes()     Sets the current record's "ent_des" value
 * @method Ambentre  setBtDecon()    Sets the current record's "bt_decon" value
 * @method Ambentre  setTrasnfe()    Sets the current record's "trasnfe" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmbentre extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ambentre');
        $this->hasColumn('amb_usua', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ent_num', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('almacen', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('almacend', 'boolean', 1, array(
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
        $this->hasColumn('bt_serial', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_anulo', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_reversa', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('fecha', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_confirm', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasColumn('campo5', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo6', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo7', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo8', 'string', 30, array(
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
        $this->hasColumn('co_es_mo', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('odp_num', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('ent_des', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_decon', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('trasnfe', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(0))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}