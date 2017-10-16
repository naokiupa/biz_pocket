<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hospital Entity
 *
 * @property int $id
 * @property string $name
 * @property int $postalcode
 * @property string $prefecture
 * @property string $address
 * @property \Cake\I18n\FrozenTime $open
 * @property int $how_many_doctors
 * @property int $tel
 * @property int $fax
 * @property string $mail
 * @property string $website
 * @property bool $delflag
 * @property string $delreazon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Doctor[] $doctors
 * @property \App\Model\Entity\Department[] $departments
 */
class Hospital extends Entity
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
