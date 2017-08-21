<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SessoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SessoesTable Test Case
 */
class SessoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SessoesTable
     */
    public $Sessoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sessoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sessoes') ? [] : ['className' => SessoesTable::class];
        $this->Sessoes = TableRegistry::get('Sessoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sessoes);

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
