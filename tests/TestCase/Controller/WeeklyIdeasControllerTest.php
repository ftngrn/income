<?php
namespace App\Test\TestCase\Controller;

use App\Controller\WeeklyIdeasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\WeeklyIdeasController Test Case
 */
class WeeklyIdeasControllerTest extends IntegrationTestCase
{

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
