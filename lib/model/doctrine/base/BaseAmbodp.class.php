<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ambodp', 'profit');

/**
 * BaseAmbodp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $amb_usua
 * @property boolean $monum_odp
 * @property boolean $mopriorid
 * @property boolean $prioridad
 * @property integer $vaprioridad
 * @property boolean $mofe_emis
 * @property boolean $mofe_inic
 * @property boolean $mofe_fin
 * @property boolean $moco_ced
 * @property boolean $bt_anulo
 * @property boolean $bt_reversa
 * @property boolean $importar
 * @property string $rowguid
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $co_us_in
 * @property string $co_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_in
 * @property timestamp $fe_us_mo
 * @property timestamp $fe_us_el
 * 
 * @method string    getAmbUsua()     Returns the current record's "amb_usua" value
 * @method boolean   getMonumOdp()    Returns the current record's "monum_odp" value
 * @method boolean   getMopriorid()   Returns the current record's "mopriorid" value
 * @method boolean   getPrioridad()   Returns the current record's "prioridad" value
 * @method integer   getVaprioridad() Returns the current record's "vaprioridad" value
 * @method boolean   getMofeEmis()    Returns the current record's "mofe_emis" value
 * @method boolean   getMofeInic()    Returns the current record's "mofe_inic" value
 * @method boolean   getMofeFin()     Returns the current record's "mofe_fin" value
 * @method boolean   getMocoCed()     Returns the current record's "moco_ced" value
 * @method boolean   getBtAnulo()     Returns the current record's "bt_anulo" value
 * @method boolean   getBtReversa()   Returns the current record's "bt_reversa" value
 * @method boolean   getImportar()    Returns the current record's "importar" value
 * @method string    getRowguid()     Returns the current record's "rowguid" value
 * @method string    getCampo1()      Returns the current record's "campo1" value
 * @method string    getCampo2()      Returns the current record's "campo2" value
 * @method string    getCampo3()      Returns the current record's "campo3" value
 * @method string    getCampo4()      Returns the current record's "campo4" value
 * @method string    getCampo5()      Returns the current record's "campo5" value
 * @method string    getCampo6()      Returns the current record's "campo6" value
 * @method string    getCampo7()      Returns the current record's "campo7" value
 * @method string    getCampo8()      Returns the current record's "campo8" value
 * @method string    getCoUsIn()      Returns the current record's "co_us_in" value
 * @method string    getCoUsMo()      Returns the current record's "co_us_mo" value
 * @method string    getCoUsEl()      Returns the current record's "co_us_el" value
 * @method timestamp getFeUsIn()      Returns the current record's "fe_us_in" value
 * @method timestamp getFeUsMo()      Returns the current record's "fe_us_mo" value
 * @method timestamp getFeUsEl()      Returns the current record's "fe_us_el" value
 * @method Ambodp    setAmbUsua()     Sets the current record's "amb_usua" value
 * @method Ambodp    setMonumOdp()    Sets the current record's "monum_odp" value
 * @method Ambodp    setMopriorid()   Sets the current record's "mopriorid" value
 * @method Ambodp    setPrioridad()   Sets the current record's "prioridad" value
 * @method Ambodp    setVaprioridad() Sets the current record's "vaprioridad" value
 * @method Ambodp    setMofeEmis()    Sets the current record's "mofe_emis" value
 * @method Ambodp    setMofeInic()    Sets the current record's "mofe_inic" value
 * @method Ambodp    setMofeFin()     Sets the current record's "mofe_fin" value
 * @method Ambodp    setMocoCed()     Sets the current record's "moco_ced" value
 * @method Ambodp    setBtAnulo()     Sets the current record's "bt_anulo" value
 * @method Ambodp    setBtReversa()   Sets the current record's "bt_reversa" value
 * @method Ambodp    setImportar()    Sets the current record's "importar" value
 * @method Ambodp    setRowguid()     Sets the current record's "rowguid" value
 * @method Ambodp    setCampo1()      Sets the current record's "campo1" value
 * @method Ambodp    setCampo2()      Sets the current record's "campo2" value
 * @method Ambodp    setCampo3()      Sets the current record's "campo3" value
 * @method Ambodp    setCampo4()      Sets the current record's "campo4" value
 * @method Ambodp    setCampo5()      Sets the current record's "campo5" value
 * @method Ambodp    setCampo6()      Sets the current record's "campo6" value
 * @method Ambodp    setCampo7()      Sets the current record's "campo7" value
 * @method Ambodp    setCampo8()      Sets the current record's "campo8" value
 * @method Ambodp    setCoUsIn()      Sets the current record's "co_us_in" value
 * @method Ambodp    setCoUsMo()      Sets the current record's "co_us_mo" value
 * @method Ambodp    setCoUsEl()      Sets the current record's "co_us_el" value
 * @method Ambodp    setFeUsIn()      Sets the current record's "fe_us_in" value
 * @method Ambodp    setFeUsMo()      Sets the current record's "fe_us_mo" value
 * @method Ambodp    setFeUsEl()      Sets the current record's "fe_us_el" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmbodp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ambodp');
        $this->hasColumn('amb_usua', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('monum_odp', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mopriorid', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('prioridad', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('vaprioridad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('mofe_emis', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mofe_inic', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mofe_fin', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('moco_ced', 'boolean', 1, array(
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
        $this->hasColumn('importar', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
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
        $this->hasColumn('co_us_in', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('co_us_mo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('co_us_el', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}