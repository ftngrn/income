<?php
namespace App\Model\Table;

use App\Model\Entity\ChildHealth;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChildHealths Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Children
 * @property \Cake\ORM\Association\BelongsTo $Guardians
 */
class ChildHealthsTable extends Table
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

        $this->table('child_healths');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Children', [
            'foreignKey' => 'child_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Guardians', [
            'foreignKey' => 'guardian_id',
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
            ->allowEmpty('insurance_number');

        $validator
            ->allowEmpty('doctor');

        $validator
            ->allowEmpty('doctor_tel');

        $validator
            ->numeric('temperature')
            ->requirePresence('temperature', 'create')
            ->notEmpty('temperature');

        $validator
            ->integer('has_allergy')
            ->requirePresence('has_allergy', 'create')
            ->notEmpty('has_allergy');

        $validator
            ->allowEmpty('allergy_diet');

        $validator
            ->allowEmpty('urticaria_food');

        $validator
            ->integer('nap')
            ->requirePresence('nap', 'create')
            ->notEmpty('nap');

        $validator
            ->allowEmpty('caution');

        $validator
            ->allowEmpty('memo');

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
        $rules->add($rules->existsIn(['child_id'], 'Children'));
        $rules->add($rules->existsIn(['guardian_id'], 'Guardians'));
        return $rules;
    }
}
