<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Spodp', 'profit');

/**
 * BaseSpodp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $odp_num
 * @property string $co_art
 * @property integer $co_ced
 * @property decimal $ca_art
 * @property timestamp $fe_inic
 * @property timestamp $fe_fin
 * @property integer $prioridad
 * @property string $edo_odp
 * @property integer $num_maqblo
 * @property decimal $ct_estim
 * @property string $co_us_in
 * @property string $co_us_mo
 * @property string $co_us_el
 * @property timestamp $fe_us_in
 * @property timestamp $fe_us_mo
 * @property timestamp $fe_us_el
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campo8
 * @property string $rowguid
 * @property timestamp $fe_emis
 * @property string $descrip
 * @property string $comentario
 * @property string $co_sucu
 * @property boolean $anulado
 * @property string $dis_cen
 * @property decimal $mp_cant
 * @property decimal $mo_cant
 * @property decimal $gf_cant
 * @property decimal $men_cant
 * @property decimal $mem_cant
 * @property decimal $oi_cant
 * @property string $trasnfe
 * @property decimal $total_uni
 * @property string $uni_venta
 * @property integer $codpcom
 * @property integer $nodpcom
 * @property integer $doc_ori
 * @property Spced $Spced
 * @property Doctrine_Collection $RengOdp
 * @property Doctrine_Collection $Spcierre
 * @property Doctrine_Collection $Spentre
 * 
 * @method integer             getOdpNum()     Returns the current record's "odp_num" value
 * @method string              getCoArt()      Returns the current record's "co_art" value
 * @method integer             getCoCed()      Returns the current record's "co_ced" value
 * @method decimal             getCaArt()      Returns the current record's "ca_art" value
 * @method timestamp           getFeInic()     Returns the current record's "fe_inic" value
 * @method timestamp           getFeFin()      Returns the current record's "fe_fin" value
 * @method integer             getPrioridad()  Returns the current record's "prioridad" value
 * @method string              getEdoOdp()     Returns the current record's "edo_odp" value
 * @method integer             getNumMaqblo()  Returns the current record's "num_maqblo" value
 * @method decimal             getCtEstim()    Returns the current record's "ct_estim" value
 * @method string              getCoUsIn()     Returns the current record's "co_us_in" value
 * @method string              getCoUsMo()     Returns the current record's "co_us_mo" value
 * @method string              getCoUsEl()     Returns the current record's "co_us_el" value
 * @method timestamp           getFeUsIn()     Returns the current record's "fe_us_in" value
 * @method timestamp           getFeUsMo()     Returns the current record's "fe_us_mo" value
 * @method timestamp           getFeUsEl()     Returns the current record's "fe_us_el" value
 * @method string              getCampo1()     Returns the current record's "campo1" value
 * @method string              getCampo2()     Returns the current record's "campo2" value
 * @method string              getCampo3()     Returns the current record's "campo3" value
 * @method string              getCampo4()     Returns the current record's "campo4" value
 * @method string              getCampo5()     Returns the current record's "campo5" value
 * @method string              getCampo6()     Returns the current record's "campo6" value
 * @method string              getCampo7()     Returns the current record's "campo7" value
 * @method string              getCampo8()     Returns the current record's "campo8" value
 * @method string              getRowguid()    Returns the current record's "rowguid" value
 * @method timestamp           getFeEmis()     Returns the current record's "fe_emis" value
 * @method string              getDescrip()    Returns the current record's "descrip" value
 * @method string              getComentario() Returns the current record's "comentario" value
 * @method string              getCoSucu()     Returns the current record's "co_sucu" value
 * @method boolean             getAnulado()    Returns the current record's "anulado" value
 * @method string              getDisCen()     Returns the current record's "dis_cen" value
 * @method decimal             getMpCant()     Returns the current record's "mp_cant" value
 * @method decimal             getMoCant()     Returns the current record's "mo_cant" value
 * @method decimal             getGfCant()     Returns the current record's "gf_cant" value
 * @method decimal             getMenCant()    Returns the current record's "men_cant" value
 * @method decimal             getMemCant()    Returns the current record's "mem_cant" value
 * @method decimal             getOiCant()     Returns the current record's "oi_cant" value
 * @method string              getTrasnfe()    Returns the current record's "trasnfe" value
 * @method decimal             getTotalUni()   Returns the current record's "total_uni" value
 * @method string              getUniVenta()   Returns the current record's "uni_venta" value
 * @method integer             getCodpcom()    Returns the current record's "codpcom" value
 * @method integer             getNodpcom()    Returns the current record's "nodpcom" value
 * @method integer             getDocOri()     Returns the current record's "doc_ori" value
 * @method Spced               getSpced()      Returns the current record's "Spced" value
 * @method Doctrine_Collection getRengOdp()    Returns the current record's "RengOdp" collection
 * @method Doctrine_Collection getSpcierre()   Returns the current record's "Spcierre" collection
 * @method Doctrine_Collection getSpentre()    Returns the current record's "Spentre" collection
 * @method Spodp               setOdpNum()     Sets the current record's "odp_num" value
 * @method Spodp               setCoArt()      Sets the current record's "co_art" value
 * @method Spodp               setCoCed()      Sets the current record's "co_ced" value
 * @method Spodp               setCaArt()      Sets the current record's "ca_art" value
 * @method Spodp               setFeInic()     Sets the current record's "fe_inic" value
 * @method Spodp               setFeFin()      Sets the current record's "fe_fin" value
 * @method Spodp               setPrioridad()  Sets the current record's "prioridad" value
 * @method Spodp               setEdoOdp()     Sets the current record's "edo_odp" value
 * @method Spodp               setNumMaqblo()  Sets the current record's "num_maqblo" value
 * @method Spodp               setCtEstim()    Sets the current record's "ct_estim" value
 * @method Spodp               setCoUsIn()     Sets the current record's "co_us_in" value
 * @method Spodp               setCoUsMo()     Sets the current record's "co_us_mo" value
 * @method Spodp               setCoUsEl()     Sets the current record's "co_us_el" value
 * @method Spodp               setFeUsIn()     Sets the current record's "fe_us_in" value
 * @method Spodp               setFeUsMo()     Sets the current record's "fe_us_mo" value
 * @method Spodp               setFeUsEl()     Sets the current record's "fe_us_el" value
 * @method Spodp               setCampo1()     Sets the current record's "campo1" value
 * @method Spodp               setCampo2()     Sets the current record's "campo2" value
 * @method Spodp               setCampo3()     Sets the current record's "campo3" value
 * @method Spodp               setCampo4()     Sets the current record's "campo4" value
 * @method Spodp               setCampo5()     Sets the current record's "campo5" value
 * @method Spodp               setCampo6()     Sets the current record's "campo6" value
 * @method Spodp               setCampo7()     Sets the current record's "campo7" value
 * @method Spodp               setCampo8()     Sets the current record's "campo8" value
 * @method Spodp               setRowguid()    Sets the current record's "rowguid" value
 * @method Spodp               setFeEmis()     Sets the current record's "fe_emis" value
 * @method Spodp               setDescrip()    Sets the current record's "descrip" value
 * @method Spodp               setComentario() Sets the current record's "comentario" value
 * @method Spodp               setCoSucu()     Sets the current record's "co_sucu" value
 * @method Spodp               setAnulado()    Sets the current record's "anulado" value
 * @method Spodp               setDisCen()     Sets the current record's "dis_cen" value
 * @method Spodp               setMpCant()     Sets the current record's "mp_cant" value
 * @method Spodp               setMoCant()     Sets the current record's "mo_cant" value
 * @method Spodp               setGfCant()     Sets the current record's "gf_cant" value
 * @method Spodp               setMenCant()    Sets the current record's "men_cant" value
 * @method Spodp               setMemCant()    Sets the current record's "mem_cant" value
 * @method Spodp               setOiCant()     Sets the current record's "oi_cant" value
 * @method Spodp               setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Spodp               setTotalUni()   Sets the current record's "total_uni" value
 * @method Spodp               setUniVenta()   Sets the current record's "uni_venta" value
 * @method Spodp               setCodpcom()    Sets the current record's "codpcom" value
 * @method Spodp               setNodpcom()    Sets the current record's "nodpcom" value
 * @method Spodp               setDocOri()     Sets the current record's "doc_ori" value
 * @method Spodp               setSpced()      Sets the current record's "Spced" value
 * @method Spodp               setRengOdp()    Sets the current record's "RengOdp" collection
 * @method Spodp               setSpcierre()   Sets the current record's "Spcierre" collection
 * @method Spodp               setSpentre()    Sets the current record's "Spentre" collection
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpodp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('spodp');
        $this->hasColumn('odp_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('co_ced', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ca_art', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('fe_inic', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('fe_fin', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('prioridad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(3)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('edo_odp', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(\'A\')',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('num_maqblo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ct_estim', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('fe_emis', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('descrip', 'string', 80, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 80,
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
        $this->hasColumn('mp_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mo_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('gf_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('men_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('mem_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('oi_cant', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('total_uni', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(1)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('uni_venta', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('codpcom', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nodpcom', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('doc_ori', 'integer', 4, array(
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
        $this->hasOne('Spced', array(
             'local' => 'co_ced',
             'foreign' => 'co_ced'));

        $this->hasMany('RengOdp', array(
             'local' => 'odp_num',
             'foreign' => 'odp_num'));

        $this->hasMany('Spcierre', array(
             'local' => 'odp_num',
             'foreign' => 'odp_num'));

        $this->hasMany('Spentre', array(
             'local' => 'odp_num',
             'foreign' => 'odp_num'));
    }
}