<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Aranc', 'profit');

/**
 * BaseAranc
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $co_art
 * @property string $co_ara
 * @property string $des_ara
 * @property decimal $porc_ara
 * @property string $calidad
 * @property string $nivel
 * @property string $rowguid
 * @property Art $Art
 * 
 * @method string  getCoArt()    Returns the current record's "co_art" value
 * @method string  getCoAra()    Returns the current record's "co_ara" value
 * @method string  getDesAra()   Returns the current record's "des_ara" value
 * @method decimal getPorcAra()  Returns the current record's "porc_ara" value
 * @method string  getCalidad()  Returns the current record's "calidad" value
 * @method string  getNivel()    Returns the current record's "nivel" value
 * @method string  getRowguid()  Returns the current record's "rowguid" value
 * @method Art     getArt()      Returns the current record's "Art" value
 * @method Aranc   setCoArt()    Sets the current record's "co_art" value
 * @method Aranc   setCoAra()    Sets the current record's "co_ara" value
 * @method Aranc   setDesAra()   Sets the current record's "des_ara" value
 * @method Aranc   setPorcAra()  Sets the current record's "porc_ara" value
 * @method Aranc   setCalidad()  Sets the current record's "calidad" value
 * @method Aranc   setNivel()    Sets the current record's "nivel" value
 * @method Aranc   setRowguid()  Sets the current record's "rowguid" value
 * @method Aranc   setArt()      Sets the current record's "Art" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAranc extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aranc');
        $this->hasColumn('co_art', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('co_ara', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('des_ara', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('porc_ara', 'decimal', 20, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(0)',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('calidad', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('nivel', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasOne('Art', array(
             'local' => 'co_art',
             'foreign' => 'co_art'));
    }
}