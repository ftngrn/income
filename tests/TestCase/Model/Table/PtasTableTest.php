<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PtasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PtasTable Test Case
 */
class PtasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PtasTable
     */
    public $Ptas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ptas',
        'app.guardians',
        'app.child_healths',
        'app.children',
        'app.child_medications',
        'app.received_staffs',
        'app.child_medication_histories',
        'app.staffs',
        'app.daily_reports',
        'app.incomes',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas',
        'app.busstops',
        'app.busstops_guardians'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ptas') ? [] : ['className' => 'App\Model\Table\PtasTable'];
        $this->Ptas = TableRegistry::get('Ptas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ptas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
