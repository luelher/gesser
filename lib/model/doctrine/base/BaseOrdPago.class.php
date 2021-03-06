<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OrdPago', 'profit');

/**
 * BaseOrdPago
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ord_num
 * @property string $status
 * @property timestamp $fecha
 * @property string $cod_ben
 * @property string $descrip
 * @property string $forma_pag
 * @property decimal $monto
 * @property string $tipo_imp
 * @property timestamp $fec_pag
 * @property string $cod_cta
 * @property string $cheque
 * @property string $cod_caja
 * @property integer $mov_num
 * @property string $cta_egre
 * @property timestamp $feccom
 * @property string $dis_cen
 * @property integer $numcom
 * @property decimal $tasa
 * @property string $moneda
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
 * @property integer $mov_islr
 * @property boolean $sino_reten
 * @property boolean $reng_si
 * @property decimal $monto_reten
 * @property decimal $monto_obj
 * @property decimal $sustraen
 * @property string $co_islr
 * @property integer $pagar
 * @property boolean $anulada
 * @property decimal $porc_retn
 * @property decimal $aux01
 * @property string $aux02
 * @property string $salestax
 * @property string $origen
 * @property string $origen_d
 * @property Benefici $Benefici
 * @property CtaIngr $CtaIngr
 * @property Almacen $Almacen
 * 
 * @method integer   getOrdNum()      Returns the current record's "ord_num" value
 * @method string    getStatus()      Returns the current record's "status" value
 * @method timestamp getFecha()       Returns the current record's "fecha" value
 * @method string    getCodBen()      Returns the current record's "cod_ben" value
 * @method string    getDescrip()     Returns the current record's "descrip" value
 * @method string    getFormaPag()    Returns the current record's "forma_pag" value
 * @method decimal   getMonto()       Returns the current record's "monto" value
 * @method string    getTipoImp()     Returns the current record's "tipo_imp" value
 * @method timestamp getFecPag()      Returns the current record's "fec_pag" value
 * @method string    getCodCta()      Returns the current record's "cod_cta" value
 * @method string    getCheque()      Returns the current record's "cheque" value
 * @method string    getCodCaja()     Returns the current record's "cod_caja" value
 * @method integer   getMovNum()      Returns the current record's "mov_num" value
 * @method string    getCtaEgre()     Returns the current record's "cta_egre" value
 * @method timestamp getFeccom()      Returns the current record's "feccom" value
 * @method string    getDisCen()      Returns the current record's "dis_cen" value
 * @method integer   getNumcom()      Returns the current record's "numcom" value
 * @method decimal   getTasa()        Returns the current record's "tasa" value
 * @method string    getMoneda()      Returns the current record's "moneda" value
 * @method string    getCampo1()      Returns the current record's "campo1" value
 * @method string    getCampo2()      Returns the current record's "campo2" value
 * @method string    getCampo3()      Returns the current record's "campo3" value
 * @method string    getCampo4()      Returns the current record's "campo4" value
 * @method string    getCampo5()      Returns the current record's "campo5" value
 * @method string    getCampo6()      Returns the current record's "campo6" value
 * @method string    getCampo7()      Returns the current record's "campo7" value
 * @method string    getCampo8()      Returns the current record's "campo8" value
 * @method string    getCoUsIn()      Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()      Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()      Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()      Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()      Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()      Returns the current record's "fe_us_el" value
 * @method string    getRevisado()    Returns the current record's "revisado" value
 * @method string    getTrasnfe()     Returns the current record's "trasnfe" value
 * @method string    getCoSucu()      Returns the current record's "co_sucu" value
 * @method string    getRowguid()     Returns the current record's "rowguid" value
 * @method integer   getMovIslr()     Returns the current record's "mov_islr" value
 * @method boolean   getSinoReten()   Returns the current record's "sino_reten" value
 * @method boolean   getRengSi()      Returns the current record's "reng_si" value
 * @method decimal   getMontoReten()  Returns the current record's "monto_reten" value
 * @method decimal   getMontoObj()    Returns the current record's "monto_obj" value
 * @method decimal   getSustraen()    Returns the current record's "sustraen" value
 * @method string    getCoIslr()      Returns the current record's "co_islr" value
 * @method integer   getPagar()       Returns the current record's "pagar" value
 * @method boolean   getAnulada()     Returns the current record's "anulada" value
 * @method decimal   getPorcRetn()    Returns the current record's "porc_retn" value
 * @method decimal   getAux01()       Returns the current record's "aux01" value
 * @method string    getAux02()       Returns the current record's "aux02" value
 * @method string    getSalestax()    Returns the current record's "salestax" value
 * @method string    getOrigen()      Returns the current record's "origen" value
 * @method string    getOrigenD()     Returns the current record's "origen_d" value
 * @method Benefici  getBenefici()    Returns the current record's "Benefici" value
 * @method CtaIngr   getCtaIngr()     Returns the current record's "CtaIngr" value
 * @method Almacen   getAlmacen()     Returns the current record's "Almacen" value
 * @method OrdPago   setOrdNum()      Sets the current record's "ord_num" value
 * @method OrdPago   setStatus()      Sets the current record's "status" value
 * @method OrdPago   setFecha()       Sets the current record's "fecha" value
 * @method OrdPago   setCodBen()      Sets the current record's "cod_ben" value
 * @method OrdPago   setDescrip()     Sets the current record's "descrip" value
 * @method OrdPago   setFormaPag()    Sets the current record's "forma_pag" value
 * @method OrdPago   setMonto()       Sets the current record's "monto" value
 * @method OrdPago   setTipoImp()     Sets the current record's "tipo_imp" value
 * @method OrdPago   setFecPag()      Sets the current record's "fec_pag" value
 * @method OrdPago   setCodCta()      Sets the current record's "cod_cta" value
 * @method OrdPago   setCheque()      Sets the current record's "cheque" value
 * @method OrdPago   setCodCaja()     Sets the current record's "cod_caja" value
 * @method OrdPago   setMovNum()      Sets the current record's "mov_num" value
 * @method OrdPago   setCtaEgre()     Sets the current record's "cta_egre" value
 * @method OrdPago   setFeccom()      Sets the current record's "feccom" value
 * @method OrdPago   setDisCen()      Sets the current record's "dis_cen" value
 * @method OrdPago   setNumcom()      Sets the current record's "numcom" value
 * @method OrdPago   setTasa()        Sets the current record's "tasa" value
 * @method OrdPago   setMoneda()      Sets the current record's "moneda" value
 * @method OrdPago   setCampo1()      Sets the current record's "campo1" value
 * @method OrdPago   setCampo2()      Sets the current record's "campo2" value
 * @method OrdPago   setCampo3()      Sets the current record's "campo3" value
 * @method OrdPago   setCampo4()      Sets the current record's "campo4" value
 * @method OrdPago   setCampo5()      Sets the current record's "campo5" value
 * @method OrdPago   setCampo6()      Sets the current record's "campo6" value
 * @method OrdPago   setCampo7()      Sets the current record's "campo7" value
 * @method OrdPago   setCampo8()      Sets the current record's "campo8" value
 * @method OrdPago   setCoUsIn()      Sets the current record's "co_us_in" value
 * @method OrdPago   setFeUsIn()      Sets the current record's "fe_us_in" value
 * @method OrdPago   setCoUsMo()      Sets the current record's "co_us_mo" value
 * @method OrdPago   setFeUsMo()      Sets the current record's "fe_us_mo" value
 * @method OrdPago   setCoUsEl()      Sets the current record's "co_us_el" value
 * @method OrdPago   setFeUsEl()      Sets the current record's "fe_us_el" value
 * @method OrdPago   setRevisado()    Sets the current record's "revisado" value
 * @method OrdPago   setTrasnfe()     Sets the current record's "trasnfe" value
 * @method OrdPago   setCoSucu()      Sets the current record's "co_sucu" value
 * @method OrdPago   setRowguid()     Sets the current record's "rowguid" value
 * @method OrdPago   setMovIslr()     Sets the current record's "mov_islr" value
 * @method OrdPago   setSinoReten()   Sets the current record's "sino_reten" value
 * @method OrdPago   setRengSi()      Sets the current record's "reng_si" value
 * @method OrdPago   setMontoReten()  Sets the current record's "monto_reten" value
 * @method OrdPago   setMontoObj()    Sets the current record's "monto_obj" value
 * @method OrdPago   setSustraen()    Sets the current record's "sustraen" value
 * @method OrdPago   setCoIslr()      Sets the current record's "co_islr" value
 * @method OrdPago   setPagar()       Sets the current record's "pagar" value
 * @method OrdPago   setAnulada()     Sets the current record's "anulada" value
 * @method OrdPago   setPorcRetn()    Sets the current record's "porc_retn" value
 * @method OrdPago   setAux01()       Sets the current record's "aux01" value
 * @method OrdPago   setAux02()       Sets the current record's "aux02" value
 * @method OrdPago   setSalestax()    Sets the current record's "salestax" value
 * @method OrdPago   setOrigen()      Sets the current record's "origen" value
 * @method OrdPago   setOrigenD()     Sets the current record's "origen_d" value
 * @method OrdPago   setBenefici()    Sets the current record's "Benefici" value
 * @method OrdPago   setCtaIngr()     Sets the current record's "CtaIngr" value
 * @method OrdPago   setAlmacen()     Sets the current record's "Almacen" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrdPago extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ord_pago');
        $this->hasColumn('ord_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('fecha', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('cod_ben', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('descrip', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('forma_pag', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
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
        $this->hasColumn('tipo_imp', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('fec_pag', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('cod_cta', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('cheque', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cod_caja', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('mov_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cta_egre', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
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
        $this->hasColumn('mov_islr', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('sino_reten', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('reng_si', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('monto_reten', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('monto_obj', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('sustraen', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('co_islr', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('pagar', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('anulada', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('porc_retn', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('salestax', 'string', 8, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('origen', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('origen_d', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Benefici', array(
             'local' => 'cod_ben',
             'foreign' => 'cod_ben'));

        $this->hasOne('CtaIngr', array(
             'local' => 'cta_egre',
             'foreign' => 'co_ingr'));

        $this->hasOne('Almacen', array(
             'local' => 'co_sucu',
             'foreign' => 'co_alma'));
    }
}