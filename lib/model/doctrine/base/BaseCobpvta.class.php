<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cobpvta', 'profit');

/**
 * BaseCobpvta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $fact_num
 * @property integer $num_turno
 * @property float $efec1
 * @property float $cheq1
 * @property float $cheq2
 * @property float $tarj1
 * @property float $tarj2
 * @property string $doc_num1
 * @property string $doc_num2
 * @property string $doc_num3
 * @property string $doc_num4
 * @property string $banc_tarj1
 * @property string $banc_tarj2
 * @property string $banc_tarj3
 * @property string $banc_tarj4
 * @property timestamp $fecha_che1
 * @property timestamp $fecha_che2
 * @property timestamp $fecha_che3
 * @property timestamp $fecha_che4
 * @property string $op1
 * @property string $op2
 * @property string $op3
 * @property string $op4
 * @property string $clave1
 * @property string $clave2
 * @property string $clave3
 * @property string $clave4
 * @property string $cobrador
 * @property string $moneda
 * @property float $tasa
 * @property string $co_us_in
 * @property timestamp $fe_us_in
 * @property string $co_us_mo
 * @property timestamp $fe_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_el
 * @property string $revisado
 * @property string $trasnfe
 * @property string $co_sucu
 * @property float $total
 * @property float $vuelto
 * @property string $rowguid
 * @property decimal $aux01
 * @property string $aux02
 * 
 * @method integer   getFactNum()    Returns the current record's "fact_num" value
 * @method integer   getNumTurno()   Returns the current record's "num_turno" value
 * @method float     getEfec1()      Returns the current record's "efec1" value
 * @method float     getCheq1()      Returns the current record's "cheq1" value
 * @method float     getCheq2()      Returns the current record's "cheq2" value
 * @method float     getTarj1()      Returns the current record's "tarj1" value
 * @method float     getTarj2()      Returns the current record's "tarj2" value
 * @method string    getDocNum1()    Returns the current record's "doc_num1" value
 * @method string    getDocNum2()    Returns the current record's "doc_num2" value
 * @method string    getDocNum3()    Returns the current record's "doc_num3" value
 * @method string    getDocNum4()    Returns the current record's "doc_num4" value
 * @method string    getBancTarj1()  Returns the current record's "banc_tarj1" value
 * @method string    getBancTarj2()  Returns the current record's "banc_tarj2" value
 * @method string    getBancTarj3()  Returns the current record's "banc_tarj3" value
 * @method string    getBancTarj4()  Returns the current record's "banc_tarj4" value
 * @method timestamp getFechaChe1()  Returns the current record's "fecha_che1" value
 * @method timestamp getFechaChe2()  Returns the current record's "fecha_che2" value
 * @method timestamp getFechaChe3()  Returns the current record's "fecha_che3" value
 * @method timestamp getFechaChe4()  Returns the current record's "fecha_che4" value
 * @method string    getOp1()        Returns the current record's "op1" value
 * @method string    getOp2()        Returns the current record's "op2" value
 * @method string    getOp3()        Returns the current record's "op3" value
 * @method string    getOp4()        Returns the current record's "op4" value
 * @method string    getClave1()     Returns the current record's "clave1" value
 * @method string    getClave2()     Returns the current record's "clave2" value
 * @method string    getClave3()     Returns the current record's "clave3" value
 * @method string    getClave4()     Returns the current record's "clave4" value
 * @method string    getCobrador()   Returns the current record's "cobrador" value
 * @method string    getMoneda()     Returns the current record's "moneda" value
 * @method float     getTasa()       Returns the current record's "tasa" value
 * @method string    getCoUsIn()     Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string    getRevisado()   Returns the current record's "revisado" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method float     getTotal()      Returns the current record's "total" value
 * @method float     getVuelto()     Returns the current record's "vuelto" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method Cobpvta   setFactNum()    Sets the current record's "fact_num" value
 * @method Cobpvta   setNumTurno()   Sets the current record's "num_turno" value
 * @method Cobpvta   setEfec1()      Sets the current record's "efec1" value
 * @method Cobpvta   setCheq1()      Sets the current record's "cheq1" value
 * @method Cobpvta   setCheq2()      Sets the current record's "cheq2" value
 * @method Cobpvta   setTarj1()      Sets the current record's "tarj1" value
 * @method Cobpvta   setTarj2()      Sets the current record's "tarj2" value
 * @method Cobpvta   setDocNum1()    Sets the current record's "doc_num1" value
 * @method Cobpvta   setDocNum2()    Sets the current record's "doc_num2" value
 * @method Cobpvta   setDocNum3()    Sets the current record's "doc_num3" value
 * @method Cobpvta   setDocNum4()    Sets the current record's "doc_num4" value
 * @method Cobpvta   setBancTarj1()  Sets the current record's "banc_tarj1" value
 * @method Cobpvta   setBancTarj2()  Sets the current record's "banc_tarj2" value
 * @method Cobpvta   setBancTarj3()  Sets the current record's "banc_tarj3" value
 * @method Cobpvta   setBancTarj4()  Sets the current record's "banc_tarj4" value
 * @method Cobpvta   setFechaChe1()  Sets the current record's "fecha_che1" value
 * @method Cobpvta   setFechaChe2()  Sets the current record's "fecha_che2" value
 * @method Cobpvta   setFechaChe3()  Sets the current record's "fecha_che3" value
 * @method Cobpvta   setFechaChe4()  Sets the current record's "fecha_che4" value
 * @method Cobpvta   setOp1()        Sets the current record's "op1" value
 * @method Cobpvta   setOp2()        Sets the current record's "op2" value
 * @method Cobpvta   setOp3()        Sets the current record's "op3" value
 * @method Cobpvta   setOp4()        Sets the current record's "op4" value
 * @method Cobpvta   setClave1()     Sets the current record's "clave1" value
 * @method Cobpvta   setClave2()     Sets the current record's "clave2" value
 * @method Cobpvta   setClave3()     Sets the current record's "clave3" value
 * @method Cobpvta   setClave4()     Sets the current record's "clave4" value
 * @method Cobpvta   setCobrador()   Sets the current record's "cobrador" value
 * @method Cobpvta   setMoneda()     Sets the current record's "moneda" value
 * @method Cobpvta   setTasa()       Sets the current record's "tasa" value
 * @method Cobpvta   setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Cobpvta   setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Cobpvta   setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Cobpvta   setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Cobpvta   setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Cobpvta   setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Cobpvta   setRevisado()   Sets the current record's "revisado" value
 * @method Cobpvta   setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Cobpvta   setCoSucu()     Sets the current record's "co_sucu" value
 * @method Cobpvta   setTotal()      Sets the current record's "total" value
 * @method Cobpvta   setVuelto()     Sets the current record's "vuelto" value
 * @method Cobpvta   setRowguid()    Sets the current record's "rowguid" value
 * @method Cobpvta   setAux01()      Sets the current record's "aux01" value
 * @method Cobpvta   setAux02()      Sets the current record's "aux02" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCobpvta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cobpvta');
        $this->hasColumn('fact_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_turno', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('efec1', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cheq1', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cheq2', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('tarj1', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('tarj2', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('doc_num1', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('doc_num2', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('doc_num3', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('doc_num4', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('banc_tarj1', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('banc_tarj2', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('banc_tarj3', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('banc_tarj4', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('fecha_che1', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('fecha_che2', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('fecha_che3', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('fecha_che4', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('op1', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('op2', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('op3', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('op4', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('clave1', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('clave2', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('clave3', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('clave4', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('cobrador', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('moneda', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('tasa', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
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
        $this->hasColumn('total', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('vuelto', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
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
        $this->hasColumn('aux01', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('aux02', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}