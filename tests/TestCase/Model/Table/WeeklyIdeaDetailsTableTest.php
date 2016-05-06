<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeklyIdeaDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeklyIdeaDetailsTable Test Case
 */
class WeeklyIdeaDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeklyIdeaDetailsTable
     */
    public $WeeklyIdeaDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weekly_idea_details',
        'app.weeklyeas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WeeklyIdeaDetails') ? [] : ['className' => 'App\Model\Table\WeeklyIdeaDetailsTable'];
        $this->WeeklyIdeaDetails = TableRegistry::get('WeeklyIdeaDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeeklyIdeaDetails);

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
