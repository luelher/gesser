<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TabEnc', 'profit');

/**
 * BaseTabEnc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property timestamp $fecha
 * @property decimal $tasa
 * @property decimal $tasag10
 * @property decimal $tasag20
 * @property integer $tipo_imp
 * @property string $co_us_in
 * @property timestamp $fe_us_in
 * @property string $co_us_mo
 * @property timestamp $fe_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_el
 * @property string $revisado
 * @property string $trasnfe
 * @property string $rowguid
 * @property decimal $tasa3
 * @property decimal $tasa4
 * @property decimal $tasa5
 * @property boolean $compras
 * 
 * @method timestamp getFecha()    Returns the current record's "fecha" value
 * @method decimal   getTasa()     Returns the current record's "tasa" value
 * @method decimal   getTasag10()  Returns the current record's "tasag10" value
 * @method decimal   getTasag20()  Returns the current record's "tasag20" value
 * @method integer   getTipoImp()  Returns the current record's "tipo_imp" value
 * @method string    getCoUsIn()   Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method string    getRevisado() Returns the current record's "revisado" value
 * @method string    getTrasnfe()  Returns the current record's "trasnfe" value
 * @method string    getRowguid()  Returns the current record's "rowguid" value
 * @method decimal   getTasa3()    Returns the current record's "tasa3" value
 * @method decimal   getTasa4()    Returns the current record's "tasa4" value
 * @method decimal   getTasa5()    Returns the current record's "tasa5" value
 * @method boolean   getCompras()  Returns the current record's "compras" value
 * @method TabEnc    setFecha()    Sets the current record's "fecha" value
 * @method TabEnc    setTasa()     Sets the current record's "tasa" value
 * @method TabEnc    setTasag10()  Sets the current record's "tasag10" value
 * @method TabEnc    setTasag20()  Sets the current record's "tasag20" value
 * @method TabEnc    setTipoImp()  Sets the current record's "tipo_imp" value
 * @method TabEnc    setCoUsIn()   Sets the current record's "co_us_in" value
 * @method TabEnc    setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method TabEnc    setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method TabEnc    setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method TabEnc    setCoUsEl()   Sets the current record's "co_us_el" value
 * @method TabEnc    setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method TabEnc    setRevisado() Sets the current record's "revisado" value
 * @method TabEnc    setTrasnfe()  Sets the current record's "trasnfe" value
 * @method TabEnc    setRowguid()  Sets the current record's "rowguid" value
 * @method TabEnc    setTasa3()    Sets the current record's "tasa3" value
 * @method TabEnc    setTasa4()    Sets the current record's "tasa4" value
 * @method TabEnc    setTasa5()    Sets the current record's "tasa5" value
 * @method TabEnc    setCompras()  Sets the current record's "compras" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTabEnc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tab_enc');
        $this->hasColumn('fecha', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('tasa', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('tasag10', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('tasag20', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('tipo_imp', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('tasa3', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('tasa4', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('tasa5', 'decimal', 12, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 12,
             ));
        $this->hasColumn('compras', 'boolean', 1, array(
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
        
    }
}