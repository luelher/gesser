<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoCli', 'profit');

/**
 * BaseTipoCli
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tip_cli
 * @property string $des_tipo
 * @property string $precio_a
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
 * @property timestamp $row_id
 * @property Doctrine_Collection $Clientes
 * 
 * @method string              getTipCli()   Returns the current record's "tip_cli" value
 * @method string              getDesTipo()  Returns the current record's "des_tipo" value
 * @method string              getPrecioA()  Returns the current record's "precio_a" value
 * @method string              getCampo1()   Returns the current record's "campo1" value
 * @method string              getCampo2()   Returns the current record's "campo2" value
 * @method string              getCampo3()   Returns the current record's "campo3" value
 * @method string              getCampo4()   Returns the current record's "campo4" value
 * @method string              getCoUsIn()   Returns the current record's "co_us_in" value
 * @method timestamp           getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method string              getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method timestamp           getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method string              getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method string              getRevisado() Returns the current record's "revisado" value
 * @method string              getTrasnfe()  Returns the current record's "trasnfe" value
 * @method string              getCoSucu()   Returns the current record's "co_sucu" value
 * @method string              getRowguid()  Returns the current record's "rowguid" value
 * @method timestamp           getRowId()    Returns the current record's "row_id" value
 * @method Doctrine_Collection getClientes() Returns the current record's "Clientes" collection
 * @method TipoCli             setTipCli()   Sets the current record's "tip_cli" value
 * @method TipoCli             setDesTipo()  Sets the current record's "des_tipo" value
 * @method TipoCli             setPrecioA()  Sets the current record's "precio_a" value
 * @method TipoCli             setCampo1()   Sets the current record's "campo1" value
 * @method TipoCli             setCampo2()   Sets the current record's "campo2" value
 * @method TipoCli             setCampo3()   Sets the current record's "campo3" value
 * @method TipoCli             setCampo4()   Sets the current record's "campo4" value
 * @method TipoCli             setCoUsIn()   Sets the current record's "co_us_in" value
 * @method TipoCli             setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method TipoCli             setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method TipoCli             setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method TipoCli             setCoUsEl()   Sets the current record's "co_us_el" value
 * @method TipoCli             setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method TipoCli             setRevisado() Sets the current record's "revisado" value
 * @method TipoCli             setTrasnfe()  Sets the current record's "trasnfe" value
 * @method TipoCli             setCoSucu()   Sets the current record's "co_sucu" value
 * @method TipoCli             setRowguid()  Sets the current record's "rowguid" value
 * @method TipoCli             setRowId()    Sets the current record's "row_id" value
 * @method TipoCli             setClientes() Sets the current record's "Clientes" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoCli extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_cli');
        $this->hasColumn('tip_cli', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('des_tipo', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('precio_a', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('row_id', 'timestamp', 8, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Clientes', array(
             'local' => 'tip_cli',
             'foreign' => 'tipo'));
    }
}