<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospitalsDepartmentsFixture
 *
 */
class HospitalsDepartmentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'hospital_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'department_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'delflag' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'delreazon' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_hospitals_departments_hospital' => ['type' => 'index', 'columns' => ['hospital_id'], 'length' => []],
            'fk_hospitals_departments_department' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_hospitals_departments_department' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_hospitals_departments_hospital' => ['type' => 'foreign', 'columns' => ['hospital_id'], 'references' => ['hospitals', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'hospital_id' => 1,
            'department_id' => 1,
            'delflag' => 1,
            'delreazon' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-09-27 12:09:39',
            'modified' => '2017-09-27 12:09:39'
        ],
    ];
}
