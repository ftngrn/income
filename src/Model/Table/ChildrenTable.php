<?php
namespace App\Model\Table;

use App\Model\Entity\Child;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Children Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Guardians
 * @property \Cake\ORM\Association\HasMany $ChildHealths
 * @property \Cake\ORM\Association\HasMany $ChildMedications
 * @property \Cake\ORM\Association\HasMany $Incomes
 * @property \Cake\ORM\Association\HasMany $Ptas
 */
class ChildrenTable extends Table
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

        $this->table('children');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Guardians', [
            'foreignKey' => 'guardian_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ChildHealths', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('ChildMedications', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('Incomes', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'model_id',
						'conditions' => ['model' => $this->_table],
						'finder' => 'withoutBody',
        ]);
        $this->hasMany('Ptas', [
            'foreignKey' => 'child_id'
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
            ->allowEmpty('school');

        $validator
            ->allowEmpty('room');

        $validator
            ->allowEmpty('grade');

        $validator
            ->allowEmpty('bus');

        $validator
            ->allowEmpty('course');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('kana');

        $validator
            ->allowEmpty('sex');

        $validator
            ->date('birthed')
            ->allowEmpty('birthed');

        $validator
            ->date('joined')
            ->allowEmpty('joined');

        $validator
            ->date('finished')
            ->allowEmpty('finished');

        $validator
            ->allowEmpty('memo');

        $validator
            ->integer('season')
            ->allowEmpty('season');

        $validator
            ->integer('number')
            ->allowEmpty('number');

        $validator
            ->allowEmpty('oldname');

        $validator
            ->allowEmpty('newschool');

        $validator
            ->allowEmpty('newzip');

        $validator
            ->allowEmpty('newpref');

        $validator
            ->allowEmpty('newaddr');

        $validator
            ->allowEmpty('newaddr2');

        $validator
            ->allowEmpty('newtel');

        $validator
            ->boolean('nondelivery')
            ->allowEmpty('nondelivery');

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
        $rules->add($rules->existsIn(['guardian_id'], 'Guardians'));
        return $rules;
    }
}
