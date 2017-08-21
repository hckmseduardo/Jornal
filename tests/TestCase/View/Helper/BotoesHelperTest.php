<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\BotoesHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\BotoesHelper Test Case
 */
class BotoesHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\BotoesHelper
     */
    public $Botoes;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Botoes = new BotoesHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Botoes);

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
