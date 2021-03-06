<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Spmaq', 'profit');

/**
 * BaseSpmaq
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_maq
 * @property string $maq_des
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $co_us_in
 * @property string $co_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_in
 * @property timestamp $fe_us_mo
 * @property timestamp $fe_us_el
 * @property string $rowguid
 * @property string $co_sucu
 * @property string $revisado
 * @property string $trasnfe
 * @property Doctrine_Collection $RengTar
 * @property Doctrine_Collection $Spparmaq
 * 
 * @method string              getCoMaq()    Returns the current record's "co_maq" value
 * @method string              getMaqDes()   Returns the current record's "maq_des" value
 * @method string              getCampo1()   Returns the current record's "campo1" value
 * @method string              getCampo2()   Returns the current record's "campo2" value
 * @method string              getCampo3()   Returns the current record's "campo3" value
 * @method string              getCampo4()   Returns the current record's "campo4" value
 * @method string              getCoUsIn()   Returns the current record's "co_us_in" value
 * @method string              getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method string              getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method timestamp           getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method timestamp           getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method string              getRowguid()  Returns the current record's "rowguid" value
 * @method string              getCoSucu()   Returns the current record's "co_sucu" value
 * @method string              getRevisado() Returns the current record's "revisado" value
 * @method string              getTrasnfe()  Returns the current record's "trasnfe" value
 * @method Doctrine_Collection getRengTar()  Returns the current record's "RengTar" collection
 * @method Doctrine_Collection getSpparmaq() Returns the current record's "Spparmaq" collection
 * @method Spmaq               setCoMaq()    Sets the current record's "co_maq" value
 * @method Spmaq               setMaqDes()   Sets the current record's "maq_des" value
 * @method Spmaq               setCampo1()   Sets the current record's "campo1" value
 * @method Spmaq               setCampo2()   Sets the current record's "campo2" value
 * @method Spmaq               setCampo3()   Sets the current record's "campo3" value
 * @method Spmaq               setCampo4()   Sets the current record's "campo4" value
 * @method Spmaq               setCoUsIn()   Sets the current record's "co_us_in" value
 * @method Spmaq               setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method Spmaq               setCoUsEl()   Sets the current record's "co_us_el" value
 * @method Spmaq               setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method Spmaq               setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method Spmaq               setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method Spmaq               setRowguid()  Sets the current record's "rowguid" value
 * @method Spmaq               setCoSucu()   Sets the current record's "co_sucu" value
 * @method Spmaq               setRevisado() Sets the current record's "revisado" value
 * @method Spmaq               setTrasnfe()  Sets the current record's "trasnfe" value
 * @method Spmaq               setRengTar()  Sets the current record's "RengTar" collection
 * @method Spmaq               setSpparmaq() Sets the current record's "Spparmaq" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpmaq extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('spmaq');
        $this->hasColumn('co_maq', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('maq_des', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo1', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo2', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo3', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo4', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('co_us_in', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('co_us_mo', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('co_us_el', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\' \')',
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
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('RengTar', array(
             'local' => 'co_maq',
             'foreign' => 'co_maq'));

        $this->hasMany('Spparmaq', array(
             'local' => 'co_maq',
             'foreign' => 'co_maq'));
    }
}