<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ConcBan', 'profit');

/**
 * BaseConcBan
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_cta
 * @property integer $mes
 * @property integer $ano
 * @property integer $reng_num
 * @property integer $mov_num
 * @property timestamp $fec_conc
 * @property boolean $con_auto
 * @property string $rowguid
 * @property RengCon $RengCon
 * @property RengCon $RengCon_2
 * @property RengCon $RengCon_3
 * @property RengCon $RengCon_4
 * @property MovBan $MovBan
 * 
 * @method string    getCodCta()    Returns the current record's "cod_cta" value
 * @method integer   getMes()       Returns the current record's "mes" value
 * @method integer   getAno()       Returns the current record's "ano" value
 * @method integer   getRengNum()   Returns the current record's "reng_num" value
 * @method integer   getMovNum()    Returns the current record's "mov_num" value
 * @method timestamp getFecConc()   Returns the current record's "fec_conc" value
 * @method boolean   getConAuto()   Returns the current record's "con_auto" value
 * @method string    getRowguid()   Returns the current record's "rowguid" value
 * @method RengCon   getRengCon()   Returns the current record's "RengCon" value
 * @method RengCon   getRengCon2()  Returns the current record's "RengCon_2" value
 * @method RengCon   getRengCon3()  Returns the current record's "RengCon_3" value
 * @method RengCon   getRengCon4()  Returns the current record's "RengCon_4" value
 * @method MovBan    getMovBan()    Returns the current record's "MovBan" value
 * @method ConcBan   setCodCta()    Sets the current record's "cod_cta" value
 * @method ConcBan   setMes()       Sets the current record's "mes" value
 * @method ConcBan   setAno()       Sets the current record's "ano" value
 * @method ConcBan   setRengNum()   Sets the current record's "reng_num" value
 * @method ConcBan   setMovNum()    Sets the current record's "mov_num" value
 * @method ConcBan   setFecConc()   Sets the current record's "fec_conc" value
 * @method ConcBan   setConAuto()   Sets the current record's "con_auto" value
 * @method ConcBan   setRowguid()   Sets the current record's "rowguid" value
 * @method ConcBan   setRengCon()   Sets the current record's "RengCon" value
 * @method ConcBan   setRengCon2()  Sets the current record's "RengCon_2" value
 * @method ConcBan   setRengCon3()  Sets the current record's "RengCon_3" value
 * @method ConcBan   setRengCon4()  Sets the current record's "RengCon_4" value
 * @method ConcBan   setMovBan()    Sets the current record's "MovBan" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConcBan extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('conc_ban');
        $this->hasColumn('cod_cta', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('mes', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ano', 'integer', 4, array(
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
        $this->hasColumn('mov_num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fec_conc', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(convert(varchar(10),getdate(),104))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('con_auto', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('RengCon', array(
             'local' => 'cod_cta',
             'foreign' => 'cod_cta'));

        $this->hasOne('RengCon as RengCon_2', array(
             'local' => 'mes',
             'foreign' => 'mes'));

        $this->hasOne('RengCon as RengCon_3', array(
             'local' => 'ano',
             'foreign' => 'ano'));

        $this->hasOne('RengCon as RengCon_4', array(
             'local' => 'reng_num',
             'foreign' => 'reng_num'));

        $this->hasOne('MovBan', array(
             'local' => 'mov_num',
             'foreign' => 'mov_num'));
    }
}