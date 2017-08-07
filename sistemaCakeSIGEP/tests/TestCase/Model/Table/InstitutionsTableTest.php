<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitutionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitutionsTable Test Case
 */
class InstitutionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitutionsTable
     */
    public $Institutions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institutions',
        'app.users',
        'app.roles',
        'app.users_has_groups',
        'app.users_has_projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Institutions') ? [] : ['className' => InstitutionsTable::class];
        $this->Institutions = TableRegistry::get('Institutions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institutions);

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