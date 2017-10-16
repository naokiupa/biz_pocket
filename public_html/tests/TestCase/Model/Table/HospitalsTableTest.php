<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospitalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospitalsTable Test Case
 */
class HospitalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HospitalsTable
     */
    public $Hospitals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hospitals',
        'app.doctors',
        'app.departments',
        'app.staffs',
        'app.categories',
        'app.diseases',
        'app.questions',
        'app.users',
        'app.answers',
        'app.hospitals_departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hospitals') ? [] : ['className' => HospitalsTable::class];
        $this->Hospitals = TableRegistry::get('Hospitals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hospitals);

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
