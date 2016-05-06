<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IncomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IncomesTable Test Case
 */
class IncomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IncomesTable
     */
    public $Incomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.incomes',
        'app.children',
        'app.child_healths',
        'app.guardians',
        'app.child_medications',
        'app.received_staffs',
        'app.child_medication_histories',
        'app.staffs',
        'app.daily_reports',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas',
        'app.ptas',
        'app.busstops',
        'app.busstops_guardians',
        'app.child_parents',
        'app.busstops_child_parents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Incomes') ? [] : ['className' => 'App\Model\Table\IncomesTable'];
        $this->Incomes = TableRegistry::get('Incomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Incomes);

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
