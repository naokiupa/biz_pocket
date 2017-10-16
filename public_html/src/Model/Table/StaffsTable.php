<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staffs Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\HasMany $Categories
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\HasMany $Departments
 * @property \App\Model\Table\DiseasesTable|\Cake\ORM\Association\HasMany $Diseases
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StaffsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('staffs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Categories', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Departments', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Diseases', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'staff_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('login_name')
            ->requirePresence('login_name', 'create')
            ->notEmpty('login_name');

        $validator
            ->scalar('firstname')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('first_kana')
            ->requirePresence('first_kana', 'create')
            ->notEmpty('first_kana');

        $validator
            ->scalar('last_kana')
            ->requirePresence('last_kana', 'create')
            ->notEmpty('last_kana');

        $validator
            ->scalar('password')
            ->allowEmpty('password');

        $validator
            ->boolean('delflag')
            ->allowEmpty('delflag');

        $validator
            ->scalar('delreazon')
            ->allowEmpty('delreazon');

        return $validator;
    }
}
