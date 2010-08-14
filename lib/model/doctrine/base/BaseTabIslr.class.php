<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TabIslr', 'profit');

/**
 * BaseTabIslr
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $co_tab
 * @property string $tab_des
 * @property float $rango_ha
 * @property float $rango_de
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
 * @property string $revisado
 * @property string $trasnfe
 * @property string $co_sucu
 * @property string $rowguid
 * @property string $tipo_per
 * 
 * @method integer   getCoTab()    Returns the current record's "co_tab" value
 * @method string    getTabDes()   Returns the current record's "tab_des" value
 * @method float     getRangoHa()  Returns the current record's "rango_ha" value
 * @method float     getRangoDe()  Returns the current record's "rango_de" value
 * @method string    getCampo1()   Returns the current record's "campo1" value
 * @method string    getCampo2()   Returns the current record's "campo2" value
 * @method string    getCampo3()   Returns the current record's "campo3" value
 * @method string    getCampo4()   Returns the current record's "campo4" value
 * @method string    getCampo5()   Returns the current record's "campo5" value
 * @method string    getCampo6()   Returns the current record's "campo6" value
 * @method string    getCampo7()   Returns the current record's "campo7" value
 * @method string    getCampo8()   Returns the current record's "campo8" value
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
 * @method string    getTipoPer()  Returns the current record's "tipo_per" value
 * @method TabIslr   setCoTab()    Sets the current record's "co_tab" value
 * @method TabIslr   setTabDes()   Sets the current record's "tab_des" value
 * @method TabIslr   setRangoHa()  Sets the current record's "rango_ha" value
 * @method TabIslr   setRangoDe()  Sets the current record's "rango_de" value
 * @method TabIslr   setCampo1()   Sets the current record's "campo1" value
 * @method TabIslr   setCampo2()   Sets the current record's "campo2" value
 * @method TabIslr   setCampo3()   Sets the current record's "campo3" value
 * @method TabIslr   setCampo4()   Sets the current record's "campo4" value
 * @method TabIslr   setCampo5()   Sets the current record's "campo5" value
 * @method TabIslr   setCampo6()   Sets the current record's "campo6" value
 * @method TabIslr   setCampo7()   Sets the current record's "campo7" value
 * @method TabIslr   setCampo8()   Sets the current record's "campo8" value
 * @method TabIslr   setCoUsIn()   Sets the current record's "co_us_in" value
 * @method TabIslr   setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method TabIslr   setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method TabIslr   setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method TabIslr   setCoUsEl()   Sets the current record's "co_us_el" value
 * @method TabIslr   setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method TabIslr   setRevisado() Sets the current record's "revisado" value
 * @method TabIslr   setTrasnfe()  Sets the current record's "trasnfe" value
 * @method TabIslr   setCoSucu()   Sets the current record's "co_sucu" value
 * @method TabIslr   setRowguid()  Sets the current record's "rowguid" value
 * @method TabIslr   setTipoPer()  Sets the current record's "tipo_per" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTabIslr extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tab_islr');
        $this->hasColumn('co_tab', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tab_des', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('rango_ha', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('rango_de', 'float', 8, array(
             'type' => 'float',
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
        $this->hasColumn('tipo_per', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
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