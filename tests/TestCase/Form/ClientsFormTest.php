<?php
namespace App\Test\TestCase\Form;

use App\Form\ClientsForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ClientsForm Test Case
 */
class ClientsFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\ClientsForm
     */
    public $Clients;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Clients = new ClientsForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clients);

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
