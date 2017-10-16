<?php
namespace App\Test\TestCase\Controller;

use App\Controller\HospitalsDepartmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\HospitalsDepartmentsController Test Case
 */
class HospitalsDepartmentsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
