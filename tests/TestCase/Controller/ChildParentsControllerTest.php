<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ChildParentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ChildParentsController Test Case
 */
class ChildParentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.child_parents',
        'app.child_healths',
        'app.child_medications',
        'app.incomes',
        'app.children',
        'app.ptas',
        'app.staffs',
        'app.child_medication_histories',
        'app.daily_reports',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas',
        'app.busstops',
        'app.busstops_child_parents'
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
