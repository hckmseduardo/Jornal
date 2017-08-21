<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersProfileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersProfileTable Test Case
 */
class UsersProfileTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersProfileTable
     */
    public $UsersProfile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_profile'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersProfile') ? [] : ['className' => UsersProfileTable::class];
        $this->UsersProfile = TableRegistry::get('UsersProfile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersProfile);

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
