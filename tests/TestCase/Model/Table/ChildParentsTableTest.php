<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChildParentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChildParentsTable Test Case
 */
class ChildParentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChildParentsTable
     */
    public $ChildParents;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChildParents') ? [] : ['className' => 'App\Model\Table\ChildParentsTable'];
        $this->ChildParents = TableRegistry::get('ChildParents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChildParents);

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
