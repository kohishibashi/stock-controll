<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemsTable Test Case
 */
class ItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemsTable
     */
    public $ItemsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.items',
        'app.suppliers',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Items') ? [] : ['className' => ItemsTable::class];
        $this->ItemsTable = TableRegistry::getTableLocator()->get('Items', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemsTable);

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
