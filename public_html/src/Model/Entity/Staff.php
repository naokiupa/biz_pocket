<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string $login_name
 * @property string $firstname
 * @property string $lastname
 * @property string $first_kana
 * @property string $last_kana
 * @property string $password
 * @property bool $delflag
 * @property string $delreazon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category[] $categories
 * @property \App\Model\Entity\Department[] $departments
 * @property \App\Model\Entity\Disease[] $diseases
 * @property \App\Model\Entity\Question[] $questions
 */
class Staff extends Entity
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
