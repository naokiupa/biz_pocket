<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HospitalsDepartments Model
 *
 * @property \App\Model\Table\HospitalsTable|\Cake\ORM\Association\BelongsTo $Hospitals
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsTo $Departments
 *
 * @method \App\Model\Entity\HospitalsDepartment get($primaryKey, $options = [])
 * @method \App\Model\Entity\HospitalsDepartment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HospitalsDepartment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HospitalsDepartment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HospitalsDepartment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HospitalsDepartment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HospitalsDepartment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HospitalsDepartmentsTable extends Table
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

        $this->setTable('hospitals_departments');
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
