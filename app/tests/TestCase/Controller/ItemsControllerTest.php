<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ItemsController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ItemsController Test Case
 */
class ItemsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/items');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/items/view/1');
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $data = [
            'id' => 2,
            'supplier_id' => 1,
            'user_id' => 1,
            'price' => 1,
            'purchase_price' => 1,
            'stock' => 1,
            'name' => 'test note'
        ];
        $this->cookie("csrfToken", "test-token");
        $this->_request['headers'] = ['X-CSRF-Token' => 'test-token'];
        $this->post('/items/add', $data);

        $this->assertResponseSuccess();

        $items = TableRegistry::get('Items');
        $query = $items->find()->where(['name' => $data['name']]);
        $this->assertEquals(1, $query->count());
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
