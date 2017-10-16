<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DiseasesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DiseasesController Test Case
 */
class DiseasesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diseases',
        'app.categories',
        'app.staffs',
        'app.departments',
        'app.doctors',
        'app.hospitals',
        'app.hospitals_departments',
        'app.answers',
        'app.questions',
        'app.users'
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
