<?php
namespace App\Test\TestCase\Controller;

use App\Controller\IncomesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\IncomesController Test Case
 */
class IncomesControllerTest extends IntegrationTestCase
{

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
        'app.weekly_idea_details',
        'app.weeklyeas',
        'app.ptas',
        'app.busstops',
        'app.busstops_guardians'
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
