<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hospitals Model
 *
 * @property \App\Model\Table\DoctorsTable|\Cake\ORM\Association\HasMany $Doctors
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsToMany $Departments
 *
 * @method \App\Model\Entity\Hospital get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hospital newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hospital[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hospital|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hospital patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hospital[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hospital findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HospitalsTable extends Table
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

        $this->setTable('hospitals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Doctors', [
            'foreignKey' => 'hospital_id'
        ]);
        $this->belongsToMany('Departments', [
            'foreignKey' => 'hospital_id',
            'targetForeignKey' => 'department_id',
            'joinTable' => 'hospitals_departments'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('postalcode')
            ->requirePresence('postalcode', 'create')
            ->notEmpty('postalcode');

        $validator
            ->scalar('prefecture')
            ->requirePresence('prefecture', 'create')
            ->notEmpty('prefecture');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->dateTime('open')
            ->allowEmpty('open');

        $validator
            ->integer('how_many_doctors')
            ->allowEmpty('how_many_doctors');

        $validator
            ->integer('tel')
            ->requirePresence('tel', 'create')
            ->notEmpty('tel');

        $validator
            ->integer('fax')
            ->allowEmpty('fax');

        $validator
            ->scalar('mail')
            ->allowEmpty('mail');

        $validator
            ->scalar('website')
            ->allowEmpty('website');

        $validator
            ->boolean('delflag')
            ->allowEmpty('delflag');

        $validator
            ->scalar('delreazon')
            ->allowEmpty('delreazon');

        return $validator;
    }
}
