<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Import', 'profit');

/**
 * BaseImport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $imp_num
 * @property string $status
 * @property timestamp $fec_imp
 * @property string $descrip
 * @property string $co_mone
 * @property string $co_sucu
 * @property string $trasnfe
 * @property string $revisado
 * @property string $co_us_in
 * @property timestamp $fe_us_in
 * @property string $co_us_mo
 * @property timestamp $fe_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_el
 * @property integer $ajus_num
 * @property string $n_cost_b
 * @property string $rowguid
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property decimal $tasa
 * @property integer $d_gasto
 * @property Moneda $Moneda
 * @property Doctrine_Collection $ExpImp
 * @property Doctrine_Collection $RengAco
 * @property Doctrine_Collection $RengAim
 * 
 * @method integer             getImpNum()   Returns the current record's "imp_num" value
 * @method string              getStatus()   Returns the current record's "status" value
 * @method timestamp           getFecImp()   Returns the current record's "fec_imp" value
 * @method string              getDescrip()  Returns the current record's "descrip" value
 * @method string              getCoMone()   Returns the current record's "co_mone" value
 * @method string              getCoSucu()   Returns the current record's "co_sucu" value
 * @method string              getTrasnfe()  Returns the current record's "trasnfe" value
 * @method string              getRevisado() Returns the current record's "revisado" value
 * @method string              getCoUsIn()   Returns the current record's "co_us_in" value
 * @method timestamp           getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method string              getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method timestamp           getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method string              getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method integer             getAjusNum()  Returns the current record's "ajus_num" value
 * @method string              getNCostB()   Returns the current record's "n_cost_b" value
 * @method string              getRowguid()  Returns the current record's "rowguid" value
 * @method string              getCampo1()   Returns the current record's "campo1" value
 * @method string              getCampo2()   Returns the current record's "campo2" value
 * @method string              getCampo3()   Returns the current record's "campo3" value
 * @method string              getCampo4()   Returns the current record's "campo4" value
 * @method string              getCampo5()   Returns the current record's "campo5" value
 * @method string              getCampo6()   Returns the current record's "campo6" value
 * @method string              getCampo7()   Returns the current record's "campo7" value
 * @method string              getCampo8()   Returns the current record's "campo8" value
 * @method decimal             getTasa()     Returns the current record's "tasa" value
 * @method integer             getDGasto()   Returns the current record's "d_gasto" value
 * @method Moneda              getMoneda()   Returns the current record's "Moneda" value
 * @method Doctrine_Collection getExpImp()   Returns the current record's "ExpImp" collection
 * @method Doctrine_Collection getRengAco()  Returns the current record's "RengAco" collection
 * @method Doctrine_Collection getRengAim()  Returns the current record's "RengAim" collection
 * @method Import              setImpNum()   Sets the current record's "imp_num" value
 * @method Import              setStatus()   Sets the current record's "status" value
 * @method Import              setFecImp()   Sets the current record's "fec_imp" value
 * @method Import              setDescrip()  Sets the current record's "descrip" value
 * @method Import              setCoMone()   Sets the current record's "co_mone" value
 * @method Import              setCoSucu()   Sets the current record's "co_sucu" value
 * @method Import              setTrasnfe()  Sets the current record's "trasnfe" value
 * @method Import              setRevisado() Sets the current record's "revisado" value
 * @method Import              setCoUsIn()   Sets the current record's "co_us_in" value
 * @method Import              setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method Import              setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method Import              setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method Import              setCoUsEl()   Sets the current record's "co_us_el" value
 * @method Import              setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method Import              setAjusNum()  Sets the current record's "ajus_num" value
 * @method Import              setNCostB()   Sets the current record's "n_cost_b" value
 * @method Import              setRowguid()  Sets the current record's "rowguid" value
 * @method Import              setCampo1()   Sets the current record's "campo1" value
 * @method Import              setCampo2()   Sets the current record's "campo2" value
 * @method Import              setCampo3()   Sets the current record's "campo3" value
 * @method Import              setCampo4()   Sets the current record's "campo4" value
 * @method Import              setCampo5()   Sets the current record's "campo5" value
 * @method Import              setCampo6()   Sets the current record's "campo6" value
 * @method Import              setCampo7()   Sets the current record's "campo7" value
 * @method Import              setCampo8()   Sets the current record's "campo8" value
 * @method Import              setTasa()     Sets the current record's "tasa" value
 * @method Import              setDGasto()   Sets the current record's "d_gasto" value
 * @method Import              setMoneda()   Sets the current record's "Moneda" value
 * @method Import              setExpImp()   Sets the current record's "ExpImp" collection
 * @method Import              setRengAco()  Sets the current record's "RengAco" collection
 * @method Import              setRengAim()  Sets the current record's "RengAim" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseImport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('import');
        $this->hasColumn('imp_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('fec_imp', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('descrip', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('co_mone', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
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
        $this->hasColumn('ajus_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('n_cost_b', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('tasa', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('d_gasto', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Moneda', array(
             'local' => 'co_mone',
             'foreign' => 'co_mone'));

        $this->hasMany('ExpImp', array(
             'local' => 'imp_num',
             'foreign' => 'imp_num'));

        $this->hasMany('RengAco', array(
             'local' => 'imp_num',
             'foreign' => 'imp_num'));

        $this->hasMany('RengAim', array(
             'local' => 'imp_num',
             'foreign' => 'imp_num'));
    }
}