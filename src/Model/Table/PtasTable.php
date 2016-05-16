<?php
namespace App\Model\Table;

use App\Model\Entity\Pta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ptas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Guardians
 * @property \Cake\ORM\Association\BelongsTo $Children
 */
class PtasTable extends Table
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

        $this->table('ptas');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Guardians', [
            'foreignKey' => 'guardian_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Children', [
            'foreignKey' => 'child_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('kana');

        $validator
            ->allowEmpty('year');

        $validator
            ->allowEmpty('room');

        $validator
            ->allowEmpty('job');

        $validator
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('addr');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('mobile');

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
        $rules->add($rules->existsIn(['guardian_id'], 'Guardians'));
        $rules->add($rules->existsIn(['child_id'], 'Children'));
        return $rules;
    }
}
