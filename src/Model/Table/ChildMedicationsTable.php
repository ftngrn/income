<?php
namespace App\Model\Table;

use App\Model\Entity\ChildMedication;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChildMedications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Children
 * @property \Cake\ORM\Association\BelongsTo $Guardians
 * @property \Cake\ORM\Association\BelongsTo $ReceivedStaffs
 * @property \Cake\ORM\Association\HasMany $ChildMedicationHistories
 */
class ChildMedicationsTable extends Table
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

        $this->table('child_medications');
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
        $this->belongsTo('ReceivedStaffs', [
            'foreignKey' => 'received_staff_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ChildMedicationHistories', [
            'foreignKey' => 'child_medication_id'
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
            ->requirePresence('doctor', 'create')
            ->notEmpty('doctor');

        $validator
            ->requirePresence('doctor_tel', 'create')
            ->notEmpty('doctor_tel');

        $validator
            ->requirePresence('diagnosis', 'create')
            ->notEmpty('diagnosis');

        $validator
            ->requirePresence('medicine_type', 'create')
            ->notEmpty('medicine_type');

        $validator
            ->requirePresence('medicine_object', 'create')
            ->notEmpty('medicine_object');

        $validator
            ->date('start')
            ->allowEmpty('start');

        $validator
            ->integer('end')
            ->allowEmpty('end');

        $validator
            ->integer('method')
            ->allowEmpty('method');

        $validator
            ->allowEmpty('caution');

        $validator
            ->date('received')
            ->allowEmpty('received');

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
        $rules->add($rules->existsIn(['received_staff_id'], 'ReceivedStaffs'));
        return $rules;
    }
}
