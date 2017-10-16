<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctorsTable Test Case
 */
class DoctorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctorsTable
     */
    public $Doctors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doctors',
        'app.hospitals',
        'app.departments',
        'app.staffs',
        'app.categories',
        'app.diseases',
        'app.questions',
        'app.users',
        'app.answers',
        'app.news',
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
        $config = TableRegistry::exists('Doctors') ? [] : ['className' => DoctorsTable::class];
        $this->Doctors = TableRegistry::get('Doctors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doctors);

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
