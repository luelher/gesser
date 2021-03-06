<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Fallas', 'profit');

/**
 * BaseFallas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_falla
 * @property string $falla_des
 * @property string $co_lin
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
 * 
 * @method string    getCoFalla()   Returns the current record's "co_falla" value
 * @method string    getFallaDes()  Returns the current record's "falla_des" value
 * @method string    getCoLin()     Returns the current record's "co_lin" value
 * @method string    getCampo1()    Returns the current record's "campo1" value
 * @method string    getCampo2()    Returns the current record's "campo2" value
 * @method string    getCampo3()    Returns the current record's "campo3" value
 * @method string    getCampo4()    Returns the current record's "campo4" value
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
 * @method Fallas    setCoFalla()   Sets the current record's "co_falla" value
 * @method Fallas    setFallaDes()  Sets the current record's "falla_des" value
 * @method Fallas    setCoLin()     Sets the current record's "co_lin" value
 * @method Fallas    setCampo1()    Sets the current record's "campo1" value
 * @method Fallas    setCampo2()    Sets the current record's "campo2" value
 * @method Fallas    setCampo3()    Sets the current record's "campo3" value
 * @method Fallas    setCampo4()    Sets the current record's "campo4" value
 * @method Fallas    setCoUsIn()    Sets the current record's "co_us_in" value
 * @method Fallas    setFeUsIn()    Sets the current record's "fe_us_in" value
 * @method Fallas    setCoUsMo()    Sets the current record's "co_us_mo" value
 * @method Fallas    setFeUsMo()    Sets the current record's "fe_us_mo" value
 * @method Fallas    setCoUsEl()    Sets the current record's "co_us_el" value
 * @method Fallas    setFeUsEl()    Sets the current record's "fe_us_el" value
 * @method Fallas    setRevisado()  Sets the current record's "revisado" value
 * @method Fallas    setTrasnfe()   Sets the current record's "trasnfe" value
 * @method Fallas    setCoSucu()    Sets the current record's "co_sucu" value
 * @method Fallas    setRowguid()   Sets the current record's "rowguid" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFallas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('fallas');
        $this->hasColumn('co_falla', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('falla_des', 'string', 50, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('co_lin', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
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
        
    }
}