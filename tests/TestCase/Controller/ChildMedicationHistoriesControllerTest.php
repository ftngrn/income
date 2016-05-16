<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ChildMedicationHistoriesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ChildMedicationHistoriesController Test Case
 */
class ChildMedicationHistoriesControllerTest extends IntegrationTestCase
{

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
        'app.busstops_guardians',
        'app.busstops',
        'app.busstops_child_parents',
        'app.child_parents',
        'app.incomes',
        'app.staffs',
        'app.daily_reports',
        'app.journals',
        'app.vacations',
        'app.weekly_ideas',
        'app.ptas',
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
