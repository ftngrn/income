<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DailyReportsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DailyReportsController Test Case
 */
class DailyReportsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
