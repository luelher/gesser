<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SerRma', 'profit');

/**
 * BaseSerRma
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $contador
 * @property integer $num_gara
 * @property string $co_art
 * @property string $serial
 * @property string $doc_tip_e
 * @property integer $doc_num_e
 * @property string $doc_tip_s
 * @property integer $doc_num_s
 * @property string $revisado
 * @property string $trasnfe
 * @property string $co_alma
 * @property string $rowguid
 * @property decimal $aux01
 * @property string $aux02
 * 
 * @method integer getId()        Returns the current record's "id" value
 * @method integer getContador()  Returns the current record's "contador" value
 * @method integer getNumGara()   Returns the current record's "num_gara" value
 * @method string  getCoArt()     Returns the current record's "co_art" value
 * @method string  getSerial()    Returns the current record's "serial" value
 * @method string  getDocTipE()   Returns the current record's "doc_tip_e" value
 * @method integer getDocNumE()   Returns the current record's "doc_num_e" value
 * @method string  getDocTipS()   Returns the current record's "doc_tip_s" value
 * @method integer getDocNumS()   Returns the current record's "doc_num_s" value
 * @method string  getRevisado()  Returns the current record's "revisado" value
 * @method string  getTrasnfe()   Returns the current record's "trasnfe" value
 * @method string  getCoAlma()    Returns the current record's "co_alma" value
 * @method string  getRowguid()   Returns the current record's "rowguid" value
 * @method decimal getAux01()     Returns the current record's "aux01" value
 * @method string  getAux02()     Returns the current record's "aux02" value
 * @method SerRma  setId()        Sets the current record's "id" value
 * @method SerRma  setContador()  Sets the current record's "contador" value
 * @method SerRma  setNumGara()   Sets the current record's "num_gara" value
 * @method SerRma  setCoArt()     Sets the current record's "co_art" value
 * @method SerRma  setSerial()    Sets the current record's "serial" value
 * @method SerRma  setDocTipE()   Sets the current record's "doc_tip_e" value
 * @method SerRma  setDocNumE()   Sets the current record's "doc_num_e" value
 * @method SerRma  setDocTipS()   Sets the current record's "doc_tip_s" value
 * @method SerRma  setDocNumS()   Sets the current record's "doc_num_s" value
 * @method SerRma  setRevisado()  Sets the current record's "revisado" value
 * @method SerRma  setTrasnfe()   Sets the current record's "trasnfe" value
 * @method SerRma  setCoAlma()    Sets the current record's "co_alma" value
 * @method SerRma  setRowguid()   Sets the current record's "rowguid" value
 * @method SerRma  setAux01()     Sets the current record's "aux01" value
 * @method SerRma  setAux02()     Sets the current record's "aux02" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSerRma extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ser_rma');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('contador', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num_gara', 'integer', 4, array(
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
        $this->hasColumn('serial', 'string', 40, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('doc_tip_e', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('doc_num_e', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('doc_tip_s', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('doc_num_s', 'integer', 4, array(
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