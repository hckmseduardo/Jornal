<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposAnuncioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposAnuncioTable Test Case
 */
class TiposAnuncioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposAnuncioTable
     */
    public $TiposAnuncio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_anuncio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposAnuncio') ? [] : ['className' => TiposAnuncioTable::class];
        $this->TiposAnuncio = TableRegistry::get('TiposAnuncio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposAnuncio);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
