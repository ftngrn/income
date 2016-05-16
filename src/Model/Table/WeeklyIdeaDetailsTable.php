<?php
namespace App\Model\Table;

use App\Model\Entity\WeeklyIdeaDetail;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WeeklyIdeaDetails Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Weeklyeas
 */
class WeeklyIdeaDetailsTable extends Table
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

        $this->table('weekly_idea_details');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Weeklyeas', [
            'foreignKey' => 'weekly_idea_id',
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
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->allowEmpty('events');

        $validator
            ->allowEmpty('activity');

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
        $rules->add($rules->existsIn(['weekly_idea_id'], 'Weeklyeas'));
        return $rules;
    }
}
