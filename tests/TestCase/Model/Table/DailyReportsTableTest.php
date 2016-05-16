<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DailyReportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DailyReportsTable Test Case
 */
class DailyReportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DailyReportsTable
     */
    public $DailyReports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.daily_reports',
        'app.staffs',
        'app.child_medication_histories',
        'app.incomes',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DailyReports') ? [] : ['className' => 'App\Model\Table\DailyReportsTable'];
        $this->DailyReports = TableRegistry::get('DailyReports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DailyReports);

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
