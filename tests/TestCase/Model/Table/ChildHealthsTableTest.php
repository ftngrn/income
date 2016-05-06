<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildHealthsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildHealthsTable Test Case
 */
class ChildHealthsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildHealthsTable
     */
    public $ChildHealths;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.child_healths',
        'app.children',
        'app.child_medications',
        'app.child_parents',
        'app.incomes',
        'app.staffs',
        'app.child_medication_histories',
        'app.daily_reports',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas',
        'app.ptas',
        'app.busstops',
        'app.guardians',
        'app.busstops_guardians',
        'app.busstops_child_parents',
        'app.received_staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChildHealths') ? [] : ['className' => 'App\Model\Table\ChildHealthsTable'];
        $this->ChildHealths = TableRegistry::get('ChildHealths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChildHealths);

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
