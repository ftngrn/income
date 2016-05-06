<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeklyIdeasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeklyIdeasTable Test Case
 */
class WeeklyIdeasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeklyIdeasTable
     */
    public $WeeklyIdeas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weekly_ideas',
        'app.staffs',
        'app.child_medication_histories',
        'app.child_medications',
        'app.children',
        'app.child_healths',
        'app.guardians',
        'app.incomes',
        'app.ptas',
        'app.busstops',
        'app.busstops_guardians',
        'app.received_staffs',
        'app.daily_reports',
        'app.journals',
        'app.vacations',
        'app.weekly_idea_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WeeklyIdeas') ? [] : ['className' => 'App\Model\Table\WeeklyIdeasTable'];
        $this->WeeklyIdeas = TableRegistry::get('WeeklyIdeas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeeklyIdeas);

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
