<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diseases Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\StaffsTable|\Cake\ORM\Association\BelongsTo $Staffs
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Disease get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disease newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Disease[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disease|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disease patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disease[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disease findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiseasesTable extends Table
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

        $this->setTable('diseases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('News', [
            'foreignKey' => 'disease_id'
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'disease_id'
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
            ->scalar('lead')
            ->allowEmpty('lead');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['staff_id'], 'Staffs'));

        return $rules;
    }
}
