<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RengCdp', 'profit');

/**
 * BaseRengCdp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $fact_num
 * @property integer $reng_num
 * @property string $tipo_doc
 * @property integer $reng_doc
 * @property integer $num_doc
 * @property string $co_art
 * @property string $co_alma
 * @property decimal $total_art
 * @property decimal $stotal_art
 * @property decimal $pendiente
 * @property string $uni_venta
 * @property decimal $prec_vta
 * @property string $porc_desc
 * @property string $tipo_imp
 * @property decimal $reng_neto
 * @property decimal $cos_pro_un
 * @property decimal $ult_cos_un
 * @property decimal $ult_cos_om
 * @property decimal $cos_pro_om
 * @property decimal $total_dev
 * @property decimal $monto_dev
 * @property decimal $prec_vta2
 * @property boolean $anulado
 * @property string $des_art
 * @property boolean $seleccion
 * @property decimal $cant_imp
 * @property string $comentario
 * @property string $rowguid
 * @property decimal $total_uni
 * @property decimal $mon_ilc
 * @property decimal $otros
 * @property string $nro_lote
 * @property timestamp $fec_lote
 * @property decimal $pendiente2
 * @property string $tipo_doc2
 * @property integer $reng_doc2
 * @property integer $num_doc2
 * @property string $co_alma2
 * @property decimal $aux01
 * @property string $aux02
 * @property decimal $cant_prod
 * @property decimal $imp_prod
 * @property Art $Art
 * @property SubAlma $SubAlma
 * 
 * @method integer   getFactNum()    Returns the current record's "fact_num" value
 * @method integer   getRengNum()    Returns the current record's "reng_num" value
 * @method string    getTipoDoc()    Returns the current record's "tipo_doc" value
 * @method integer   getRengDoc()    Returns the current record's "reng_doc" value
 * @method integer   getNumDoc()     Returns the current record's "num_doc" value
 * @method string    getCoArt()      Returns the current record's "co_art" value
 * @method string    getCoAlma()     Returns the current record's "co_alma" value
 * @method decimal   getTotalArt()   Returns the current record's "total_art" value
 * @method decimal   getStotalArt()  Returns the current record's "stotal_art" value
 * @method decimal   getPendiente()  Returns the current record's "pendiente" value
 * @method string    getUniVenta()   Returns the current record's "uni_venta" value
 * @method decimal   getPrecVta()    Returns the current record's "prec_vta" value
 * @method string    getPorcDesc()   Returns the current record's "porc_desc" value
 * @method string    getTipoImp()    Returns the current record's "tipo_imp" value
 * @method decimal   getRengNeto()   Returns the current record's "reng_neto" value
 * @method decimal   getCosProUn()   Returns the current record's "cos_pro_un" value
 * @method decimal   getUltCosUn()   Returns the current record's "ult_cos_un" value
 * @method decimal   getUltCosOm()   Returns the current record's "ult_cos_om" value
 * @method decimal   getCosProOm()   Returns the current record's "cos_pro_om" value
 * @method decimal   getTotalDev()   Returns the current record's "total_dev" value
 * @method decimal   getMontoDev()   Returns the current record's "monto_dev" value
 * @method decimal   getPrecVta2()   Returns the current record's "prec_vta2" value
 * @method boolean   getAnulado()    Returns the current record's "anulado" value
 * @method string    getDesArt()     Returns the current record's "des_art" value
 * @method boolean   getSeleccion()  Returns the current record's "seleccion" value
 * @method decimal   getCantImp()    Returns the current record's "cant_imp" value
 * @method string    getComentario() Returns the current record's "comentario" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method decimal   getTotalUni()   Returns the current record's "total_uni" value
 * @method decimal   getMonIlc()     Returns the current record's "mon_ilc" value
 * @method decimal   getOtros()      Returns the current record's "otros" value
 * @method string    getNroLote()    Returns the current record's "nro_lote" value
 * @method timestamp getFecLote()    Returns the current record's "fec_lote" value
 * @method decimal   getPendiente2() Returns the current record's "pendiente2" value
 * @method string    getTipoDoc2()   Returns the current record's "tipo_doc2" value
 * @method integer   getRengDoc2()   Returns the current record's "reng_doc2" value
 * @method integer   getNumDoc2()    Returns the current record's "num_doc2" value
 * @method string    getCoAlma2()    Returns the current record's "co_alma2" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method decimal   getCantProd()   Returns the current record's "cant_prod" value
 * @method decimal   getImpProd()    Returns the current record's "imp_prod" value
 * @method Art       getArt()        Returns the current record's "Art" value
 * @method SubAlma   getSubAlma()    Returns the current record's "SubAlma" value
 * @method RengCdp   setFactNum()    Sets the current record's "fact_num" value
 * @method RengCdp   setRengNum()    Sets the current record's "reng_num" value
 * @method RengCdp   setTipoDoc()    Sets the current record's "tipo_doc" value
 * @method RengCdp   setRengDoc()    Sets the current record's "reng_doc" value
 * @method RengCdp   setNumDoc()     Sets the current record's "num_doc" value
 * @method RengCdp   setCoArt()      Sets the current record's "co_art" value
 * @method RengCdp   setCoAlma()     Sets the current record's "co_alma" value
 * @method RengCdp   setTotalArt()   Sets the current record's "total_art" value
 * @method RengCdp   setStotalArt()  Sets the current record's "stotal_art" value
 * @method RengCdp   setPendiente()  Sets the current record's "pendiente" value
 * @method RengCdp   setUniVenta()   Sets the current record's "uni_venta" value
 * @method RengCdp   setPrecVta()    Sets the current record's "prec_vta" value
 * @method RengCdp   setPorcDesc()   Sets the current record's "porc_desc" value
 * @method RengCdp   setTipoImp()    Sets the current record's "tipo_imp" value
 * @method RengCdp   setRengNeto()   Sets the current record's "reng_neto" value
 * @method RengCdp   setCosProUn()   Sets the current record's "cos_pro_un" value
 * @method RengCdp   setUltCosUn()   Sets the current record's "ult_cos_un" value
 * @method RengCdp   setUltCosOm()   Sets the current record's "ult_cos_om" value
 * @method RengCdp   setCosProOm()   Sets the current record's "cos_pro_om" value
 * @method RengCdp   setTotalDev()   Sets the current record's "total_dev" value
 * @method RengCdp   setMontoDev()   Sets the current record's "monto_dev" value
 * @method RengCdp   setPrecVta2()   Sets the current record's "prec_vta2" value
 * @method RengCdp   setAnulado()    Sets the current record's "anulado" value
 * @method RengCdp   setDesArt()     Sets the current record's "des_art" value
 * @method RengCdp   setSeleccion()  Sets the current record's "seleccion" value
 * @method RengCdp   setCantImp()    Sets the current record's "cant_imp" value
 * @method RengCdp   setComentario() Sets the current record's "comentario" value
 * @method RengCdp   setRowguid()    Sets the current record's "rowguid" value
 * @method RengCdp   setTotalUni()   Sets the current record's "total_uni" value
 * @method RengCdp   setMonIlc()     Sets the current record's "mon_ilc" value
 * @method RengCdp   setOtros()      Sets the current record's "otros" value
 * @method RengCdp   setNroLote()    Sets the current record's "nro_lote" value
 * @method RengCdp   setFecLote()    Sets the current record's "fec_lote" value
 * @method RengCdp   setPendiente2() Sets the current record's "pendiente2" value
 * @method RengCdp   setTipoDoc2()   Sets the current record's "tipo_doc2" value
 * @method RengCdp   setRengDoc2()   Sets the current record's "reng_doc2" value
 * @method RengCdp   setNumDoc2()    Sets the current record's "num_doc2" value
 * @method RengCdp   setCoAlma2()    Sets the current record's "co_alma2" value
 * @method RengCdp   setAux01()      Sets the current record's "aux01" value
 * @method RengCdp   setAux02()      Sets the current record's "aux02" value
 * @method RengCdp   setCantProd()   Sets the current record's "cant_prod" value
 * @method RengCdp   setImpProd()    Sets the current record's "imp_prod" value
 * @method RengCdp   setArt()        Sets the current record's "Art" value
 * @method RengCdp   setSubAlma()    Sets the current record's "SubAlma" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRengCdp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reng_cdp');
        $this->hasColumn('fact_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reng_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tipo_doc', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('reng_doc', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_doc', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
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
        $this->hasColumn('co_alma', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('total_art', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('stotal_art', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('pendiente', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
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
        $this->hasColumn('prec_vta', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('porc_desc', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
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
        $this->hasColumn('reng_neto', 'decimal', 22, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 22,
             ));
        $this->hasColumn('cos_pro_un', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ult_cos_un', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ult_cos_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cos_pro_om', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('total_dev', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('monto_dev', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('prec_vta2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('des_art', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('seleccion', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cant_imp', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
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
        $this->hasColumn('mon_ilc', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('otros', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('nro_lote', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('fec_lote', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('pendiente2', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('tipo_doc2', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('reng_doc2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_doc2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('co_alma2', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 6,
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
        $this->hasColumn('cant_prod', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('imp_prod', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));

        $this->hasOne('SubAlma', array(
             'local' => 'co_alma',
             'foreign' => 'co_sub'));
    }
}