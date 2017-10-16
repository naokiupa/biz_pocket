<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doctors Model
 *
 * @property \App\Model\Table\HospitalsTable|\Cake\ORM\Association\BelongsTo $Hospitals
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\AnswersTable|\Cake\ORM\Association\HasMany $Answers
 *
 * @method \App\Model\Entity\Doctor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doctor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doctor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doctor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doctor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doctor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doctor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoctorsTable extends Table
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

        $this->setTable('doctors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Hospitals', [
            'foreignKey' => 'hospital_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Answers', [
            'foreignKey' => 'doctor_id'
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
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->scalar('login_name')
            ->requirePresence('login_name', 'create')
            ->notEmpty('login_name');

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmpty('password');

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
            ->boolean('jender')
            ->requirePresence('jender', 'create')
            ->notEmpty('jender');

        $validator
            ->dateTime('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->scalar('specialty')
            ->allowEmpty('specialty');

        $validator
            ->dateTime('registar')
            ->requirePresence('registar', 'create')
            ->notEmpty('registar');

        $validator
            ->integer('tel')
            ->requirePresence('tel', 'create')
            ->notEmpty('tel');

        $validator
            ->integer('fax')
            ->allowEmpty('fax');

        $validator
            ->scalar('mail')
            ->requirePresence('mail', 'create')
            ->notEmpty('mail');

        $validator
            ->scalar('secret_q')
            ->requirePresence('secret_q', 'create')
            ->notEmpty('secret_q');

        $validator
            ->scalar('secret_a')
            ->requirePresence('secret_a', 'create')
            ->notEmpty('secret_a');

        $validator
            ->scalar('opportunity')
            ->requirePresence('opportunity', 'create')
            ->notEmpty('opportunity');

        $validator
            ->scalar('reazon')
            ->requirePresence('reazon', 'create')
            ->notEmpty('reazon');

        $validator
            ->boolean('delflag')
            ->allowEmpty('delflag');

        $validator
            ->scalar('delreazon')
            ->allowEmpty('delreazon');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['hospital_id'], 'Hospitals'));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));

        return $rules;
    }
}
