<?php
namespace App\Model\Table;

use App\Model\Entity\ChildMedicationHistory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChildMedicationHistories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ChildMedications
 * @property \Cake\ORM\Association\BelongsTo $Staffs
 */
class ChildMedicationHistoriesTable extends Table
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

        $this->table('child_medication_histories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ChildMedications', [
            'foreignKey' => 'child_medication_id',
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
            ->date('medicated')
            ->allowEmpty('medicated');

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
        $rules->add($rules->existsIn(['child_medication_id'], 'ChildMedications'));
        $rules->add($rules->existsIn(['staff_id'], 'Staffs'));
        return $rules;
    }
}
