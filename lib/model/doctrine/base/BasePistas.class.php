<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Pistas', 'profit');

/**
 * BasePistas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $usuario_id
 * @property string $usuario
 * @property timestamp $fecha
 * @property string $empresa
 * @property string $co_sucu
 * @property string $tabla
 * @property integer $num_doc
 * @property string $codigo
 * @property string $tipo_op
 * @property string $maquina
 * @property string $campos
 * @property string $rowguid
 * @property string $trasnfe
 * @property decimal $aux01
 * @property string $aux02
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method string    getUsuarioId()  Returns the current record's "usuario_id" value
 * @method string    getUsuario()    Returns the current record's "usuario" value
 * @method timestamp getFecha()      Returns the current record's "fecha" value
 * @method string    getEmpresa()    Returns the current record's "empresa" value
 * @method string    getCoSucu()     Returns the current record's "co_sucu" value
 * @method string    getTabla()      Returns the current record's "tabla" value
 * @method integer   getNumDoc()     Returns the current record's "num_doc" value
 * @method string    getCodigo()     Returns the current record's "codigo" value
 * @method string    getTipoOp()     Returns the current record's "tipo_op" value
 * @method string    getMaquina()    Returns the current record's "maquina" value
 * @method string    getCampos()     Returns the current record's "campos" value
 * @method string    getRowguid()    Returns the current record's "rowguid" value
 * @method string    getTrasnfe()    Returns the current record's "trasnfe" value
 * @method decimal   getAux01()      Returns the current record's "aux01" value
 * @method string    getAux02()      Returns the current record's "aux02" value
 * @method Pistas    setId()         Sets the current record's "id" value
 * @method Pistas    setUsuarioId()  Sets the current record's "usuario_id" value
 * @method Pistas    setUsuario()    Sets the current record's "usuario" value
 * @method Pistas    setFecha()      Sets the current record's "fecha" value
 * @method Pistas    setEmpresa()    Sets the current record's "empresa" value
 * @method Pistas    setCoSucu()     Sets the current record's "co_sucu" value
 * @method Pistas    setTabla()      Sets the current record's "tabla" value
 * @method Pistas    setNumDoc()     Sets the current record's "num_doc" value
 * @method Pistas    setCodigo()     Sets the current record's "codigo" value
 * @method Pistas    setTipoOp()     Sets the current record's "tipo_op" value
 * @method Pistas    setMaquina()    Sets the current record's "maquina" value
 * @method Pistas    setCampos()     Sets the current record's "campos" value
 * @method Pistas    setRowguid()    Sets the current record's "rowguid" value
 * @method Pistas    setTrasnfe()    Sets the current record's "trasnfe" value
 * @method Pistas    setAux01()      Sets the current record's "aux01" value
 * @method Pistas    setAux02()      Sets the current record's "aux02" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePistas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pistas');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('usuario_id', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('usuario', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('fecha', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(getdate())',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('empresa', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 15,
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
        $this->hasColumn('tabla', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 10,
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
        $this->hasColumn('codigo', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('tipo_op', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('maquina', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campos', 'string', 2147483647, array(
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
        $this->hasColumn('trasnfe', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}