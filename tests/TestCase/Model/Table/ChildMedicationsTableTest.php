<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildMedicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildMedicationsTable Test Case
 */
class ChildMedicationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildMedicationsTable
     */
    public $ChildMedications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.child_medication_histories',
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
        $config = TableRegistry::exists('ChildMedications') ? [] : ['className' => 'App\Model\Table\ChildMedicationsTable'];
        $this->ChildMedications = TableRegistry::get('ChildMedications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChildMedications);

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
