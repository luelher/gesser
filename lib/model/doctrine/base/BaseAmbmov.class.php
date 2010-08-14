<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ambmov', 'profit');

/**
 * BaseAmbmov
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $amb_usua
 * @property string $tipo_movi
 * @property boolean $mov_numv
 * @property boolean $codigov
 * @property boolean $codigod
 * @property string $codigo
 * @property boolean $tipo_opv
 * @property boolean $tipo_opd
 * @property string $tipo_op
 * @property boolean $forma_pagv
 * @property boolean $forma_pagd
 * @property string $forma_pag
 * @property boolean $fechav
 * @property boolean $doc_numv
 * @property boolean $descripv
 * @property boolean $montov
 * @property boolean $cta_egrev
 * @property boolean $cta_egred
 * @property string $cta_egre
 * @property boolean $banc_tarjv
 * @property boolean $banc_tarjd
 * @property string $banc_tarj
 * @property boolean $bt_reverv
 * @property boolean $bt_anulav
 * @property boolean $tasav
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
 * @method string    getAmbUsua()    Returns the current record's "amb_usua" value
 * @method string    getTipoMovi()   Returns the current record's "tipo_movi" value
 * @method boolean   getMovNumv()    Returns the current record's "mov_numv" value
 * @method boolean   getCodigov()    Returns the current record's "codigov" value
 * @method boolean   getCodigod()    Returns the current record's "codigod" value
 * @method string    getCodigo()     Returns the current record's "codigo" value
 * @method boolean   getTipoOpv()    Returns the current record's "tipo_opv" value
 * @method boolean   getTipoOpd()    Returns the current record's "tipo_opd" value
 * @method string    getTipoOp()     Returns the current record's "tipo_op" value
 * @method boolean   getFormaPagv()  Returns the current record's "forma_pagv" value
 * @method boolean   getFormaPagd()  Returns the current record's "forma_pagd" value
 * @method string    getFormaPag()   Returns the current record's "forma_pag" value
 * @method boolean   getFechav()     Returns the current record's "fechav" value
 * @method boolean   getDocNumv()    Returns the current record's "doc_numv" value
 * @method boolean   getDescripv()   Returns the current record's "descripv" value
 * @method boolean   getMontov()     Returns the current record's "montov" value
 * @method boolean   getCtaEgrev()   Returns the current record's "cta_egrev" value
 * @method boolean   getCtaEgred()   Returns the current record's "cta_egred" value
 * @method string    getCtaEgre()    Returns the current record's "cta_egre" value
 * @method boolean   getBancTarjv()  Returns the current record's "banc_tarjv" value
 * @method boolean   getBancTarjd()  Returns the current record's "banc_tarjd" value
 * @method string    getBancTarj()   Returns the current record's "banc_tarj" value
 * @method boolean   getBtReverv()   Returns the current record's "bt_reverv" value
 * @method boolean   getBtAnulav()   Returns the current record's "bt_anulav" value
 * @method boolean   getTasav()      Returns the current record's "tasav" value
 * @method string    getCoUsIn()     Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string    getRevisado()   Returns the current record's "revisado" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method Ambmov    setAmbUsua()    Sets the current record's "amb_usua" value
 * @method Ambmov    setTipoMovi()   Sets the current record's "tipo_movi" value
 * @method Ambmov    setMovNumv()    Sets the current record's "mov_numv" value
 * @method Ambmov    setCodigov()    Sets the current record's "codigov" value
 * @method Ambmov    setCodigod()    Sets the current record's "codigod" value
 * @method Ambmov    setCodigo()     Sets the current record's "codigo" value
 * @method Ambmov    setTipoOpv()    Sets the current record's "tipo_opv" value
 * @method Ambmov    setTipoOpd()    Sets the current record's "tipo_opd" value
 * @method Ambmov    setTipoOp()     Sets the current record's "tipo_op" value
 * @method Ambmov    setFormaPagv()  Sets the current record's "forma_pagv" value
 * @method Ambmov    setFormaPagd()  Sets the current record's "forma_pagd" value
 * @method Ambmov    setFormaPag()   Sets the current record's "forma_pag" value
 * @method Ambmov    setFechav()     Sets the current record's "fechav" value
 * @method Ambmov    setDocNumv()    Sets the current record's "doc_numv" value
 * @method Ambmov    setDescripv()   Sets the current record's "descripv" value
 * @method Ambmov    setMontov()     Sets the current record's "montov" value
 * @method Ambmov    setCtaEgrev()   Sets the current record's "cta_egrev" value
 * @method Ambmov    setCtaEgred()   Sets the current record's "cta_egred" value
 * @method Ambmov    setCtaEgre()    Sets the current record's "cta_egre" value
 * @method Ambmov    setBancTarjv()  Sets the current record's "banc_tarjv" value
 * @method Ambmov    setBancTarjd()  Sets the current record's "banc_tarjd" value
 * @method Ambmov    setBancTarj()   Sets the current record's "banc_tarj" value
 * @method Ambmov    setBtReverv()   Sets the current record's "bt_reverv" value
 * @method Ambmov    setBtAnulav()   Sets the current record's "bt_anulav" value
 * @method Ambmov    setTasav()      Sets the current record's "tasav" value
 * @method Ambmov    setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Ambmov    setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Ambmov    setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Ambmov    setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Ambmov    setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Ambmov    setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Ambmov    setRevisado()   Sets the current record's "revisado" value
 * @method Ambmov    setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Ambmov    setCoSucu()     Sets the current record's "co_sucu" value
 * @method Ambmov    setRowguid()    Sets the current record's "rowguid" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmbmov extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ambmov');
        $this->hasColumn('amb_usua', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tipo_movi', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('mov_numv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('codigov', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('codigod', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('codigo', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('tipo_opv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('tipo_opd', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('tipo_op', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('forma_pagv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('forma_pagd', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasColumn('fechav', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('doc_numv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('descripv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('montov', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cta_egrev', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cta_egred', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
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
        $this->hasColumn('banc_tarjv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('banc_tarjd', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('banc_tarj', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('bt_reverv', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('bt_anulav', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('tasav', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
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