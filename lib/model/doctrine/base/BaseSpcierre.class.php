<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Spcierre', 'profit');

/**
 * BaseSpcierre
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ent_num
 * @property integer $odp_num
 * @property timestamp $fec_emis
 * @property boolean $confirma
 * @property integer $aju_num
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $co_us_in
 * @property string $co_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_in
 * @property timestamp $fe_us_mo
 * @property timestamp $fe_us_el
 * @property string $rowguid
 * @property string $co_sucu
 * @property string $cie_des
 * @property boolean $anulado
 * @property string $co_sub
 * @property string $comentario
 * @property timestamp $fec_conf
 * @property string $dis_cen
 * @property integer $numcom
 * @property timestamp $feccom
 * @property decimal $gasadi
 * @property decimal $moadi
 * @property integer $seriales
 * @property string $trasnfe
 * @property Spodp $Spodp
 * @property SubAlma $SubAlma
 * @property Doctrine_Collection $RengCie
 * 
 * @method integer             getEntNum()     Returns the current record's "ent_num" value
 * @method integer             getOdpNum()     Returns the current record's "odp_num" value
 * @method timestamp           getFecEmis()    Returns the current record's "fec_emis" value
 * @method boolean             getConfirma()   Returns the current record's "confirma" value
 * @method integer             getAjuNum()     Returns the current record's "aju_num" value
 * @method string              getCampo1()     Returns the current record's "campo1" value
 * @method string              getCampo2()     Returns the current record's "campo2" value
 * @method string              getCampo3()     Returns the current record's "campo3" value
 * @method string              getCampo4()     Returns the current record's "campo4" value
 * @method string              getCampo5()     Returns the current record's "campo5" value
 * @method string              getCampo6()     Returns the current record's "campo6" value
 * @method string              getCampo7()     Returns the current record's "campo7" value
 * @method string              getCampo8()     Returns the current record's "campo8" value
 * @method string              getCoUsIn()     Returns the current record's "co_us_in" value
 * @method string              getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method string              getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method timestamp           getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method timestamp           getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string              getRowguid()    Returns the current record's "rowguid" value
 * @method string              getCoSucu()     Returns the current record's "co_sucu" value
 * @method string              getCieDes()     Returns the current record's "cie_des" value
 * @method boolean             getAnulado()    Returns the current record's "anulado" value
 * @method string              getCoSub()      Returns the current record's "co_sub" value
 * @method string              getComentario() Returns the current record's "comentario" value
 * @method timestamp           getFecConf()    Returns the current record's "fec_conf" value
 * @method string              getDisCen()     Returns the current record's "dis_cen" value
 * @method integer             getNumcom()     Returns the current record's "numcom" value
 * @method timestamp           getFeccom()     Returns the current record's "feccom" value
 * @method decimal             getGasadi()     Returns the current record's "gasadi" value
 * @method decimal             getMoadi()      Returns the current record's "moadi" value
 * @method integer             getSeriales()   Returns the current record's "seriales" value
 * @method string              getTrasnfe()    Returns the current record's "trasnfe" value
 * @method Spodp               getSpodp()      Returns the current record's "Spodp" value
 * @method SubAlma             getSubAlma()    Returns the current record's "SubAlma" value
 * @method Doctrine_Collection getRengCie()    Returns the current record's "RengCie" collection
 * @method Spcierre            setEntNum()     Sets the current record's "ent_num" value
 * @method Spcierre            setOdpNum()     Sets the current record's "odp_num" value
 * @method Spcierre            setFecEmis()    Sets the current record's "fec_emis" value
 * @method Spcierre            setConfirma()   Sets the current record's "confirma" value
 * @method Spcierre            setAjuNum()     Sets the current record's "aju_num" value
 * @method Spcierre            setCampo1()     Sets the current record's "campo1" value
 * @method Spcierre            setCampo2()     Sets the current record's "campo2" value
 * @method Spcierre            setCampo3()     Sets the current record's "campo3" value
 * @method Spcierre            setCampo4()     Sets the current record's "campo4" value
 * @method Spcierre            setCampo5()     Sets the current record's "campo5" value
 * @method Spcierre            setCampo6()     Sets the current record's "campo6" value
 * @method Spcierre            setCampo7()     Sets the current record's "campo7" value
 * @method Spcierre            setCampo8()     Sets the current record's "campo8" value
 * @method Spcierre            setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Spcierre            setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Spcierre            setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Spcierre            setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Spcierre            setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Spcierre            setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Spcierre            setRowguid()    Sets the current record's "rowguid" value
 * @method Spcierre            setCoSucu()     Sets the current record's "co_sucu" value
 * @method Spcierre            setCieDes()     Sets the current record's "cie_des" value
 * @method Spcierre            setAnulado()    Sets the current record's "anulado" value
 * @method Spcierre            setCoSub()      Sets the current record's "co_sub" value
 * @method Spcierre            setComentario() Sets the current record's "comentario" value
 * @method Spcierre            setFecConf()    Sets the current record's "fec_conf" value
 * @method Spcierre            setDisCen()     Sets the current record's "dis_cen" value
 * @method Spcierre            setNumcom()     Sets the current record's "numcom" value
 * @method Spcierre            setFeccom()     Sets the current record's "feccom" value
 * @method Spcierre            setGasadi()     Sets the current record's "gasadi" value
 * @method Spcierre            setMoadi()      Sets the current record's "moadi" value
 * @method Spcierre            setSeriales()   Sets the current record's "seriales" value
 * @method Spcierre            setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Spcierre            setSpodp()      Sets the current record's "Spodp" value
 * @method Spcierre            setSubAlma()    Sets the current record's "SubAlma" value
 * @method Spcierre            setRengCie()    Sets the current record's "RengCie" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpcierre extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('spcierre');
        $this->hasColumn('ent_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('odp_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fec_emis', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('confirma', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('aju_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('campo5', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo6', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo7', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('campo8', 'string', 30, array(
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
        $this->hasColumn('cie_des', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
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
        $this->hasColumn('co_sub', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('comentario', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('fec_conf', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
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
        $this->hasColumn('feccom', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('gasadi', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('moadi', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('seriales', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasOne('Spodp', array(
             'local' => 'odp_num',
             'foreign' => 'odp_num'));

        $this->hasOne('SubAlma', array(
             'local' => 'co_sub',
             'foreign' => 'co_sub'));

        $this->hasMany('RengCie', array(
             'local' => 'ent_num',
             'foreign' => 'ent_num'));
    }
}