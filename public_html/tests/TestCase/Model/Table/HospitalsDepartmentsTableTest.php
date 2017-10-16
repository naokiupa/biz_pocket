<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospitalsDepartmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospitalsDepartmentsTable Test Case
 */
class HospitalsDepartmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HospitalsDepartmentsTable
     */
    public $HospitalsDepartments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hospitals_departments',
        'app.hospitals',
        'app.doctors',
        'app.departments',
        'app.staffs',
        'app.categories',
        'app.diseases',
        'app.questions',
        'app.users',
        'app.answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HospitalsDepartments') ? [] : ['className' => HospitalsDepartmentsTable::class];
        $this->HospitalsDepartments = TableRegistry::get('HospitalsDepartments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HospitalsDepartments);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
