<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Pagos', 'profit');

/**
 * BasePagos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cob_num
 * @property string $recibo
 * @property string $co_cli
 * @property string $co_ven
 * @property timestamp $fec_cob
 * @property boolean $anulado
 * @property decimal $monto
 * @property decimal $dppago
 * @property decimal $mont_ncr
 * @property integer $ncr
 * @property decimal $tcomi_porc
 * @property decimal $tcomi_line
 * @property decimal $tcomi_art
 * @property decimal $tcomi_conc
 * @property timestamp $feccom
 * @property decimal $tasa
 * @property string $moneda
 * @property string $dis_cen
 * @property integer $numcom
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
 * @property integer $adel_num
 * @property string $revisado
 * @property string $trasnfe
 * @property string $co_sucu
 * @property string $rowguid
 * @property string $descrip
 * @property integer $num_dev
 * @property boolean $devdinero
 * @property decimal $aux01
 * @property string $aux02
 * @property string $origen
 * @property string $origen_d
 * @property Prov $Prov
 * @property Moneda $Moneda
 * @property Almacen $Almacen
 * 
 * @method integer   getCobNum()     Returns the current record's "cob_num" value
 * @method string    getRecibo()     Returns the current record's "recibo" value
 * @method string    getCoCli()      Returns the current record's "co_cli" value
 * @method string    getCoVen()      Returns the current record's "co_ven" value
 * @method timestamp getFecCob()     Returns the current record's "fec_cob" value
 * @method boolean   getAnulado()    Returns the current record's "anulado" value
 * @method decimal   getMonto()      Returns the current record's "monto" value
 * @method decimal   getDppago()     Returns the current record's "dppago" value
 * @method decimal   getMontNcr()    Returns the current record's "mont_ncr" value
 * @method integer   getNcr()        Returns the current record's "ncr" value
 * @method decimal   getTcomiPorc()  Returns the current record's "tcomi_porc" value
 * @method decimal   getTcomiLine()  Returns the current record's "tcomi_line" value
 * @method decimal   getTcomiArt()   Returns the current record's "tcomi_art" value
 * @method decimal   getTcomiConc()  Returns the current record's "tcomi_conc" value
 * @method timestamp getFeccom()     Returns the current record's "feccom" value
 * @method decimal   getTasa()       Returns the current record's "tasa" value
 * @method string    getMoneda()     Returns the current record's "moneda" value
 * @method string    getDisCen()     Returns the current record's "dis_cen" value
 * @method integer   getNumcom()     Returns the current record's "numcom" value
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
 * @method integer   getAdelNum()    Returns the current record's "adel_num" value
 * @method string    getRevisado()   Returns the current record's "revisado" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method string    getDescrip()    Returns the current record's "descrip" value
 * @method integer   getNumDev()     Returns the current record's "num_dev" value
 * @method boolean   getDevdinero()  Returns the current record's "devdinero" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method string    getOrigen()     Returns the current record's "origen" value
 * @method string    getOrigenD()    Returns the current record's "origen_d" value
 * @method Prov      getProv()       Returns the current record's "Prov" value
 * @method Moneda    getMoneda()     Returns the current record's "Moneda" value
 * @method Almacen   getAlmacen()    Returns the current record's "Almacen" value
 * @method Pagos     setCobNum()     Sets the current record's "cob_num" value
 * @method Pagos     setRecibo()     Sets the current record's "recibo" value
 * @method Pagos     setCoCli()      Sets the current record's "co_cli" value
 * @method Pagos     setCoVen()      Sets the current record's "co_ven" value
 * @method Pagos     setFecCob()     Sets the current record's "fec_cob" value
 * @method Pagos     setAnulado()    Sets the current record's "anulado" value
 * @method Pagos     setMonto()      Sets the current record's "monto" value
 * @method Pagos     setDppago()     Sets the current record's "dppago" value
 * @method Pagos     setMontNcr()    Sets the current record's "mont_ncr" value
 * @method Pagos     setNcr()        Sets the current record's "ncr" value
 * @method Pagos     setTcomiPorc()  Sets the current record's "tcomi_porc" value
 * @method Pagos     setTcomiLine()  Sets the current record's "tcomi_line" value
 * @method Pagos     setTcomiArt()   Sets the current record's "tcomi_art" value
 * @method Pagos     setTcomiConc()  Sets the current record's "tcomi_conc" value
 * @method Pagos     setFeccom()     Sets the current record's "feccom" value
 * @method Pagos     setTasa()       Sets the current record's "tasa" value
 * @method Pagos     setMoneda()     Sets the current record's "moneda" value
 * @method Pagos     setDisCen()     Sets the current record's "dis_cen" value
 * @method Pagos     setNumcom()     Sets the current record's "numcom" value
 * @method Pagos     setCampo1()     Sets the current record's "campo1" value
 * @method Pagos     setCampo2()     Sets the current record's "campo2" value
 * @method Pagos     setCampo3()     Sets the current record's "campo3" value
 * @method Pagos     setCampo4()     Sets the current record's "campo4" value
 * @method Pagos     setCampo5()     Sets the current record's "campo5" value
 * @method Pagos     setCampo6()     Sets the current record's "campo6" value
 * @method Pagos     setCampo7()     Sets the current record's "campo7" value
 * @method Pagos     setCampo8()     Sets the current record's "campo8" value
 * @method Pagos     setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Pagos     setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Pagos     setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Pagos     setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Pagos     setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Pagos     setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Pagos     setAdelNum()    Sets the current record's "adel_num" value
 * @method Pagos     setRevisado()   Sets the current record's "revisado" value
 * @method Pagos     setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Pagos     setCoSucu()     Sets the current record's "co_sucu" value
 * @method Pagos     setRowguid()    Sets the current record's "rowguid" value
 * @method Pagos     setDescrip()    Sets the current record's "descrip" value
 * @method Pagos     setNumDev()     Sets the current record's "num_dev" value
 * @method Pagos     setDevdinero()  Sets the current record's "devdinero" value
 * @method Pagos     setAux01()      Sets the current record's "aux01" value
 * @method Pagos     setAux02()      Sets the current record's "aux02" value
 * @method Pagos     setOrigen()     Sets the current record's "origen" value
 * @method Pagos     setOrigenD()    Sets the current record's "origen_d" value
 * @method Pagos     setProv()       Sets the current record's "Prov" value
 * @method Pagos     setMoneda()     Sets the current record's "Moneda" value
 * @method Pagos     setAlmacen()    Sets the current record's "Almacen" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePagos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pagos');
        $this->hasColumn('cob_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('recibo', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('co_cli', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('co_ven', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('fec_cob', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('anulado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('monto', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('dppago', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mont_ncr', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ncr', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tcomi_porc', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tcomi_line', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tcomi_art', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tcomi_conc', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('feccom', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'01/01/1900\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('tasa', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('dis_cen', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('numcom', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('adel_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('descrip', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('num_dev', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('devdinero', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasColumn('origen', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => false,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('origen_d', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => false,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Prov', array(
             'local' => 'co_cli',
             'foreign' => 'co_prov'));

        $this->hasOne('Moneda', array(
             'local' => 'moneda',
             'foreign' => 'co_mone'));

        $this->hasOne('Almacen', array(
             'local' => 'co_sucu',
             'foreign' => 'co_alma'));
    }
}