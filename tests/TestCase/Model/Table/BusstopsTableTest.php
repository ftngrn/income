<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusstopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusstopsTable Test Case
 */
class BusstopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusstopsTable
     */
    public $Busstops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Busstops') ? [] : ['className' => 'App\Model\Table\BusstopsTable'];
        $this->Busstops = TableRegistry::get('Busstops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Busstops);

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
