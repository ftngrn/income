<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuardiansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuardiansTable Test Case
 */
class GuardiansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GuardiansTable
     */
    public $Guardians;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.guardians',
        'app.child_healths',
        'app.children',
        'app.child_medications',
        'app.received_staffs',
        'app.child_medication_histories',
        'app.staffs',
        'app.daily_reports',
        'app.incomes',
        'app.child_parents',
        'app.journals',
        'app.ptas',
        'app.busstops',
        'app.busstops_guardians',
        'app.busstops_child_parents',
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
        $config = TableRegistry::exists('Guardians') ? [] : ['className' => 'App\Model\Table\GuardiansTable'];
        $this->Guardians = TableRegistry::get('Guardians', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Guardians);

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
}
