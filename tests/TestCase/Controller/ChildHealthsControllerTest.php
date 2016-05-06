<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ChildHealthsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ChildHealthsController Test Case
 */
class ChildHealthsControllerTest extends IntegrationTestCase
{

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
