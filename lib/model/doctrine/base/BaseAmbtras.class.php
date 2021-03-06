<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ambtras', 'profit');

/**
 * BaseAmbtras
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $amb_usua
 * @property boolean $tras_num
 * @property boolean $almaori
 * @property boolean $almorid
 * @property string $alma_ori
 * @property boolean $almades
 * @property boolean $almdesd
 * @property string $alma_des
 * @property boolean $fecha
 * @property boolean $motivo
 * @property boolean $bt_ser
 * @property boolean $bt_anula
 * @property boolean $bt_reversa
 * @property boolean $confirma
 * @property boolean $desconfima
 * @property boolean $stock_neg
 * @property boolean $pstock_neg
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $co_us_in
 * @property timestamp $fe_us_in
 * @property string $co_us_mo
 * @property timestamp $fe_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_el
 * @property string $co_sucu
 * @property string $rowguid
 * @property boolean $p_lotefec
 * @property Almacen $Almacen
 * 
 * @method string    getAmbUsua()    Returns the current record's "amb_usua" value
 * @method boolean   getTrasNum()    Returns the current record's "tras_num" value
 * @method boolean   getAlmaori()    Returns the current record's "almaori" value
 * @method boolean   getAlmorid()    Returns the current record's "almorid" value
 * @method string    getAlmaOri()    Returns the current record's "alma_ori" value
 * @method boolean   getAlmades()    Returns the current record's "almades" value
 * @method boolean   getAlmdesd()    Returns the current record's "almdesd" value
 * @method string    getAlmaDes()    Returns the current record's "alma_des" value
 * @method boolean   getFecha()      Returns the current record's "fecha" value
 * @method boolean   getMotivo()     Returns the current record's "motivo" value
 * @method boolean   getBtSer()      Returns the current record's "bt_ser" value
 * @method boolean   getBtAnula()    Returns the current record's "bt_anula" value
 * @method boolean   getBtReversa()  Returns the current record's "bt_reversa" value
 * @method boolean   getConfirma()   Returns the current record's "confirma" value
 * @method boolean   getDesconfima() Returns the current record's "desconfima" value
 * @method boolean   getStockNeg()   Returns the current record's "stock_neg" value
 * @method boolean   getPstockNeg()  Returns the current record's "pstock_neg" value
 * @method string    getCampo1()     Returns the current record's "campo1" value
 * @method string    getCampo2()     Returns the current record's "campo2" value
 * @method string    getCampo3()     Returns the current record's "campo3" value
 * @method string    getCampo4()     Returns the current record's "campo4" value
 * @method string    getCampo5()     Returns the current record's "campo5" value
 * @method string    getCampo6()     Returns the current record's "campo6" value
 * @method string    getCampo7()     Returns the current record's "campo7" value
 * @method string    getCampo8()     Returns the current record's "campo8" value
 * @method string    getCoUsIn()     Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method boolean   getPLotefec()   Returns the current record's "p_lotefec" value
 * @method Almacen   getAlmacen()    Returns the current record's "Almacen" value
 * @method Ambtras   setAmbUsua()    Sets the current record's "amb_usua" value
 * @method Ambtras   setTrasNum()    Sets the current record's "tras_num" value
 * @method Ambtras   setAlmaori()    Sets the current record's "almaori" value
 * @method Ambtras   setAlmorid()    Sets the current record's "almorid" value
 * @method Ambtras   setAlmaOri()    Sets the current record's "alma_ori" value
 * @method Ambtras   setAlmades()    Sets the current record's "almades" value
 * @method Ambtras   setAlmdesd()    Sets the current record's "almdesd" value
 * @method Ambtras   setAlmaDes()    Sets the current record's "alma_des" value
 * @method Ambtras   setFecha()      Sets the current record's "fecha" value
 * @method Ambtras   setMotivo()     Sets the current record's "motivo" value
 * @method Ambtras   setBtSer()      Sets the current record's "bt_ser" value
 * @method Ambtras   setBtAnula()    Sets the current record's "bt_anula" value
 * @method Ambtras   setBtReversa()  Sets the current record's "bt_reversa" value
 * @method Ambtras   setConfirma()   Sets the current record's "confirma" value
 * @method Ambtras   setDesconfima() Sets the current record's "desconfima" value
 * @method Ambtras   setStockNeg()   Sets the current record's "stock_neg" value
 * @method Ambtras   setPstockNeg()  Sets the current record's "pstock_neg" value
 * @method Ambtras   setCampo1()     Sets the current record's "campo1" value
 * @method Ambtras   setCampo2()     Sets the current record's "campo2" value
 * @method Ambtras   setCampo3()     Sets the current record's "campo3" value
 * @method Ambtras   setCampo4()     Sets the current record's "campo4" value
 * @method Ambtras   setCampo5()     Sets the current record's "campo5" value
 * @method Ambtras   setCampo6()     Sets the current record's "campo6" value
 * @method Ambtras   setCampo7()     Sets the current record's "campo7" value
 * @method Ambtras   setCampo8()     Sets the current record's "campo8" value
 * @method Ambtras   setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Ambtras   setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Ambtras   setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Ambtras   setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Ambtras   setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Ambtras   setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Ambtras   setCoSucu()     Sets the current record's "co_sucu" value
 * @method Ambtras   setRowguid()    Sets the current record's "rowguid" value
 * @method Ambtras   setPLotefec()   Sets the current record's "p_lotefec" value
 * @method Ambtras   setAlmacen()    Sets the current record's "Almacen" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmbtras extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ambtras');
        $this->hasColumn('amb_usua', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tras_num', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('almaori', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('almorid', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('alma_ori', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('almades', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('almdesd', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('alma_des', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('fecha', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('motivo', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_ser', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_anula', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_reversa', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('confirma', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('desconfima', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('stock_neg', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('pstock_neg', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasColumn('campo5', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo6', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo7', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo8', 'string', 60, array(
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
        $this->hasColumn('p_lotefec', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Almacen', array(
             'local' => 'co_sucu',
             'foreign' => 'co_alma'));
    }
}