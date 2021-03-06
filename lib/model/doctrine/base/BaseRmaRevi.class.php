<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RmaRevi', 'profit');

/**
 * BaseRmaRevi
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_revi
 * @property string $des_revi
 * @property string $trevision
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
 * @property Doctrine_Collection $RengRmc
 * 
 * @method string              getCoRevi()    Returns the current record's "co_revi" value
 * @method string              getDesRevi()   Returns the current record's "des_revi" value
 * @method string              getTrevision() Returns the current record's "trevision" value
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
 * @method Doctrine_Collection getRengRmc()   Returns the current record's "RengRmc" collection
 * @method RmaRevi             setCoRevi()    Sets the current record's "co_revi" value
 * @method RmaRevi             setDesRevi()   Sets the current record's "des_revi" value
 * @method RmaRevi             setTrevision() Sets the current record's "trevision" value
 * @method RmaRevi             setCampo1()    Sets the current record's "campo1" value
 * @method RmaRevi             setCampo2()    Sets the current record's "campo2" value
 * @method RmaRevi             setCampo3()    Sets the current record's "campo3" value
 * @method RmaRevi             setCampo4()    Sets the current record's "campo4" value
 * @method RmaRevi             setCoUsIn()    Sets the current record's "co_us_in" value
 * @method RmaRevi             setFeUsIn()    Sets the current record's "fe_us_in" value
 * @method RmaRevi             setCoUsMo()    Sets the current record's "co_us_mo" value
 * @method RmaRevi             setFeUsMo()    Sets the current record's "fe_us_mo" value
 * @method RmaRevi             setCoUsEl()    Sets the current record's "co_us_el" value
 * @method RmaRevi             setFeUsEl()    Sets the current record's "fe_us_el" value
 * @method RmaRevi             setRevisado()  Sets the current record's "revisado" value
 * @method RmaRevi             setTrasnfe()   Sets the current record's "trasnfe" value
 * @method RmaRevi             setCoSucu()    Sets the current record's "co_sucu" value
 * @method RmaRevi             setRowguid()   Sets the current record's "rowguid" value
 * @method RmaRevi             setRengRmc()   Sets the current record's "RengRmc" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRmaRevi extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rma_revi');
        $this->hasColumn('co_revi', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('des_revi', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('trevision', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
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
        $this->hasMany('RengRmc', array(
             'local' => 'co_revi',
             'foreign' => 'co_revi'));
    }
}