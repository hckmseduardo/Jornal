<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddtypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddtypesTable Test Case
 */
class AddtypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddtypesTable
     */
    public $Addtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.addtypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Addtypes') ? [] : ['className' => AddtypesTable::class];
        $this->Addtypes = TableRegistry::get('Addtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Addtypes);

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
