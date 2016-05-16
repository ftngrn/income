<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildMedicationHistoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildMedicationHistoriesTable Test Case
 */
class ChildMedicationHistoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildMedicationHistoriesTable
     */
    public $ChildMedicationHistories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.child_medication_histories',
        'app.child_medications',
        'app.children',
        'app.child_healths',
        'app.guardians',
        'app.incomes',
        'app.child_parents',
        'app.journals',
        'app.ptas',
        'app.busstops',
        'app.busstops_guardians',
        'app.busstops_child_parents',
        'app.staffs',
        'app.daily_reports',
        'app.vacations',
        'app.weekly_ideas',
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
        $config = TableRegistry::exists('ChildMedicationHistories') ? [] : ['className' => 'App\Model\Table\ChildMedicationHistoriesTable'];
        $this->ChildMedicationHistories = TableRegistry::get('ChildMedicationHistories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChildMedicationHistories);

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
