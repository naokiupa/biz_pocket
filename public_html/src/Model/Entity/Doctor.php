<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Doctor Entity
 *
 * @property int $id
 * @property int $number
 * @property string $login_name
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $last_kana
 * @property string $first_kana
 * @property bool $jender
 * @property \Cake\I18n\FrozenTime $birthday
 * @property int $hospital_id
 * @property int $department_id
 * @property string $specialty
 * @property \Cake\I18n\FrozenTime $registar
 * @property int $tel
 * @property int $fax
 * @property string $mail
 * @property string $secret_q
 * @property string $secret_a
 * @property string $opportunity
 * @property string $reazon
 * @property bool $delflag
 * @property string $delreazon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Hospital $hospital
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Answer[] $answers
 */
class Doctor extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
