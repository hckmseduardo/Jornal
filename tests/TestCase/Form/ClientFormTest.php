<?php
namespace App\Test\TestCase\Form;

use App\Form\ClientForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ClientForm Test Case
 */
class ClientFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\ClientForm
     */
    public $Client;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Client = new ClientForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Client);

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
