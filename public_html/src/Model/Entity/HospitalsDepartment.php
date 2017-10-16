<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HospitalsDepartment Entity
 *
 * @property int $id
 * @property int $hospital_id
 * @property int $department_id
 * @property bool $delflag
 * @property string $delreazon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Hospital $hospital
 * @property \App\Model\Entity\Department $department
 */
class HospitalsDepartment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
