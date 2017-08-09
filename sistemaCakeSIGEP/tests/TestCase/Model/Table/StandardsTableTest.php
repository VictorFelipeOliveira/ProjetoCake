<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StandardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StandardsTable Test Case
 */
class StandardsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StandardsTable
     */
    public $Standards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.standards'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Standards') ? [] : ['className' => StandardsTable::class];
        $this->Standards = TableRegistry::get('Standards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Standards);

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
