<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HistPlan', 'profit');

/**
 * BaseHistPlan
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_hist
 * @property string $co_plan
 * @property string $plan_num
 * @property string $des_hist
 * @property string $xml_cont
 * @property timestamp $gen_fec
 * @property string $mes_plan
 * @property string $ano_plan
 * @property timestamp $can_fech
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
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
 * @property PlanFis $PlanFis
 * 
 * @method string    getIdHist()   Returns the current record's "id_hist" value
 * @method string    getCoPlan()   Returns the current record's "co_plan" value
 * @method string    getPlanNum()  Returns the current record's "plan_num" value
 * @method string    getDesHist()  Returns the current record's "des_hist" value
 * @method string    getXmlCont()  Returns the current record's "xml_cont" value
 * @method timestamp getGenFec()   Returns the current record's "gen_fec" value
 * @method string    getMesPlan()  Returns the current record's "mes_plan" value
 * @method string    getAnoPlan()  Returns the current record's "ano_plan" value
 * @method timestamp getCanFech()  Returns the current record's "can_fech" value
 * @method string    getCampo1()   Returns the current record's "campo1" value
 * @method string    getCampo2()   Returns the current record's "campo2" value
 * @method string    getCampo3()   Returns the current record's "campo3" value
 * @method string    getCampo4()   Returns the current record's "campo4" value
 * @method string    getCoUsIn()   Returns the current record's "co_us_in" value
 * @method timestamp getFeUsIn()   Returns the current record's "fe_us_in" value
 * @method string    getCoUsMo()   Returns the current record's "co_us_mo" value
 * @method timestamp getFeUsMo()   Returns the current record's "fe_us_mo" value
 * @method string    getCoUsEl()   Returns the current record's "co_us_el" value
 * @method timestamp getFeUsEl()   Returns the current record's "fe_us_el" value
 * @method string    getRevisado() Returns the current record's "revisado" value
 * @method string    getTrasnfe()  Returns the current record's "trasnfe" value
 * @method string    getCoSucu()   Returns the current record's "co_sucu" value
 * @method string    getRowguid()  Returns the current record's "rowguid" value
 * @method PlanFis   getPlanFis()  Returns the current record's "PlanFis" value
 * @method HistPlan  setIdHist()   Sets the current record's "id_hist" value
 * @method HistPlan  setCoPlan()   Sets the current record's "co_plan" value
 * @method HistPlan  setPlanNum()  Sets the current record's "plan_num" value
 * @method HistPlan  setDesHist()  Sets the current record's "des_hist" value
 * @method HistPlan  setXmlCont()  Sets the current record's "xml_cont" value
 * @method HistPlan  setGenFec()   Sets the current record's "gen_fec" value
 * @method HistPlan  setMesPlan()  Sets the current record's "mes_plan" value
 * @method HistPlan  setAnoPlan()  Sets the current record's "ano_plan" value
 * @method HistPlan  setCanFech()  Sets the current record's "can_fech" value
 * @method HistPlan  setCampo1()   Sets the current record's "campo1" value
 * @method HistPlan  setCampo2()   Sets the current record's "campo2" value
 * @method HistPlan  setCampo3()   Sets the current record's "campo3" value
 * @method HistPlan  setCampo4()   Sets the current record's "campo4" value
 * @method HistPlan  setCoUsIn()   Sets the current record's "co_us_in" value
 * @method HistPlan  setFeUsIn()   Sets the current record's "fe_us_in" value
 * @method HistPlan  setCoUsMo()   Sets the current record's "co_us_mo" value
 * @method HistPlan  setFeUsMo()   Sets the current record's "fe_us_mo" value
 * @method HistPlan  setCoUsEl()   Sets the current record's "co_us_el" value
 * @method HistPlan  setFeUsEl()   Sets the current record's "fe_us_el" value
 * @method HistPlan  setRevisado() Sets the current record's "revisado" value
 * @method HistPlan  setTrasnfe()  Sets the current record's "trasnfe" value
 * @method HistPlan  setCoSucu()   Sets the current record's "co_sucu" value
 * @method HistPlan  setRowguid()  Sets the current record's "rowguid" value
 * @method HistPlan  setPlanFis()  Sets the current record's "PlanFis" value
 * 
 * @package    gesser
 * @subpackage model
 * @author     Luis Hernández
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHistPlan extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hist_plan');
        $this->hasColumn('id_hist', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('co_plan', 'string', 10, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('plan_num', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('des_hist', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('xml_cont', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2147483647,
             ));
        $this->hasColumn('gen_fec', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(dateadd(millisecond,(((-datepart(millisecond,getdate())))),getdate()))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('mes_plan', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('ano_plan', 'string', 4, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('can_fech', 'timestamp', 16, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 16,
             ));
        $this->hasColumn('campo1', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo2', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo3', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(space(1))',
             'primary' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('campo4', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PlanFis', array(
             'local' => 'co_plan',
             'foreign' => 'co_plan'));
    }
}