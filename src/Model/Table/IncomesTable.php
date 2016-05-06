<?php
namespace App\Model\Table;

use App\Model\Entity\Income;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Incomes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Children
 * @property \Cake\ORM\Association\BelongsTo $Guardians
 * @property \Cake\ORM\Association\BelongsTo $Staffs
 */
class IncomesTable extends Table
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

        $this->table('incomes');
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
        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id',
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
            ->integer('income_types')
            ->allowEmpty('income_types');

        $validator
            ->allowEmpty('cautions');

        $validator
            ->allowEmpty('absence_type');

        $validator
            ->time('childcare_start')
            ->allowEmpty('childcare_start');

        $validator
            ->time('childcare_end')
            ->allowEmpty('childcare_end');

        $validator
            ->boolean('childcare_meal')
            ->requirePresence('childcare_meal', 'create')
            ->notEmpty('childcare_meal');

        $validator
            ->date('start')
            ->allowEmpty('start');

        $validator
            ->date('end')
            ->allowEmpty('end');

        $validator
            ->allowEmpty('repeat_type');

        $validator
            ->allowEmpty('repeat_week');

        $validator
            ->allowEmpty('sickness');

        $validator
            ->date('consulted')
            ->allowEmpty('consulted');

        $validator
            ->date('fevered')
            ->allowEmpty('fevered');

        $validator
            ->date('recovered')
            ->allowEmpty('recovered');

        $validator
            ->numeric('temperature')
            ->requirePresence('temperature', 'create')
            ->notEmpty('temperature');

        $validator
            ->boolean('cough')
            ->requirePresence('cough', 'create')
            ->notEmpty('cough');

        $validator
            ->allowEmpty('route');

        $validator
            ->allowEmpty('ip_addr');

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
        $rules->add($rules->existsIn(['staff_id'], 'Staffs'));
        return $rules;
    }
}
